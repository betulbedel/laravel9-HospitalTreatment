@extends('layouts.frontbase')

@section('title','User Panel ')


@section('content')
    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Panel</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Panel</h1>
            </div> <!-- .container -->


        </div> <!-- .banner-section -->
    </div>


    <div class="page-section">
        <div class="container">
            <b class="col-lg-2" style="color: green">User Menu</b>
            @include('home.user.usermenu')
            <br>
            <br>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wow fadeInUp">
                            <div class="text-lg">
                                <b class="col-lg-2" style="color: green">User Profile</b>
                                @include('profile.show')

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

@endsection
