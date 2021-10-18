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
          <div class="col-lg-6"> 
            <h1></h1>
            @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Insert Your Post</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="post_title" class="form-control" id="post_title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Post Description</label>
                    <textarea id="summernote" type="text" name="post_description" rows="5" class="form-control" id="exampleInputPassword1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Description</label>
                    <textarea type="text" name="meta_description" rows="3" class="form-control" id="exampleInputPassword1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Category</label>
                    <select class="form-select form-control" name="category_title" aria-label="Default select example">
                      <option selected>Please select One</option>
                      @foreach($data as $value)
                      <option value="{{$value['category_title']}}">{{$value['category_title']}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Make Tag For Your Post</label>
                    <input type="text" name="post_tag" class="form-control" id="search_data" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Featured Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featuredImage">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Post Header</h5>
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
                        <textarea id="summernote" type="email" rows="3" name="email" class="form-control" placeholder="Description"></textarea>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
