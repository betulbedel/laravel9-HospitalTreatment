@extends('layouts.adminbase')

@section('title','Settings')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')

    <div id="content">

        <section class="content">
        <div class="panel-body">
            <h3 class="card-title" > Settings</h3>
            <section class="row" style="min-height: 700px">
                <div class="col-lg-6">
                    <div class="panel panel-default" style="width: 1000px">
                        <div class="panel-heading" style="width: 1000px">

                            Basic Tabs
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#general" data-toggle="tab">General</a>
                            </li>
                            <li><a href="#smtpserver" data-toggle="tab">Smtp Email</a>
                            </li>
                            <li><a href="#socialmedia" data-toggle="tab">Social Media</a>
                            </li>
                            <li><a href="#aboutus" data-toggle="tab">About Us</a>
                            </li>
                            <li><a href="#contact" data-toggle="tab">Contact Page</a>
                            </li>
                            <li><a href="#references" data-toggle="tab">References</a>
                            </li>


                        </ul>



                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="general">
                                @csrf
                                <div class="form-group">
                                    <input  type="hidden" class="form-control" name="id"  value="{{$data->id}}" placeholder="id">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input  type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input  type="text" class="form-control" name="keywords"  value="{{$data->keywords}}" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input  type="text" class="form-control" name="description"  value="{{$data->description}}" placeholder="Description">
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <input  type="text" class="form-control" name="company" value="{{$data->company}}" placeholder="Company">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input  type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input  type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input  type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Icon</label>
                                    <input type="file" id="exampleInputFile" name="icon" value="{{$data->icon}}">

                                </div>

                            </div>

                                <div class="tab-pane fade" id="smtpserver">
                                    <div class="form-group">
                                        <label>Smtp Server</label>
                                        <input  type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Email</label>
                                        <input  type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Password</label>
                                        <input  type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Smtpport</label>
                                        <input  type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}" >
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="socialmedia">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input  type="text" class="form-control" name="fax" value="{{$data->fax}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input  type="text" class="form-control" name="facebook" value="{{$data->facebook}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input  type="text" class="form-control" name="instagram" value="{{$data->instagram}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input  type="text" class="form-control" name="twitter" value="{{$data->twitter}}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input  type="text" class="form-control" name="youtube" value="{{$data->youtube}}" >
                                    </div>

                                </div>
                            <div class="tab-pane fade" id="aboutus">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <input  type="text" class="textarea" name="aboutus" value="{{$data->aboutus}}" >
                                </div>

                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input  type="text" class="textarea" name="contact" value="{{$data->contact}}" >
                                </div>

                            </div>

                            <div class="tab-pane fade" id="references">
                                <div class="form-group">
                                    <label> References</label>
                                    <input  type="text" class="textarea" name="references" value="{{$data->references}}" >
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>


                        </div>
                    </div>
                </div>
            </section>









@endsection
            @section('foot')
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                <script>
                    $(function () {

                        //summernote
                        $('.textarea').summernote()

                    })
                </script>

@endsection


