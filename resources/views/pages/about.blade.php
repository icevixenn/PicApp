@extends('layouts.app')

@section('content')

    <div class="col-md-12 text-center">

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark text-center">
            <div>
                <h1 class="display-4 font-italic">About PicApp Application</h1>
                <p class="lead mb-0"><a href="#1" class="text-white font-weight-bold">See what you can do...</a></p>
            </div>
        </div>


        <section>
            <div class="container">
                <div class="row align-items-center" id="1">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <img class="ratio img-responsive" src="{{ asset('storage/home_page/2.JPG') }}" alt="" height="400px">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Create New Album</h2>
                            <p>Create new album with cover image and description so you can easily find and access your pictures later.</p>
                            <h6><a href="#2" class="text-black-50 font-weight-bold">See what is next</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center" id="2">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="ratio img-responsive" src="{{ asset('storage/home_page/1.JPG') }}" alt="" height="400px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Access your albums in a user-friendly way.</h2>
                            <p>You can display created albums with cover image, description and see when it was created. From here you can access your album and see pictures displayed there.</p>
                            <h6><a href="#3" class="text-black-50 font-weight-bold">See what is next</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center" id="3">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <img class="ratio img-responsive" src="{{ asset('storage/home_page/4.JPG') }}" alt="" height="400px">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Go to your album</h2>
                            <p>When you access a specific album, you can see pictures uploaded to your album.</p>
                            <h6><a href="#4" class="text-black-50 font-weight-bold">See what is next</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row align-items-center" id="2">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="ratio img-responsive" src="{{ asset('storage/home_page/3.JPG') }}" alt="" height="370px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Display uploaded pictures</h2>
                            <p>Here you can see uploaded pictures with some additional data. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection
