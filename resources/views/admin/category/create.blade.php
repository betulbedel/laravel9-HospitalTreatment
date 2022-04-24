@extends('layouts.adminbase')

@section('title','Add Category')

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Add Category </h1>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="...">
                    <div class="row">
                        <div class="col-lg-20">
                            <h3 class="page-header">Category Elements</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="/home/admin/category/store" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input  type="text" class="form-control" name="title" placeholder="Title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input  type="text" class="form-control" name="keywords" placeholder="Keywords">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input  type="text" class="form-control" name="description" placeholder="Description">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">Image</label>
                                                    <input type="file" id="exampleInputFile" name="image">

                                                </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Save</button>

                                    </div>










    </div>
    <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->




@endsection
