<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(int $album_id){
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'photo' =>'required|image'
        ]);

        $fileNameWithExtension = $request->file('photo')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
        $fileExtension = $request->file('photo')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $fileExtension;

        $request->file('photo')->storeAs('public/albums/' . $request->input('album-id'), $fileNameToStore);

        $photo = new Photo();
        $photo->title = $request->input('title');
        $photo->photo = $fileNameToStore;
        $photo->size = $request->file('photo')->getSize();
        $photo->album_id = $request->input('album-id');
        $photo->save();

        return redirect('/albums/' . $request->input('album-id'))->with('success', 'Photo uploaded successfully!');

    }

    public function show($id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo', $photo);

    }

    public function delete($id){
        $photo = Photo::find($id);

        if(Storage::delete('public/albums/' . $photo->album_id . '/' . $photo->photo)) {
            $photo->delete();
        }
        return redirect()->route('album-show', $photo->album_id)->with('success', 'Photo deleted successfully!');
    }
}
