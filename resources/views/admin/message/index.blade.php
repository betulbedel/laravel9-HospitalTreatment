@extends('layouts.adminbase')

@section('title',' Contact Form Messages List')

@section('content')



    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <hr />
            <section class="content"
            <div class="panel-body">
                <h3 class="card-title" > Message  List</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach( $data as $rs)
                            <tr>
                                <td>{{$rs->id }}</td>
                                <td>{{$rs->name }}</td>
                                <td>{{$rs->phone }}</td>
                                <td>{{$rs->email }}</td>
                                <td>{{$rs->subject }}</td>
                                <td>{{$rs->status }}</td>


                                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a href="{{route('admin.message.show',['id'=>$rs->id ])}}" class="btn btn-success btn-sm"
                                       onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')"  >

                                        Show</a>
                                </td>
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
