@extends('layouts.frontbase')

@section('title','Contact | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

    @section('content')
        <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
            <div class="banner-section">
                <div class="container text-center wow fadeInUp">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">Contact</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div>


                        <div class="page-section">
                            <div class="container">
                                <h1 class="text-center wow fadeInUp">Get in Touch</h1>

                                <form class="contact-form mt-5">
                                    <div class="row mb-3">
                                        <div class="col-sm-6 py-2 wow fadeInLeft">
                                            <label for="fullName">Name</label>
                                            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
                                        </div>
                                        <div class="col-sm-6 py-2 wow fadeInRight">
                                            <label for="emailAddress">Email</label>
                                            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
                                        </div>
                                        <div class="col-12 py-2 wow fadeInUp">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
                                        </div>
                                        <div class="col-12 py-2 wow fadeInUp">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
                                </form>

                                <div class="page-section">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 wow fadeInUp">
                                                <div class="text-lg">
                                                    {!! $setting->contact !!}
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



