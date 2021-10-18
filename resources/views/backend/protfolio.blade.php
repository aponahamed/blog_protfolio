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
                  <div class="col-md-10">
                    <h5 class="m-0">Protfolio Element</h5>
                  </div>
                  <div class="col-md-2">
                    @if($protfolioView->protfolio_banner_status == '0')
                      <a href="{{'/admin/protfolio/showHide/'.'protfolio_banner_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                    @elseif($protfolioView->protfolio_banner_status == '1')
                      <a href="{{'/admin/protfolio/showHide/'.'protfolio_banner_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                    @endif
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form action="{{url('/admin/protfolio/banner/update/'.$protfolioView->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Page Banner Title</label>
                        <input type="text" name="protfolio_banner_title" value="{{$protfolioView->protfolio_banner_title}}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea type="email" rows="5" name="protfolio_banner_description" class="form-control" placeholder="Description">{{$protfolioView->protfolio_banner_description}}</textarea>
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
