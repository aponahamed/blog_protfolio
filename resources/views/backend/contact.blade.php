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
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Contact Element</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($contactBanner->contacts_banner_status == '0')
                        <a href="{{'/admin/contact/hideShow/'.'contacts_banner_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($contactBanner->contacts_banner_status == '1')
                        <a href="{{'/admin/contact/hideShow/'.'contacts_banner_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Contact Element Shocase Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('contactBanner')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
              
            </div>
          </div>

          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Insert New</h5>
              </div>
              <div class="card-body">
            
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
