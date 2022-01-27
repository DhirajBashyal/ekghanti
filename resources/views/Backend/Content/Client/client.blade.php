@extends('layouts.main')
@section('content')
    <div class="pb-3 pt-1">
        <button type="button" class="btn btn-primary text-zinc-900 bg-gradient-blue"  data-toggle="modal" data-target="#exampleModal">
            Add Client Banner Content
        </button>
    </div>



    <div class="card text-zinc-900 ">
        <div class="card-header border-0">
            <h3 class="card-title">Client Banner Information</h3>

        </div>
        <div class="card-body table-responsive p-0">
            @if(Session::has('client_updated'))
                <div class="alert alert-success"role="alert">
                    {{Session::get('client_updated')}}
                </div>
            @endif

            @if(Session::has('client_deleted'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('client_deleted')}}
                </div>
            @endif

            @if(Session::has('client_created'))
                <div class="alert alert-success"role="alert">
                    {{Session::get('client_created')}}
                </div>
            @endif

            <a class="alert-danger">
                @error('title'){{$message}}@enderror
                @error('body'){{$message}}@enderror
            </a>


            <table class="table table-striped table-valign-middle ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client Banner Title</th>
                    <th>Client Banner Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($client as $cln)
                    <tr>
                        <td>{{$cln->id}}</td>
                        <td>{{$cln->title}}</td>
                        <td><img src="{{asset('uploads/'.$cln->image)}}"
                                 alt="No image" width="80" height="80"></td>
                        <td>
                            <a href="{{url('/clients/'.$cln->id)}}" class="btn btn-info">Details</a>
                            <a href="{{url('/edit-client/'.$cln->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('/delete-client/'.$cln->id)}}" class="btn btn-danger"> Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->

    <!--add about -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-zinc-900">
                    <h5 class="modal-title" id="exampleModalLabel">Add Content for Client Banner Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Add Client Content</h2>


                    <div class="text-zinc-900">
                        <section class="float-center container-fluid">


                            <div class="card card-primary float-left">
                                <div class="card-header">
                                    <h3 class="card-title">Client</h3>


                                </div>
                                <div class="card-body">


                                    <form method="post" action="{{route('client.create')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title">
                                                Client Baner Title
                                            </label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Post Title"/>
                                            <span class="alert-danger">
                                        @error('title'){{$message}}@enderror
                                    </span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Select image file for client banner</label>
                                            <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Create Client</span></button>
                                    </form>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>





@endsection
