@extends('layouts.main')

@section('content')
    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Update Banner Content</h2>


    <div class="content-wrapper w-100 h-100 pr-20 text-zinc-900">
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Banner</h3>


                        </div>
                        <div class="card-body">

                            <form method="post" action="{{route('banner.update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$banner->id}}"/>
                                <div class="form-group">
                                    <label for="title">
                                        Post Title
                                    </label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{$banner->title}}"/>

                                </div>
                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea name="body"  class="form-control" rows="3">{{$banner->body}}

                               </textarea>
                                </div>
                                <div>
                                    @if($banner->image != null)
                                    <img src="{{asset('uploads/'.$banner->image)}}"
                                         alt="No image" width="80" height="80">
                                    <input type="hidden" name="image" value="{{$banner->image}}"/>

                                        @endif
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Select image file</label>
                                    <input class="form-control" type="file" id="formFile"  name="image">
                                </div>

                                <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Update Banner</span></button>
                            </form>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->

            </div>
        </section>
    </div>




@endsection
