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
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title text-danger"><b>Maintanance Note</b></h5>

                <p class="card-text">
                  Welcome To Our Admin Panel For All Update is Avialable. You Want To Update Click Seetings for active.
                </p>
                <div>
                  <a href="{{route('personalView')}}" class="btn btn-sm btn-primary">Personal Information</a>
                </div>
              </div>
            </div><!-- /.card -->
          </div>


          <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">
                <form action="{{url('/admin/general/update/footer/'.$generalSetting->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="color:#083749">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1 " >Footer Title</label>
                                <input type="text" name="footer_title" class="form-control" id="post_title" value="{{$generalSetting->footer_title}}">
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>



          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
              <form action="{{url('/admin/general/update/'.$generalSetting->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="color:#083749">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1 " >Company/Personal Name</label>
                                <input type="text" name="company_personal_name" class="form-control" id="post_title" value="{{$generalSetting->company_personal_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1 " >Company/Personal Title</label>
                                <input type="text" name="company_personal_title" class="form-control" id="post_title" value="{{$generalSetting->company_personal_title}}">
                            </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group text-right">
                            <a href="" class="btn btn-sm btn-primary py-2" style="margin-top:30px;border-radius: 10px;">Set company name</a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group mt-3">
                                <label for="exampleFormControlFile1">Fav Icon</label><br>
                                <img src="{{asset('gallery/'.$generalSetting->favIcom)}}" alt="Avatar" style="width:50px;border-radius: 50%;">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="favIcom">
                          </div> 
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlFile1">Company Logo</label><br>
                                <img src="{{asset('gallery/'.$generalSetting->company_logo)}}" alt="Avatar" style="max-width:100px; max-height:60px; border-radius: 5%;">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="company_logo">
                            </div> 
                            <div class="form-group mt-2">
                                <label for="exampleInputPassword1">Company Tagline</label>
                                <textarea type="text" rows="3" name="tagline" class="form-control" >{{$generalSetting->tagline}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                  </form>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
