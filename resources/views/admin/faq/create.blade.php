@extends('layouts.adminbase')

@section('title','Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Add FAQ </h1>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="...">
                    <div class="row">
                        <div class="col-lg-20">
                            <h3 class="page-header">FAQ Elements</h3>
                        </div>
                    </div>
                    <div class="row" style="width: 800px">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row" style="width:800px">
                                        <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Question</label>
                                                <input  type="text" class="form-control" name="question" placeholder="Question">
                                            </div>
                                            <div class="form-group">
                                                <label> Answer</label>
                                                <textarea class="form-control"   id="answer" name="answer"  placeholder="Answer">

                                                        </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#answer' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );
                                                </script>


                                            </div>


                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-info">Save</button>
                                        </







                                    <!-- END RIGHT STRIP  SECTION -->







                                    </div>
    <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->




@endsection
