@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Upload new photo <a type="button" class="btn btn-primary float-right" href="{{ route('album-show', $album_id) }}">Go Back</a> </h2>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="album-id" value="{{ $album_id }}">
                            <div class="form-group">
                                <label for="title">Enter title of the photo</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="photo">Choose photo</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection