@extends('layouts.adminwindow')

@section('title','Show Comments: ' .$data->title,)

@section('content')


    <!--PAGE CONTENT -->



            <!--PAGE CONTENT -->
            <div class="col-lg-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Detail Message Data</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-striped table-bordered table-hover" >
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Policlinic </th>
                                    <td>{{$data->policlinic->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname </th>
                                    <td>{{$data->user->name}} </td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Comment</th>
                                    <td>{{$data->comment}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->IP}}</td>
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
                                <tr>
                                    <th>Comment Status:</th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id ])}}" method="post" >
                                            @csrf
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info"> Update Comment</button>
                                            </div>

                                        </form>
                                    </td>
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
