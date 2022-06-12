@extends('layouts.frontbase')

@section('title','Appointment| ')

    @section('content')
        <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
            <div class="banner-section">
                <div class="container text-center wow fadeInUp">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">Appointment</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div>


                        <div class="page-section">
                            <div class="container">
                                <h1 class="text-center wow fadeInUp">Make An appointment</h1>
                              @include ('home.messages')

                                <form class="contact-form mt-5" action="{{route("appointment.store")}}" method="post">
                                    @csrf
                                    <div class="row mb-3" >
                                        <input type="hidden" value="{{ $price }}" name="price">
                                        <input type="hidden" id="policlinic_id" value="{{ $policlinic_id }}" name="policlinic_id">
                                        <div class="col-sm-6 py-2 wow fadeInLeft">
                                            <label for="fullName">Name</label>
                                            <input type="text" id="fullName" name="name" class="form-control"   value="{{Auth::user()->name}}" placeholder="Full name">
                                        </div>

                                        <div class="col-sm-6 py-2 wow fadeInRight">
                                            <label for="emailAddress">Email</label>
                                            <input type="text" id="emailAddress" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Email address">
                                        </div>
                                        <div class="col-12 py-2 wow fadeInUp">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone"  name="phone" class="form-control" value="{{Auth::user()->phone}}" placeholder="Phone Number">
                                        </div>
                                        <div class="col-6 py-2 wow fadeInUp">
                                            <label for="date">Date</label>
                                            <input type="date" id="date" name="date" class="form-control" placeholder="Date">
                                        </div>
                                        <div class="col-6 py-2 wow fadeInUp">
                                            <label for="time">Time</label>
                                            <input type="time" id="time" name="time" class="form-control" placeholder="Time">
                                        </div>
                                        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                            <label for="payment">Payment</label>
                                            <select name="payment" id="payment" class="custom-select">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>

                                        </div>
                                        <div class="col-12 py-2 wow fadeInUp">
                                            <label for="message">Note</label>
                                            <textarea id="message" name="message" class="form-control" rows="8" placeholder="Enter Note.."></textarea>
                                        </div>


                                    </div>
                                    <button type="submit" class="btn btn-primary wow zoomIn">Make An Appointment</button>
                                </form>

                                <div class="page-section">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 wow fadeInUp">
                                                <div class="text-lg">
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



