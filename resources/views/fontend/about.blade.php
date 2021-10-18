@extends('fontend.layouts.master')
@section('title',$title)

@section('content')



    <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->
  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="mt-4 col-md-12"></div>
      </div>
    </div>
    
    
   <div class="container-fluid">
    @if($About->about_banner_status == '1')
      <div class="row">
        <div class="col-md-5 mt-5 ml-5">
          <img src="{{asset('gallery/'.$About->aboutBannerImage)}}" class="img-fluid ml-5" >
        </div>
        <div class="col-md-5 mt-5">
          <div class="my-5">
            <h2 class=""style="color:#26A356;font-weight: 400">{{$personal->first_name." ".$personal->middle_name." ".$personal->last_name}}</h2>
            <p class=" font-italic">{{$personal->tagline}}</p>
          </div>

         <div class="my-3">
            <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <h2 class="universal-h2 universal-h2-bckg"style="color:#26A356">{{$About->about_banner_headding}}</h2>
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>{{$About->about_banner_title}}</h5>
                    <p style="font:13px; color:#26A356">{{$About->about_banner_subtitle}}</p>
                    <p class="text-justify text-center">{{$About->about_banner_description}}</p>
                    <a class="btn btn-sm" href="about.php"style="background:#26A356;color:#fff">About Me</a>
                  </div>  
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
         </div>
          
        </div>
      </div>
      @endif
    </div>
  </section>
  
  <section style="background: #fff">
    <div class="container">
      @if($About->about_language_status == '1')
      <div class="row">
      <div class="col-md-12 text-center my-5">
         <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">Language Skills</h2>
      </div>
      @foreach($language as $value)
      <div class="col-md-3  text-center ">
        <div class="rounded-circle text-light pt-5" style="background:#26A356; height:180px;width:180px; ">
          <h4 class="text-light">{{$value['language_percentage']}}%</h4>
          <h2 class="text-light">{{$value['language_title']}}</h2>
        </div>
      </div>
      @endforeach

      </div>
      @endif
    </div>
  </section>

  <!-- Blog -->
  <section>
    <div class="container my-3">
    @if($About->about_experience_status == '1')
      <div class="row">
        <div class="col-md-12 my-5 text-center">
          <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">My Experience </h2>
        </div>
        <div class="col-md-12">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              @foreach($experience as $key=>$value)
              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <img class="w-20" style="width:180px;height:180px;" src="{{asset('gallery/'.$value['aboutExperienceImage'])}}" alt="First slide">
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>Web Desiner</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p style="font:12px;">Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
                  </div>  
                </div>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      @endif
    </div>
  </section>
  <!-- Blog end -->

  <!-- training section start -->

  <section class="container">
  @if($About->about_traning_status == '1')
    <div class="row">
      <div class="col-md-12 my-5 text-center">
        <h2 class="universal-h2-edu universal-h2-bckg text-center pb-3"style="font-size: 50px;color:#26A356;">Traning & certifications</h2>
      </div>
    </div>
    @endif
  </section>
  <section>
    <div class="container">
    @if($About->about_traning_status == '1')
      <div class="row">
        <!-- inturen learn part -1 -->
        @foreach($certification as $value)
        <div class="col-md-3">
          <img src="{{asset('gallery/'.$value['aboutCertificationImage'])}}" style="height: 120px; width: 140px;border-radius: 20px;">
        </div>        
        <div class="col-md-9">
          <h4><span style="color:#26A356;">{{$value['institute_title']}}</span></h4>
            <p>{{$value['subject_name']}} <span class="font-italic"> (from- {{$value['from_date']}} to  {{$value['to_date']}})</span></p>
            <p style="font-size: 14px;"class="lead">{{$value['description']}}</p><hr><hr>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </section>

  <!--traning section end  -->

  <!-- My education start -->

  <section class="container">
    @if($About->about_education_status == '1')
    <div class="row">
      <div class="col-md-12 my-5">
        <h2 class="universal-h2-edu universal-h2-bckg text-center pb-3"style="font-size: 50px;color:#26A356;">Education</h2>
      </div>
    </div>
    @endif
  </section>

  <section>
    <div class="container">
      @if($About->about_education_status == '1')
        <div class="row">
          @foreach($Education as $value)
          <div class="col-md-4">
            <div class="card" id="card1">
              <div class="card-body">
                <div class="text-center" style="margin-top:-60px">
                  <img style=" height:120px; width:120px;" class="img-fluid rounded-circle" src="{{asset('gallery/'.$value['aboutEducationImage'])}}" alt="Susan Williams">
                </div>
                <div class="my-2 text-center">
                  <h5><b>{{$value['university_name']}}</b></h5>
                  <h7>{{$value['degree_title']}}</h7>
                </div>
                <p class="lead text-justify mt-2">{{$value['duration']}}</p>
                <div class="d-flex flex-row justify-content-center">
                  <a href="daffodil.com" class="btn btn-sm " style="background-color:#26A356;color:#fff;">Read More</a>
                </div>
              </div>
            </div>
          </div>
         @endforeach
        </div>
      @endif
    </div>
  </section>

  <!-- Quotes end -->



    <!-- my reasume content part end -->

  <section class="container">
    <div class="row">
      <div class="col-md-12 text-center my-5">
        <h2 class="universal-h2-edu universal-h2-bckg text-center pb-3"style="font-size: 50px;color:#26A356;">My Reasume Content</h2>
      </div>
    </div>
  </section>

  <section class="mb-5">
    <div class="container">
      <div class="row mb-5">
        <!-- carrier Objectives -->
        @if($About->about_objectives_status == '1')
          <div class="col-md-12">
            <h4 style="text-transform: uppercase; color:#26A356;">Crrier Objective</h4>
          </div>
          <div class="col-md-12">
            <p>{{$About->about_banner_objectives}}</p><hr>
          </div>
        @endif

        <!-- Expertise link here -->
        @if($About->about_expertice_status == '1')
          <div class="col-md-12">
            <h4 style="text-transform: uppercase; color:#26A356;">Expertise</h4>
          </div>
          <div class="col-md-4 mb-4">
            @foreach($expertise as $value)
              <p>{{$value['exp_title']}}</p>
            @endforeach
          </div>
        @endif

        <!-- protfolio link here -->
        @if($About->about_links_status == '1')
          <div class="col-md-12">
            <h4 style="text-transform: uppercase; color:#26A356;">Protfolio Here...</h4>
          </div>
          @foreach($protfolioLinks as $value)
          <div class="col-md-2">
            <p>{{$value['link_title']}}</p>
          </div>
          <div class="col-md-10">
            <p>: <a href="#">{{$value['links']}}</a></p>
          </div>
          @endforeach
          <div class="col-md-12 mb-3"></div>
        @endif
        

        <!-- personal informations -->
        @if($About->about_personal_status == '1')
          <div class="col-md-12">
            <h4 style="text-transform: uppercase; color:#26A356;">Personal Information</h4>
          </div>
          <div class="col-md-2">
            <p>Full Name</p>
            <p>Fathers Name</p>
            <p>Mothers Name</p>
            <p>Date Of Birth</p>
            <p>Marital Status</p>
            <p>Nationality</p>
            <p>National Id No</p>
            <p>Passport No</p>
            <p>Religion</p>
            <p>Present Address</p>
            <p>Permanent Address</p>
          </div>
          <div class="col-md-10 mb-4">
            <p>: {{$personal->first_name.' '.$personal->middle_name.' '.$personal->last_name}}</p>
            <p>: {{$personal->fathers_name}}</p>
            <p>: {{$personal->mothers_name}}</p>
            <p>: {{$personal->date_of_birth}}</p>
            <p>: {{$personal->maritial_status}}</p>
            <p>: {{$personal->nationality}}</p>
            <p>: {{$personal->national_id_no}}</p>
            <p>: {{$personal->pasport_no}}</p>
            <p>: {{$personal->religion}}</p>
            <p>: {{$personal->present_address}}</p>
            <p>: {{$personal->permanent_address}}</p>
          </div>
        @endif

        <!-- declaration part -->
        @if($About->about_declarations_status == '1')
          <div class="col-md-12">
            <h4 style="text-transform: uppercase; color:#26A356;">Declaration</h4>
          </div>
          <div class="col-md-12">
            <p>{{$About->about_banner_declaration}}</p><hr>
          </div>
        @endif

        <div class="col-md-12">
          <a href="#"><button class="btn btn-primary float-right">Download My Resume as a PDF</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- my reasume content part end -->


@endsection
