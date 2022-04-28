@extends('layouts.adminbase')

@section('title','Category List')

@section('content')


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <a href ="{{route('admin.category.create')}}" class="btn btn-info btn-lg btn-round" style="width: 200px">Add Category</a>
                </div>
            </div>
            <hr />
            <section class="content"
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
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
                                <td>{{$rs->title }}</td>
                                <td>{{$rs->keywords }}</td>
                                <td>{{$rs->description }}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>{{$rs->status }}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id ])}}" class="btn btn-info btn-sm">Edit</a> </td>
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id ])}}" class="btn btn-success btn-sm">Show</a></td>
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
