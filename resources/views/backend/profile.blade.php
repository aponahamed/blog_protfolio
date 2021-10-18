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
              @if(session('status'))
              <p class="text-dark alert alert-light">{{session('status')}}</p>
            @endif
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
            
            <div class="card card-primary card-outline">
              <div class="card-header">
              <div class="row">
                  <div class="col-md-9">
                    <h5 class="m-0">Personal information</h5>
                  </div>
                  <div class="col-md-3 text-right">
                    @if($aboutBanner->about_personal_status == '0')
                      <a href="{{'/admin/about/hideShow/'.'about_personal_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                    @elseif($aboutBanner->about_personal_status == '1')
                      <a href="{{'/admin/about/hideShow/'.'about_personal_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                    @endif
                  </div>
                  <div class="col-md-12 my-3 font-italic">
                    <p><b>Note:</b> Welcome To Our Admin Panel For All Update is Avialable. You Want To Update Click Seetings for active.</p>
                  </div>
                  <div class="col-md-12 text-left">
                    <a href="{{route('personalView')}}" class="btn btn-sm btn-primary">Personal Information</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <h5 class="m-0">About Banner Section</h5>
                  </div>
                  <div class="col-md-3 text-right">
                    @if($aboutBanner->about_banner_status == '0')
                      <a href="{{'/admin/about/hideShow/'.'about_banner_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                    @elseif($aboutBanner->about_banner_status == '1')
                      <a href="{{'/admin/about/hideShow/'.'about_banner_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                    @endif
                  </div>
                  <div class="col-md-12 my-3 font-italic">
                    <p><b>Note:</b> Home Motivation Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                  </div>
                  <div class="col-md-12 text-left">
                    <a href="{{route('aboutBanner')}}" class="btn btn-sm btn-primary">Update</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <h5 class="m-0">Language</h5>
                  </div>
                  <div class="col-md-3 text-right">
                    @if($aboutBanner->about_language_status == '0')
                      <a href="{{'/admin/about/hideShow/'.'about_language_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                    @elseif($aboutBanner->about_language_status == '1')
                      <a href="{{'/admin/about/hideShow/'.'about_language_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                    @endif
                  </div>
                  <div class="col-md-12 my-3 font-italic">
                    <p><b>Note:</b> Language Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                  </div>
                  <div class="col-md-12 text-left">
                    <a href="{{route('aboutLanguage')}}" class="btn btn-sm btn-primary">Update</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Experience</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($aboutBanner->about_experience_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_experience_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_experience_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_experience_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Experience Shocase Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('aboutExperience')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"></h5>
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Training & Certification</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($aboutBanner->about_traning_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_traning_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_traning_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_traning_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Training Shocase Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('aboutCertification')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
            </div>

          </div>

          <!-- /.col-md-6 -->
          <div class="col-lg-6">


            <div class="card card-primary card-outline">
              <div class="card-header">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Education</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($aboutBanner->about_education_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_education_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_education_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_education_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Education Shocase Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('aboutEducation')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <h5 class="m-0">About Carrier Objective</h5>
                  </div>
                  <div class="col-md-3 text-right">
                      @if($aboutBanner->about_objectives_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_objectives_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_objectives_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_objectives_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                  </div>
                  <div class="col-md-12 my-3 font-italic">
                    <form action="{{url('/admin/about/banner/Update/carrier/'.$aboutBanner->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Carrier Objective</label>
                        <textarea type="text" rows="4" name="about_banner_objectives" class="form-control" pleceholder="Expertice">{{$aboutBanner->about_banner_objectives}}</textarea>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Expertise</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($aboutBanner->about_expertice_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_expertice_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_expertice_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_expertice_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Expertise Links Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('aboutExpertise')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="m-0">Protfolio Links</h5>
                    </div>
                    <div class="col-md-3 text-right">
                      @if($aboutBanner->about_links_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_links_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_links_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_links_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                    </div>
                    <div class="col-md-12 my-3 font-italic">
                      <p><b>Note:</b> My Protfolio Links Use the border-radius property to add rounded corners to an image. 50% will make the image circular.</p>
                    </div>
                    <div class="col-md-12 text-left">
                      <a href="{{route('aboutLinks')}}" class="btn btn-sm btn-primary px-4">Update</a>
                    </div>
                  </div>
              </div>
            </div>

            <!-- //cut item -->

            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <h5 class="m-0">About Declarations</h5>
                  </div>
                  <div class="col-md-3 text-right">
                      @if($aboutBanner->about_declarations_status == '0')
                        <a href="{{'/admin/about/hideShow/'.'about_declarations_status'}}" class="btn btn-sm btn-danger px-3">Show</a>
                      @elseif($aboutBanner->about_declarations_status == '1')
                        <a href="{{'/admin/about/hideShow/'.'about_declarations_status'}}" class="btn btn-sm btn-primary px-3">Hide</a>
                      @endif
                  </div>
                  <div class="col-md-12 my-3 font-italic">
                    <form action="{{url('/admin/about/banner/Update/declaration/'.$aboutBanner->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Declaration</label>
                        <textarea type="text" rows="4" name="about_banner_declaration" class="form-control" pleceholder="Expertice">{{$aboutBanner->about_banner_declaration}}</textarea>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
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
