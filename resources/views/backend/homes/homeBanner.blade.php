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
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
            <div class="card card-primary card-outline">
              <div class="card-body" style="font-size:18px; font-style: italic; font-weight: normal;">
                <h5 class="card-title text-danger"><b></b></h5>

                    <form action="{{url('/admin/home/banner/Update/'.$homeBanner->user_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="color:#083749">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title First</label>
                                <input type="text" name="banner_title_1st" class="form-control" value="{{$homeBanner->banner_title_1st}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title Second</label>
                                <input type="text" name="banner_title_2nd" class="form-control" value="{{$homeBanner->banner_title_2nd}}">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea type="text" rows="5" name="banner_description" class="form-control">{{$homeBanner->banner_description}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-4 text-center">
                            <label for="exampleFormControlFile1">Featured Image</label>
                            <div class="form-group mt-3">
                                <img src="{{asset('gallery/'.$homeBanner->homeBannerImage)}}" alt="Avatar" style="width:160px;height:120px;border-radius: 3%;">
                            </div>
                            <div class="form-group text-center">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="homeBannerImage">
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
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection