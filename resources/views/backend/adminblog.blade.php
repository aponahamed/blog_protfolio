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
              <li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{route('blogcreate')}}">Create Blog Post</a></li>
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

          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                Post List View
                @if(session('delete'))
                  <p class="text-dark alert alert-light">{{session('delete')}}</p>
                @endif
                <table class="table table-bordered">
                  <thead class="thead-Secondary">
                    <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">User_id</th>
                      <!-- <th scope="col">Slug</th> -->
                      <th scope="col">Title</th>
                      <th scope="col">Descriptionn</th>
                      <th scope="col">Meta Title</th>
                      <th scope="col">Meta Description</th>
                      <th scope="col">Featured Image</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key=>$value)
                      <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$value['user_id']}}</td>
                        <!-- <td>{{$value['post_slug']}}</td> -->
                        <td>{{$value['post_title']}}</td>
                        <td>{{Str::limit(strip_tags($value['post_description']),50)}}</td>
                        <td>{{$value['meta_title']}}</td>
                        <td>{{Str::limit(strip_tags($value['meta_description']),50)}}</td>
                        <td>
                          <img src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" alt="featuredImage" class="rounded-circle image-fluid" style="max-height:100px;max-width:100px;">
                        </td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{'/viewpost/'.$value['post_slug']}}">View</a>
                          <a class="btn btn-success btn-sm my-1" href="{{'/admin/blog/edit/'.$value['post_slug']}}">Update</a>
                          <a class="btn btn-danger btn-sm" href="{{'/admin/blog/delete/'.$value['post_slug']}}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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
