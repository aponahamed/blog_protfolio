@extends('backend.layouts.master')
@section('title', $title)
  @section('content')
  <style>
    .form-group{
      font-size: 14px;
      color:#838383;
    }
    .form-control{
      font-size:14px;
      padding: 5px;
      height:28px;
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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{route('admin_blog')}}">Blog Post</a></li>
              <!-- <li class="breadcrumb-item active">{{$title}}</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6"> 
            
            @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Protfolio Element</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea type="email" rows="3" name="email" class="form-control" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Post Element</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Post Title</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Post Title">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea type="email" rows="3" name="email" class="form-control" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
          <!-- /.col-md-6 -->

          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
              
              </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
