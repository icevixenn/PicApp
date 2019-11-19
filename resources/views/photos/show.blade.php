@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $photo->title }} <a type="button" class="btn btn-primary float-right" href="{{ route('album-show', $photo->album_id) }}">Go Back</a> </h3>
                    </div>
                    <div class="card-body">

                        <img src="/storage/albums/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" width="990px">
                        <br>

                        <p class="text-right">
                            Created: {{ $photo->created_at->diffForHumans() }}
                            <br>
                            Size: {{ $photo->size }}
                        </p>

                        <form action="{{ route('photo-delete', $photo->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="button" class="btn btn-danger float-right">Delete Photo</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection