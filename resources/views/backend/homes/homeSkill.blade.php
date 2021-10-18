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

                    <form action="{{route('homeSkillInsert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="color:#083749">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skill Title</label>
                                <input type="text" name="skill_title" class="form-control" placeholder="Skill Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Percentage</label>
                                <input type="text" name="skill_percentage" rows="5" name class="form-control" placeholder="75%">
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-4 text-center">
                            <label for="exampleFormControlFile1">Icon PNG</label>
                            <div class="form-group mt-3">
                                <img src="{{asset('img_avatar.png')}}" alt="Avatar" style="width:80px;border-radius: 3%;">
                            </div>
                            <div class="form-group text-center">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="homeSkillImage">
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
          <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body" style="font-size:18px; font-style: italic; font-weight: normal;">
                  <table class="table table-striped table-borderless table-sm">
                    <thead class="bg-primary">
                      <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Skill Title</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Icon Image</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($homeSkills as $key=>$value)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$value['skill_title']}}</td>
                          <td>{{$value['skill_percentage']}}</td>
                          <td>
                            <img src="{{asset('gallery/'.$value['homeSkillImage'])}}" alt="Avatar" style="width:30px;height:30px;border-radius: 50%;">
                          </td>
                          <td>
                            <a href="{{'/admin/home/skill/View/'.$value['id']}}" class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a>
                            <a href="{{'/admin/home/skill/delete/'.$value['id']}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
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