@extends('layouts.frontbase')

@section('title','References | '.$setting->title)
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
                            <li class="breadcrumb-item active" aria-current="page">References</li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">References</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp">
                        <div class="text-lg">
                           {!! $setting->references!!}
                        </div>
                    </div>
                </div>
            </div>

    @endsection



