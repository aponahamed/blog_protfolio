@extends('backend.layouts.master')

  @section('content')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6"> 
            <h1>Insert Your Post</h1>
            @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="post_title" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Post Description</label>
                    <textarea type="text" name="post_description" rows="5" name class="form-control" id="exampleInputPassword1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Title</label>
                    <input type="text" name="meta_title" rows="5" name class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta Description</label>
                    <input type="text" name="meta_description" rows="5" name class="form-control" id="exampleInputPassword1">
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
                        <td>{{Str::limit($value['post_description'],50)}}</td>
                        <td>{{$value['meta_title']}}</td>
                        <td>{{Str::limit($value['meta_description'],50)}}</td>
                        <td>
                          <img src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" alt="featuredImage" class="rounded-circle image-fluid" style="max-height:100px;">
                        </td>
                        <td>
                          <a class="btn btn-success btn-sm" href="{{'viewpost/'.$value['id']}}">View Post</a>
                          <a class="btn btn-secondary btn-sm my-1" href="{{'edit/'.$value['id']}}">Update</a>
                          <a class="btn btn-danger btn-sm" href="{{'delete/'.$value['id']}}">Delete</a>
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
