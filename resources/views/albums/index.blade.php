@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">
                            <a type="button" class="btn btn-primary float-left" href="{{ route('create-album') }}">Create New Album</a>
                            Albums
                            <a type="button" class="btn btn-primary float-right" href="{{ route('home') }}">Go Back</a> </h2>
                    </div>

                    <div class="card-body">

                        @if(count($albums) > 0)
                            <div class="row">
                                @foreach($albums as $album)
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <img src="/storage/album_covers/{{ $album->cover_image }}" alt="/storage/album_covers/{{ $album->cover_image }}" height="200px">
                                            <div class="card-body">
                                                <h6 class="card-text">{{ $album->name }}</h6>
                                                <p class="card-text">{{ $album->description }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <a href="{{ route('album-show', $album->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                                    </div>
                                                    <small class="text-muted">Created: {{ $album->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        @else
                            <h3>No albums yet.</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection