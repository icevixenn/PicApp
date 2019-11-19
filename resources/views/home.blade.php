@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>

                    <p><a type="button" class="btn btn-primary" href="{{ route('account') }}">Edit Info</a>&ensp; View or edit your personal information</p>
                    <p><a type="button" class="btn btn-primary" href="{{ route('create-album') }}">Albums</a>&ensp; Create new album</p>
                    <p><a type="button" class="btn btn-primary" href="{{ route('index-album') }}">Albums</a>&ensp; Go to your existing albums</p>
                    <p><a type="button" class="btn btn-primary" href="{{ route('about') }}">About</a>&ensp; Check out our about page</p>
                    <p><a type="button" class="btn btn-primary" href="{{ route('contact') }}">Contact</a>&ensp; See our contact information</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
