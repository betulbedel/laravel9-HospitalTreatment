@extends('layouts.frontbase')

@section('title','User Comments & Rewievs ')


@section('content')
    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Comments</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Comments</h1>
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
                                <b class="col-lg-2" style="color: green">User Comments & Rewievs</b>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Policlinic</th>
                                        <th>Subject</th>
                                        <th>Comment</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Delete</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( $comments as $rs)
                                        <tr>
                                            <td>{{$rs->id }}</td>
                                            <td> <a href="{{route('policlinic', ['id'=>$rs->policlinic_id])}}">{{$rs->policlinic->title }} <a/> </td>
                                            <td>{{$rs->subject }}</td>
                                            <td>{{$rs->comment }}</td>
                                            <td>{{$rs->rate }}</td>
                                            <td>{{$rs->status }}</td>


                                            <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>



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
