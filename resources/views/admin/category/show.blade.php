@extends('layouts.adminbase')

@section('title','Show Category: ' .$data->title)

@section('content')


    <!--PAGE CONTENT -->


        <div id="content">
                <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-6">
                    <a href ="/home/admin/category/edit/{{$data->id}}" class="btn btn-info btn-lg btn-round" style="width: 200px">Edit</a>
                    <hr />

                </div>
                <div class="col-lg-6">
                    <a href ="/home/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-lg btn-round" style="width: 200px">Delete</a>
                    <hr/>
            </div>

            <!--PAGE CONTENT -->
            <div class="col-lg-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Detail Data</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-striped table-bordered table-hover" >
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>









    </div>
    <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->




@endsection
