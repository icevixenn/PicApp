@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create new album <a type="button" class="btn btn-primary float-right" href="{{ route('home') }}">Go Back</a> </h2>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('album-store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
                            <div class="form-group">
                                <label for="name">Enter name of the album</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="description">Enter description of the album</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label for="cover_image">Choose image for the cover</label>
                                <input type="file" class="form-control" id="cover_image" name="cover_image">
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