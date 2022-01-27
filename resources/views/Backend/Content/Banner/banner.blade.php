@extends('layouts.main')
    @section('content')
        <div class="pb-3 pt-1">
            <button type="button" class="btn btn-primary text-zinc-900 bg-gradient-blue"  data-toggle="modal" data-target="#exampleModal">
                Add Banner Content
            </button>
        </div>



        <div class="card text-zinc-900 ">
            <div class="card-header border-0">
                <h3 class="card-title">Banner Information</h3>

            </div>
            <div class="card-body table-responsive p-0">
                @if(Session::has('banner_updated'))
                    <div class="alert alert-success"role="alert">
                        {{Session::get('banner_updated')}}
                    </div>
                @endif

                @if(Session::has('banner_deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('banner_deleted')}}
                    </div>
                @endif

                    @if(Session::has('banner_created'))
                        <div class="alert alert-success"role="alert">
                            {{Session::get('banner_created')}}
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
                        <th>Banner Title</th>
                        <th>Banner Description</th>
                        <th>Fixed Banner Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($banner as $ban)
                        <tr>
                            <td>{{$ban->id}}</td>
                            <td>{{$ban->title}}</td>
                            <td>{{$ban->body}}</td>
                            <td><img src="{{asset('uploads/'.$ban->image)}}"
                                     alt="No image" width="80" height="80"></td>
                            <td>
                                <a href="{{url('/banners/'.$ban->id)}}" class="btn btn-info">Details</a>
                                <a href="{{url('/edit-banner/'.$ban->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/delete-banner/'.$ban->id)}}" class="btn btn-danger"> Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Content for Banner Section</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Add Banner Content</h2>


                        <div class="text-zinc-900">
                            <section class="float-center container-fluid">


                                <div class="card card-primary float-left">
                                    <div class="card-header">
                                        <h3 class="card-title">Banner</h3>


                                    </div>
                                    <div class="card-body">


                                        <form method="post" action="{{route('banner.create')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="title">
                                                    Banner Title
                                                </label>
                                                <input type="text" name="title" class="form-control" placeholder="Enter Post Title"/>
                                                <span class="alert-danger">
                                        @error('title'){{$message}}@enderror
                                    </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="body">Banner Description</label>
                                                <textarea name="body" class="form-control" rows="3">

                               </textarea>
                                                <span class="alert-danger">
                                        @error('body'){{$message}}@enderror
                                    </span>
                                            </div>


                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Select image file for banner</label>
                                                <input class="form-control" type="file" id="formFile" name="image">
                                            </div>
                                            <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Create Banner</span></button>
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
@push("scripts")
 <script>
swal("Hello world!");
</script>
@endpush