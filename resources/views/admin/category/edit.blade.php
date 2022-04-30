@extends('layouts.adminbase')

@section('title','Edit Category: ' .$data->title)

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <h2> Edit Category:{{$data->title}} </h2>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="...">
                    <div class="row">
                        <div class="col-lg-20">
                            <h3 class="page-header">Category Elements </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @csrf
                                                <div class = "card-body">
                                                    <div class = "form-group">
                                                    <label  >Parent Category </label>

                                                    <select class="form-control select2" name="parent_id" style="...">
                                                        <option value="0" selected="selected">Main Category</option>
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected ="selected" @endif
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
