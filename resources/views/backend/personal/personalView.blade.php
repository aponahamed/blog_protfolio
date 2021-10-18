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
            <div class="card card-primary card-outline">
              <div class="card-body" style="font-size:18px; font-style: italic; font-weight: normal;">
                <h5 class="card-title text-danger"><b></b></h5>

                  <form action="{{url('/admin/seetingsPersonal/'.$personalView->user_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="color:#083749">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="post_title" value="{{$personalView->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Middle Name</label>
                                <input id="middle_name" type="text" name="middle_name"  class="form-control" value="{{$personalView->middle_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="{{$personalView->last_name}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Phone Number</label>
                              <input type="text" name="phone" class="form-control" value="{{$personalView->phone}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Personal Email</label>
                              <input type="email" name="email" class="form-control" value="{{$personalView->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Designation</label>
                                <input type="text" name="Designition" class="form-control" value="{{$personalView->Designition}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">National Id No</label>
                                <input type="text" name="national_id_no" class="form-control" value="{{$personalView->national_id_no}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pasport No</label>
                                <input type="text" name="pasport_no" class="form-control" value="{{$personalView->pasport_no}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Driveng Licence</label>
                              <input type="text" name="driving_licence" class="form-control" value="{{$personalView->driving_licence}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fathers Name</label>
                                <input type="text" name="fathers_name" class="form-control" value="{{$personalView->fathers_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mothers Name</label>
                                <input type="text" name="mothers_name" class="form-control" value="{{$personalView->mothers_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Date Of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{$personalView->date_of_birth}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nationality</label>
                                <input type="text" name="nationality" class="form-control" value="{{$personalView->nationality}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Religion</label>
                                <input type="text" name="religion" class="form-control" value="{{$personalView->religion}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Maritial Status</label>
                                <select class="form-select form-control" name="maritial_status" aria-label="Default select example">
                                    <option value="{{$personalView->maritial_status}}">{{$personalView->maritial_status}}</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Present Address</label>
                                <textarea type="text" name="present_address" rows="2" class="form-control">{{$personalView->present_address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Permanent Address</label>
                                <textarea type="text" name="permanent_address" rows="2" class="form-control">{{$personalView->permanent_address}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlFile1">Personal Image</label>
                                <img src="{{asset('gallery/'.$personalView->personal_image)}}" alt="Avatar" style="width:160px;border-radius: 50%;">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="personal_image">
                            </div> 
                            <div class="form-group mt-2">
                                <label for="exampleInputPassword1">Tagline</label>
                                <textarea type="text" rows="3" name="tagline" class="form-control">{{$personalView->tagline}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
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
