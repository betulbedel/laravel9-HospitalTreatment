@extends('layouts.adminwindow')

@section('title','Policlinic Image Gallery')

@section('content')

    <!--PAGE CONTENT -->
    <h3> {{ $policlinic->title }}</h3>
    <form role="form" action="{{route('admin.image.store',['pid'=> $policlinic->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input  type="text" class="form-control" name="title" placeholder="Title">
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" id="exampleInputFile" name="image">
        </div>
            <button type="submit" class="btn btn-info">Save</button>

    </form>



    <div class="panel-body" style="height: 100px">
        <h3 class="card-title "  > Policlinic Image Gallery </h3>
        <div class="table-responsive">
            <table class="table">

                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>İmage</th>
                    <th>Delete</th>


                </tr>
                </thead>
                <tbody>

                            @foreach( $images as $rs)
                            <tr>
                                <td>{{$rs->id }}</td>
                                <td>{{$rs->title }}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy',['pid'=>$policlinic->id, 'id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>

                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>


            </div>

                <!--END BLOCK SECTION -->










    <!-- END RIGHT STRIP  SECTION -->
    </div>


    <!--END MAIN WRAPPER -->
@endsection




