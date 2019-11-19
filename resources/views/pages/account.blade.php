@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>User Information <a type="button" class="btn btn-primary float-right" href="{{ route('home') }}">Go Back</a> </h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="row">
                                <div class="col-md-6">
                                        <form method="POST" action="/pages/account/{{ $user->id }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <div class="column" >
                                                    <img src="/storage/user_photos/{{ $user->user_photo }}" style="max-height:500px; max-width:500px; height:auto; width:auto;">
                                                </div>
                                                <label for="user_photo">Choose your picture</label>
                                                <input type="file" class="form-control" id="user_photo" name="user_photo">
                                            </div>
                                            <button type="submit" class="btn btn-primary">EDIT</button>
                                        </form>
                                </div>

                                <div class="col-md-6">

                                        <form method="POST" action="{{ route('edit-user', $user) }}">
                                            @csrf
                                            @method('PATCH')

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Surname</label>
                                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname" value="{{ $user->surname }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ $user->address }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" value="{{ $user->website }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter e-mail" value="{{ $user->email }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="bio">Bio</label>
                                                <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio" value="{{ $user->bio }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label for="bio">Confirm password</label>
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter password again">
                                            </div>
                                            <button type="submit" class="btn btn-primary">EDIT</button>

                                         </form>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
