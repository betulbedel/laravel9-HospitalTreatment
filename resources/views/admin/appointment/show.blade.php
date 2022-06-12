@extends('layouts.adminwindow')

@section('title','Show Appointments: ' .$data->title,)

@section('content')


    <!--PAGE CONTENT -->



            <!--PAGE CONTENT -->
            <div class="col-lg-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Detail Appointments Data</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-striped table-bordered table-hover" >
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>User </th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname </th>
                                    <td>{{$data->name}} </td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{$data->date}}</td>
                                </tr>
                                <tr>
                                    <th>Time</th>
                                    <td>{{$data->time}}</td>
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
                                    <th>Note:</th>
                                    <td>
                                        <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id ])}}" method="post" >
                                            @csrf
                                            <textarea    cols="100"  id="note" name="note" >
                                                            {{$data->note}}
                                       </textarea>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Cancelled</option>
                                                <option>Completed</option>
                                            </select>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info"> Update Comment</button>
                                            </div>

                                        </form>
                                    </td>
                                </tr>




                            </table>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Specialist</th>
                                    <th>İmage</th>
                                    <th>Status</th>
                                    <th>Cancel</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach( $datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id }}</td>
                                        <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </td>
                                        <td>{{$rs->policlinic->title }}</td>
                                        <td>{{$rs->date }}</td>
                                        <td>{{$rs->specialist }}</td>
                                        <td>
                                            @if($rs->policlinic->image)
                                                <img src="{{Storage::url($rs->policlinic->image)}}" style="height: 40px">
                                            @endif
                                        </td>

                                        <td>{{$rs->status }}</td>
                                        <td><a href="{{route('admin.appointment.cancelappointment',['id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Cancel</a></td>
                                    </tr>

                                @endforeach
                                </tbody>
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
