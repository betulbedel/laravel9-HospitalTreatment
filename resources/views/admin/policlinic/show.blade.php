@extends('layouts.adminbase')

@section('title','Show Policlinic: ' .$data->title)

@section('content')


    <!--PAGE CONTENT -->


        <div id="content">
                <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-6">
                    <a href ="{{route('admin.policlinic.edit',['id'=>$data->id ])}}" class="btn btn-info btn-lg btn-round" style="width: 200px">Edit</a>
                    <hr />

                </div>
                <div class="col-lg-6">
                    <a href ="{{route('admin.policlinic.destroy',['id'=>$data->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-lg btn-round" style="width: 200px">Delete</a>
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
                                    <th>Category</th>
                                    <td>{{$data->category_id}}</td>
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
                                    <th>Date</th>
                                    <td>{{$data->date}}</td>
                                </tr>
                                <tr>
                                    <th>Specialist</th>
                                    <td>{{$data->specialist}}</td>
                                </tr>
                                <tr>
                                    <th>Detail</th>
                                    <td>{{$data->detail}}</td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td>   @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif </td>
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
