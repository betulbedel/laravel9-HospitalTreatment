@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '.$setting->title)
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
                    <h1 class="font-weight-normal">Frequently Asked Questions</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp">
                        <div class="text-lg">
                            <h1>Frequently Asked Questions</h1>
                            <div id="accordion">
                          @foreach($datalist as $rs)
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                              <h3>{{$rs->question}}</h3>
                                            </a>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                            <div class="card-body">
                              <p>{!! $rs->answer !!}</p>
                                            </div>
                                        </div>


                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

    @endsection



