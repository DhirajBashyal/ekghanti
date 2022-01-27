@extends('layouts.main')

@section('content')
    <h2 class="text-center text-slate-600 font-extrabold text-5xl pb-7">Update Enhances Content</h2>


    <div class="content-wrapper w-100 h-100 pr-20 text-zinc-900">
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Enhances</h3>


                        </div>
                        <div class="card-body">

                            <form method="post" action="{{route('enhances.update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$enhances->id}}"/>
                                <div class="form-group">
                                    <label for="title">
                                        Enhances Topic
                                    </label>
                                    <input type="text" name="description" class="form-control" placeholder="Enter Enhances Topic" value="{{$enhances->description}}"/>
                                    <span class="alert-danger">
                                        @error('description'){{$message}}@enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="title">
                                        Enhances Title
                                    </label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{$enhances->title}}"/>

                                </div>
                                <div class="form-group">
                                    <label for="body">Enhances Description</label>
                                    <textarea name="body"  class="form-control" rows="3">{{$enhances->body}}

                               </textarea>
                                </div>
                                <div>
                                    @if($enhances->image != null)
                                        <img src="{{asset('uploads/'.$enhances->image)}}"
                                             alt="No image" width="80" height="80">
                                        <input type="hidden" name="image" value="{{$enhances->image}}"/>

                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Select image file</label>
                                    <input class="form-control" type="file" id="formFile"  name="image" value="{{$enhances->image}}">
                                </div>

                                <button type="submit" class="btn btn-success float-left bg-gradient-cyan" style="vertical-align:middle"> <span>Update Enhances</span></button>
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
