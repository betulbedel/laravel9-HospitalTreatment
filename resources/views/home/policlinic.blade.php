@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')


    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">{{$data->category->title}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
                        </ol>
                        @include('home.messages')
                    </nav>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            <img src="{{Storage::url($data->image)}}" alt="">
                        </div>
                        @foreach($images as $rs)
                            <div class="post-thumb">
                                <img src="{{Storage::url($data->image)}}" alt="">
                            </div>
                        @endforeach

                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey"></span> <a href="#">{{$data->specialist}}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">{{$data->date}}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">

                                <a href="#">{{$data->comments->count('id')}} Rewiev</a>
                            </div>

                        </div>
                        <h2 class="post-title h1">{{$data->title}}</h2>
                        <div class="post-content">
                            <p>{{$data->description}}</p>

                            <p>{!! $data->detail!!}</p>
                        </div>

                    </article>
                    @foreach($comments as $rs)

                    <div class="container mt-5">
                        <div class="row  d-flex justify-content-center">
                            <div class="col-md-12">
                                <div class="card p-3 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="user d-flex flex-row align-items-center">
                                            <br><img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/800px-User_icon_2.svg.png" width="30" class="user-img rounded-circle mr-2">
                                            <span><small class="font-weight-bold text-primary"><b><font size="4px">{{$rs->user->name}}: </font></b></small>  <small class="font-weight-bold"><font size="4px" color="black">{{$rs->comment}}</font></small> [Değerlendirme:  <span class="icon">@for ($i=1; $i<=$rs->rate; $i++) ★@endfor]</span></span>
                                        </div>
                                        <small>{{$rs->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




                                        <!-- .blog-details -->
                    <div class="page-section" >
                        <div class="container" >
                            <h1 class="text-center wow fadeInUp">Write Your Rewiev</h1>
                            <form class="main-form" action="{{route('storecomment')}}" method="post">
                                @csrf
                                <input type="hidden"  name="policlinic_id" class="form-control" value="{{$data->id}}" >
                                <div class="row mb-3">
                                    <div class="col-sm-6 py-2 wow fadeInLeft">
                                        <label for="Subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                        <label for="rate">Rate</label>
                                        <select name="rate" id="rate"  class="custom-select">
                                            <option  value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-12 py-2 wow fadeInUp">
                                        <label for="comment">Your Comment</label>
                                        <textarea id="comment" name="comment" class="form-control" rows="8" placeholder="Enter Your Comment"></textarea>
                                    </div>
                                </div>
                                @auth()
                                <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
                                @else

                                    <a href="/login" class="btn btn-danger"> For Submit Your Comment ,Please Login</a>
                                @endauth
                            </form>
@endsection
