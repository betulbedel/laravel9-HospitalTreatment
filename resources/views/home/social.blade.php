@extends('layouts.frontbase')

@section('title','Social | '.$setting->title)
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
                            <li class="breadcrumb-item active" aria-current="page">Social Media Links</li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">Social Media Links</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp">
                        <ul class="btn btn-primary wow zoomIn">
                            <a target="_blank" style="color: black" href="{{$setting->facebook}}"><span class="mai-logo-google"></span></a>
                        </ul>
                        <ul class="btn btn-primary wow zoomIn">
                            <a target="_blank" style="color: black" href="{{$setting->youtube}}"><span class="mai-logo-youtube"></span></a>
                        </ul>
                        <ul class="btn btn-primary wow zoomIn">
                            <a target="_blank" style="color: black" href="{{$setting->instagram}}"><span class="mai-logo-github"></span></a>
                        </ul>
                    </div>
                </div>
            </div>

    @endsection



