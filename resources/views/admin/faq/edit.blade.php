@extends('layouts.adminbase')

@section('title','Edit FAQ: ' .$data->title)
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row" >
                <div class="col-lg-12">
                    <h2> Edit Faq:{{$data->title}} </h2>
                </div>
            </div>

            <!--PAGE CONTENT -->
            <div id="content">

                <div class="inner" style="width:750px">
                    <div class="row" style="width: 750px">
                        <div class="col-lg-20">
                            <h3 class="page-header">FAQ Elements </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-20">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row" style="width:1000px">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                                                @csrf


                                                    <div class="form-group">
                                                    <label>Question</label>
                                                    <input  type="text" class="form-control" name="question" value="{{$data->question}}" >
                                                </div>
                                                    <div class="form-group">
                                                        <label>Answer</label>
                                                        <textarea   class="textarea"  id="answer" name="answer" >
                                                            {{$data->answer}}
                                                        </textarea>
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


