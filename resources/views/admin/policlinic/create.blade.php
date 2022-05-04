@extends('layouts.adminbase')

@section('title','Add Policlinic')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Add Policlinic </h1>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="...">
                    <div class="row">
                        <div class="col-lg-20">
                            <h3 class="page-header">Policlinic Elements</h3>
                        </div>
                    </div>
                    <div class="row" style="width: 750px">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row" style="width:1000px">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{route('admin.policlinic.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class = "form-group">
                                                    <label  >Parent Policlinic </label>
                                                    <select class="form-control select2" name="category_id" style="">
                                                        @foreach($data as $rs)
                                                            <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                        @endforeach
                                                    </select>

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
                                                        <label>Date</label>
                                                        <input  type="date" class="form-control" name="date"  placeholder="Date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Specialist</label>
                                                        <input  type="text" class="form-control" name="specialist" placeholder="Specialist">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Detail Inf</label>
                                                        <textarea class="form-control"   id="detail" name="detail">

                                                        </textarea>
                                                        <script>
                                                        ClassicEditor
                                                        .create( document.querySelector( '#detail' ) )
                                                        .then( editor => {
                                                        console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                        console.error( error );
                                                        } );
                                                        </script>


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
