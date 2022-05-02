@extends('layouts.adminbase')

@section('title','Policlinic List')

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <a href ="{{route('admin.policlinic.create')}}" class="btn btn-info btn-lg btn-round" style="width: 200px">Add Policlinic</a>
                </div>
            </div>
            <hr />
            <section class="content"
                <div class="panel-body">
                    <h3 class="card-title" > Policlinic List</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th>Specialist</th>
                                <th>İmage</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $data as $rs)
                            <tr>
                                <td>{{$rs->id }}</td>
                                <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </td>
                                <td>{{$rs->title }}</td>
                                <td>{{$rs->detail }}</td>
                                <td>{{$rs->date }}</td>
                                <td>{{$rs->specialist }}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>{{$rs->status }}</td>
                                <td><a href="{{route('admin.policlinic.edit',['id'=>$rs->id ])}}" class="btn btn-info btn-sm">Edit</a> </td>
                                <td><a href="{{route('admin.policlinic.destroy',['id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a href="{{route('admin.policlinic.show',['id'=>$rs->id ])}}" class="btn btn-success btn-sm">Show</a></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>


            </div>

                <!--END BLOCK SECTION -->
            <hr />








    </div>
    </section>
    <!-- END RIGHT STRIP  SECTION -->
    </div>


    <!--END MAIN WRAPPER -->




@endsection
