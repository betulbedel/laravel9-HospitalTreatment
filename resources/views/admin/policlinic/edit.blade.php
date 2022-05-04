@extends('layouts.adminbase')

@section('title','Edit Policlinic: ' .$data->title)
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row" >
                <div class="col-lg-12">
                    <h2> Edit Policlinic:{{$data->title}} </h2>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="width:750px">
                    <div class="row" style="width: 750px">
                        <div class="col-lg-20">
                            <h3 class="page-header">Policlinic Elements </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row" style="width:1000px">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{route('admin.policlinic.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @csrf
                                                <div class = "card-body">
                                                    <div class = "form-group">
                                                    <label  >Parent Category </label>

                                                    <select class="form-control select2" name="parent_id" style="...">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected ="selected" @endif
                                                            > {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>


                                                    <div class="form-group">
                                                    <label>Title</label>
                                                    <input  type="text" class="form-control" name="title" value="{{$data->title}}" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input  type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input  type="text" class="form-control" name="description" value="{{$data->description}}">
                                                </div>
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input  type="date" class="form-control" name="date"  placeholder="Date" value="{{$data->date}}" >
                                                    </div>
                                                    <div class="form-group" >
                                                        <label>Specialist</label>
                                                        <input  type="text" class="form-control" name="specialist" placeholder="Specialist" value="{{$data->specialist}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Detail Inf</label>
                                                        <textarea   class="textarea"  id="detail" name="detail" >
                                                            {{$data->detail}}
                                                        </textarea>
                                                    </div>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">Image</label>
                                                    <input type="file" id="exampleInputFile" name="image">

                                                </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        </div>
                                                <button type="submit" class="btn btn-info">Update Data</button>


                                    </div>










    </div>
    <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

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


