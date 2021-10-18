@extends('backend.layouts.master')
@section('title', $title)
  @section('content')

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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Show Your Category List</h5>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL NO</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Message</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($subscriber as $key=>$value)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$value['name']}}</td>
                      <td>{{$value['email']}}</td>
                      <td>{{$value['date']}}</td>
                      <td>{{$value['time']}}</td>
                      <td>{{$value['message']}}</td>
                      <td>
                        <!-- <a href="{{'/admin/category/updateView/'.$value['id']}}" class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a> -->
                        <a href="{{'/admin/subscriber/delete/'.$value['id']}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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


