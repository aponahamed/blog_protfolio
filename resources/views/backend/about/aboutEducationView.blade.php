@extends('backend.layouts.master')
@section('title', $title)
  @section('content')

  <style>
      .form-control {
          border: 1px solid #DDDDDD;
          border-radius:10px;
          box-shadow: 0 2px 3px rgb(50 50 93 / 20%), 0 1px 0 rgb(0 0 0 / 3%);
      }
  </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin_blog')}}">Create Post</a></li>
              <li class="breadcrumb-item active">{{$title}}</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    @if(session('status'))
                        <p class="text-dark alert alert-light">{{session('status')}}</p>
                    @endif 
                    <div class="card card-primary card-outline">
                        <div class="card-header" style="font-size:18px; font-style: italic; font-weight: normal;">
                            <form action="{{url('/admin/about/education/Update/'.$education->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">School/College/University Name</label>
                                    <input type="text" name="university_name" class="form-control" value="{{$education->university_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Degree Title</label>
                                    <input type="text" name="degree_title" class="form-control" value="{{$education->degree_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Duration</label>
                                    <textarea type="text" name="duration" rows="3" class="form-control" >{{$education->duration}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Featured Logo</label>
                                            <img class="rounded-circle" src="{{asset('gallery/'.$education->aboutEducationImage)}}" alt="University Logo" style="height:80px;width:80px;">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="aboutEducationImage">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary px-5">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection