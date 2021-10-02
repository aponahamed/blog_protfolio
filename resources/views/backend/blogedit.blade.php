@extends('backend.layouts.master')

  @section('content')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6"> 
            <h1>Update Your blog Post</h1>
            @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{url('update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="user_id" class="form-control" value="{{$data->user_id}}">
                  <input type="hidden" name="post_slug" class="form-control" value="{{$data->post_slug}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="post_title" class="form-control" value="{{$data->post_title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Post Description</label>
                    <textarea type="text" name="post_description" rows="5" name class="form-control">{{$data->post_description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Title</label>
                    <input type="text" name="meta_title" rows="5" name class="form-control" value="{{$data->meta_title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Description</label>
                    <input type="text" name="meta_description" rows="5" name class="form-control" value="{{$data->meta_description}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Featured Image</label>
                    <img src="{{asset('upload/post/featuredImage/'.$data->featuredImage)}}" alt="featuredImage" class="rounded-circle image-fluid" style="max-height:100px;">
                    <input type="file" class="form-control-file" name="featuredImage">
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
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
