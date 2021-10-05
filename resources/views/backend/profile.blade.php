@extends('backend.layouts.master')
@section('title', $title)
  @section('content')
  <style>
    .form-group{
      font-size: 14px;
      color:#838383;
    }
    .form-control{
      font-size:14px;
      padding: 5px;
      height:28px;
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
                <h5 class="m-0">Personal information</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="exampleFormControlFile1">Featured Image</label>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <img  class="rounded-circle" src="fontend/images/apon.jpg" alt="about image" style="height:120px;width:120px;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featuredImage">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date OF Birth</label>
                        <input type="date" name="date_of birth" class="form-control" placeholder="Date OF Birth">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Maritial Status</label>
                        <input type="text" name="maritial_status" class="form-control" placeholder="Maritial Status">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nationality</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Passport No</label>
                        <input type="text" name="passport_no" class="form-control" placeholder="Passport No">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">National Id</label>
                        <input type="text" name="national_id" class="form-control" placeholder="National Id">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Driveng Licence</label>
                        <input type="text" name="driveng_licence" class="form-control" placeholder="Driveng Licence">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Religion</label>
                        <input type="text" name="religion" class="form-control" placeholder="Religion">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Father Name</label>
                        <input type="text" name="father_name" class="form-control" placeholder="Father Name">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Monther Name</label>
                        <input type="text" name="monther_name" class="form-control" placeholder="Monther Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Present Address</label>
                    <input type="text" name="present_adress" class="form-control" placeholder="Present Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Permanant Adress</label>
                    <input type="text" name="permanant_adress" class="form-control" placeholder="Permanant Adress">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Language</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Language Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Language Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Expertice</label>
                        <select class="form-select form-control" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">Low</option>
                          <option value="2">Medium</option>
                          <option value="3">High</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Language Class</label>
                        <select class="form-select form-control" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">Native</option>
                          <option value="2">Forgion</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Percentage</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Percentage">
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Experience</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Company Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Post/Designition</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Post/Designition">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Deuration</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Deuration">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <!-- <label for="exampleInputEmail1">Deuration</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Deuration"> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Form Date</label>
                        <input type="date" name="post_title" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">To Date</label>
                        <input type="date" name="post_title" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" rows="3" name="post_title" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Featured Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featuredImage">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <img class="rounded-circle" src="fontend/images/apon.jpg" alt="University Logo" style="height:80px;width:80px;">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>      
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Expertice</h5>
              </div>
              <div class="card-body">
              <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Expertice</label>
                    <textarea type="text" rows="2" name="post_title" class="form-control" pleceholder="Expertice"></textarea>
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
                <h5 class="m-0">Links For Profile</h5>
              </div>
              <div class="card-body">
              <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Protfolio Link</label>
                        <input type="text" name="protfolio_link" class="form-control" placeholder="Protfolio Link">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Whats App Link</label>
                        <input type="text" name="whats_app_link" rows="5" name class="form-control" placeholder="Whats App Link">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Github</label>
                        <input type="text" name="Github" rows="5" name class="form-control" placeholder="Github">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Fiver</label>
                        <input type="text" name="fiver" rows="5" name class="form-control" placeholder="Fiver">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Upwork</label>
                        <input type="text" name="upwork" rows="5" name class="form-control" placeholder="Upwork">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Linkedin</label>
                        <input type="text" name="linkedin" rows="5" name class="form-control" placeholder="Linkedin">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Skype</label>
                        <input type="text" name="skype" rows="5" name class="form-control" placeholder="Skype">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Facebook</label>
                        <input type="text" name="facebook" rows="5" name class="form-control" placeholder="Facebook">
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                  </div>
                </form>
              </div>
            </div>


            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Education</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">School/College/University Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Degree Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="B.sc in CSE">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="4 Years">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Featured Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featuredImage">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <img class="rounded-circle" src="fontend/images/apon.jpg" alt="University Logo" style="height:80px;width:80px;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                  </div>
                </form>
              </div>
            </div>


            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Training</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Institute Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Institute Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Subject Name</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="subject Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Deuration</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Deuration">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <!-- <label for="exampleInputEmail1">Deuration</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Deuration"> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Form Date</label>
                        <input type="date" name="post_title" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">To Date</label>
                        <input type="date" name="post_title" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" rows="3" name="post_title" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Featured Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featuredImage">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <img class="rounded-circle" src="fontend/images/apon.jpg" alt="University Logo" style="height:80px;width:80px;">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>      
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">About Me/Work</h5>
              </div>
              <div class="card-body">
                <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Header Title</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Header Title">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="post_title" class="form-control" pleceholder=" Title">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sub Title</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="Sub Title">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">TagLine</label>
                        <input type="text" name="post_title" class="form-control" pleceholder="TagLine">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" rows="3" name="post_title" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Declearation</h5>
              </div>
              <div class="card-body">
              <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Declearation</label>
                    <textarea type="text" rows="4" name="post_title" class="form-control" pleceholder="Declearation"></textarea>
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
