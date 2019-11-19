@extends('layouts.app')

@section('content')

<div class="container col-md-12 text-center">

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark text-center">
        <div>
            <h1 class="display-4 font-italic">Welcome to PicApp application</h1>
            <p class="lead my-3">Here you can store your pictures in albums.</p>
            <p class="lead mb-0"><a href="#1" class="text-white font-weight-bold">Choose where you want to go...</a></p>
        </div>
    </div>

<div class="container col-md-8">
    <div class="row mt-5 mb-5" id="1">
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('storage/home_page/login.jpg') }}" width="140" height="140">
            <h2>Log in</h2>
            <p>Log in if you already have an account on our page to have full access. </p>
            <p><a class="btn btn-secondary" href="{{ route('login') }}" role="button">Go to page &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('storage/home_page/register.png') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Register</h2>
            <p>If you don't have an account, don't worry - you can quickly register!</p>
            <p><a class="btn btn-secondary" href="{{ route('register') }}" role="button">Go to page &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('storage/home_page/about.jpg') }}" width="140" height="140">
            <h2>About</h2>
            <p>If you don't know what this application is all about, check it out in our About Page!</p>
            <p><a class="btn btn-secondary" href="{{ route('about') }}" role="button">Go to page &raquo;</a></p>
        </div>
    </div><!-- /.row -->

    <div class="row mt-5 mb-5">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('storage/home_page/contact.png') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Contact</h2>
            <p>In case you want to contact owner of this page, go and see our Contact Page.</p>
            <p><a class="btn btn-secondary" href="{{ route('contact') }}" role="button">Go to page &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

</div>
</div>

@endsection
