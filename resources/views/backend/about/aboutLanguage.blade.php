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


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    @if(session('status'))
                        <p class="text-dark alert alert-light">{{session('status')}}</p>
                    @endif 
                    <div class="card card-primary card-outline">
                        <div class="card-header" style="font-size:18px; font-style: italic; font-weight: normal;">
                            <form action="{{route('aboutLanguageInsert')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Language Title</label>
                                    <input type="text" name="language_title" class="form-control" pleceholder="Language Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Expertice</label>
                                    <select class="form-select form-control" name="language_experience" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Language Class</label>
                                    <select class="form-select form-control" name="language_class" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="Native">Native</option>
                                        <option value="Forgion">Forgion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Percentage</label>
                                    <input type="text" name="language_percentage" class="form-control" pleceholder="Percentage">
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary px-5">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <table class="table table-striped table-borderless table-sm">
                                <thead class="bg-primary">
                                <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col"> Title</th>
                                    <th scope="col">Expertice</th>
                                    <th scope="col"> Class</th>
                                    <th scope="col">Percentage</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($language as $key=>$value)
                                    <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$value['language_title']}}</td>
                                    <td>{{$value['language_experience']}}</td>
                                    <td>{{$value['language_class']}}</td>
                                    <td>{{$value['language_percentage']}}</td>
                                    <td>
                                        <a href="{{'/admin/about/language/View/'.$value['id']}}" class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a>
                                        <a href="{{'/admin/about/language/delete/'.$value['id']}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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