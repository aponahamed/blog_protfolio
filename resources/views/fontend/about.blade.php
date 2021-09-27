@extends('fontend.layouts.master')


@section('content')



    <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->
  <section>
   <div class="container-fluid">
      <div class="row my-5">
        <div class="col-md-5 mt-5 ml-5">
          <img src="{{asset('fontend/images/about-me-1.jpg')}}" class="img-fluid ml-5" >
        </div>
        <div class="col-md-5 mt-5">
          <div class="my-5">
            <h2 class=""style="color:#26A356;font-weight: 400">Mr. Apon Ahamed</h2>
            <p class=" font-italic">I am Responsible For My Duty & I Respect All Of My Hounerable Person.</p>
          </div>

         <div class="my-3">
            <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <h2 class="universal-h2 universal-h2-bckg"style="color:#26A356">About Me</h2>
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>WebDeveloper</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p class="text-justify text-center"><span class="text_style">T</span>hanks almighty. i am apon ahamed . a certified full  stack web developer with 2 years of experience in a verity of exciting project. as a full stack web developer, i have specialized in web development and experienced with all stage of dynamic web project. i have made many website s using populer CMS called bootstrap. i am also experienced in Php, Jvascript, HTML5,Css3,Jquery, And Laraval.</p>
                    <a class="btn btn-sm" href="about.php"style="background:#26A356;color:#fff">About Me</a>
                  </div>  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <h2 class="universal-h2 universal-h2-bckg"style="color:#26A356">About Work</h2>
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>WebDeveloper</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p><span class="text_style">T</span>hanks almighty. i am apon ahamed . a certified full  stack web developer with 2 years of experience in a verity of exciting project. as a full stack web developer, i have specialized in web development and experienced with all stage of dynamic web project. i have made many website s using populer CMS called bootstrap. i am also experienced in Php, Jvascript, HTML5,Css3,Jquery, And Laraval.</p>
                    <p class="btn btn-sm" href="{{route('protfolio')}}" style="background:#26A356;color:#fff">See More</p>
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
    </div>
  </section>
  
  <section style="background: #fff">
    <div class="container">
      <div class="row">
      <div class="col-md-12 text-center my-5">
         <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">Language Skills</h2>
      </div>
      <div class="col-md-3  text-center ">
        <div class="rounded-circle text-light pt-5" style="background:#26A356; height:180px;width:180px; ">
          <h4 class="text-light">100%</h4>
          <h2 class="text-light">Bangla</h2>
        </div>
      </div>
      <div class="col-md-3  text-center ">
        <div class="rounded-circle text-light pt-5" style="background:#26A356; height:180px;width:180px; ">
          <h4 class="text-light">85%</h4>
          <h2 class="text-light">English</h2>
        </div>
      </div>
      <div class="col-md-3  text-center ">
        <div class="rounded-circle text-light pt-5" style="background:#26A356; height:180px;width:180px; ">
          <h4 class="text-light">35%</h4>
          <h2 class="text-light">Korean</h2>
        </div>
      </div>
      <div class="col-md-3  text-center ">
        <div class="rounded-circle text-light pt-5" style="background:#26A356; height:180px;width:180px; ">
          <h4 class="text-light">65%</h4>
          <h2 class="text-light">Hindi</h2>
        </div>
      </div>

      </div>
    </div>
  </section>

  <!-- Blog -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5 text-center">
          <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">My Experience </h2>
        </div>
        <div class="col-md-12">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <img class="w-20" style="width:180px;height:180px;" src="{{asset('fontend/images/sparrow.png')}}" alt="First slide">
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>Web Desiner</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p style="font:12px;">Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
                  </div>  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <img class=" w-20" style="width:180px;height:180px;" src="{{asset('fontend/images/dawan.jpg')}}" alt="First slide">
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>Web Desiner</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p style="font:12px;">Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
                  </div>  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row text-center">
                  <div class="text-center col-md-12 mb-2">
                    <img style="width:180px; height:200px;" src="{{asset('fontend/images/logo.png')}}" alt="First slide">
                  </div>
                  <div class="col-md-12 text-center">
                    <h5>Web Desiner</h5>
                    <p style="font:13px; color:#26A356">Dawan ICT</p>
                    <p style="font:12px;">Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
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
  </section>
  <!-- Blog end -->

  <!-- training section start -->

  <section class="container">
    <div class="row">
      <div class="col-md-12 my-5 text-center">
        <h2 class="universal-h2-edu universal-h2-bckg text-center pb-3"style="font-size: 50px;color:#26A356;">Traning & certifications</h2>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <!-- inturen learn part -1 -->
        <div class="col-md-3">
          <img src="{{asset('fontend/images/BIT.png')}}" style="height: 120px; width: 140px;border-radius: 20px;">
        </div>        
        <div class="col-md-9">
          <h4><span style="color:#26A356;">Bangladesh It Institute</span></h4>
            <p>Web-Design & Graphics Design (01 Sep 2015 To 30 November To 2015)</p>
            <p style="font-size: 14px;"class="lead">This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school</p><hr><hr>
        </div>

        <!-- inturen learn part -2 -->
        <div class="col-md-3">
          <img src="{{asset('fontend/images/BKTTC.png')}}" style="height: 120px; width: 140px;border-radius: 20px;">
        </div>        
        <div class="col-md-9">
          <h4><span style="color:#26A356;">Bangladesh-Korea Technical Training Center(BKTTC)</span></h4>
            <p>Web-Design & Development (05 july 2019 To 30 Sep 2019)</p>
            <p style="font-size: 14px;"class="lead">This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school</p>
        </div>
      </div>
    </div>
  </section>

  <!--traning section end  -->

  <!-- My education start -->

  <section class="container">
    <div class="row">
      <div class="col-md-12 my-5">
        <h2 class="universal-h2-edu universal-h2-bckg text-center pb-3"style="font-size: 50px;color:#26A356;">Education</h2>
      </div>
    </div>
  </section>

  <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card" id="card1">
              <div class="card-body">
                <div class="text-center" style="margin-top:-60px">
                  <img style=" height:120px; width:120px;" class="img-fluid rounded-circle" src="{{asset('fontend/images/daffodil.jpg')}}" alt="Susan Williams">
                </div>
                <div class="my-2 text-center">
                  <h5><b>Daffodil International University</b></h5>
                  <h7>B.sc in Engineering</h7>
                </div>
                <p class="lead text-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                <div class="d-flex flex-row justify-content-center">
                  <a href="daffodil.com" class="btn btn-sm " style="background-color:#26A356;color:#fff;">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" id="card1">
              <div class="card-body">
                <div class="text-center" style="margin-top:-60px">
                  <img style=" height:120px; width:120px;" class="img-fluid rounded-circle" src="{{asset('fontend/images/polytechnic.jpg')}}" alt="Susan Williams">
                </div>
                <div class="my-2 text-center">
                  <h5><b>Sherpur Polytechnic</b></h5>
                  <h7>Diploma in Engineering</h7>
                </div>
                <p class="lead text-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                <div class="d-flex flex-row justify-content-center">
                  <a href="daffodil.com" class="btn btn-sm " style="background-color:#26A356;color:#fff;">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" id="card1">
              <div class="card-body">
                <div class="text-center" style="margin-top:-60px">
                  <img style=" height:120px; width:120px;" class="img-fluid rounded-circle" src="{{asset('fontend/images/school.jpg')}}" alt="Susan Williams">
                </div>
                <div class="my-2 text-center">
                  <h5><b>Sholakuri High School</b></h5>
                  <h7>Secondary School Certificate</h7>
                </div>
                <p class="lead text-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
                <div class="d-flex flex-row justify-content-center">
                  <a href="daffodil.com" class="btn btn-sm " style="background-color:#26A356;color:#fff;">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="col-md-12">
          <h4 style="text-transform: uppercase; color:#26A356;">Crrier Objective</h4>
        </div>
        <div class="col-md-12">
          <p>To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.</p><hr>
        </div>

        <!-- Expertise link here -->
        <div class="col-md-12">
          <h4 style="text-transform: uppercase; color:#26A356;">Expertise</h4>
        </div>
        <div class="col-md-2 mb-4">
          <p>HTML5, CSS3 & SCSS</p>
          <p>JavaScript & JQuery</p>
          <p>Bootstrap</p>
          <p>PHP</p>
          <p>Laravel</p>
          <p>Photoshop & Illustration</p>
        </div>

        <!-- protfolio link here -->
        <div class="col-md-12">
          <h4 style="text-transform: uppercase; color:#26A356;">Protfolio Here...</h4>
        </div>
        <div class="col-md-2">
          <p>Github</p>
          <p>Protfolio</p>
          <p>fiverr</p>
        </div>
        <div class="col-md-10 mb-4">
          <p>: <a href="#">www.github.com</a></p>
          <p>: <a href="#">www.aponali.com/protfolio</a></p>
          <p>: <a href="#">https://www.fiverr.com/aponahamed?up_rollout=true</a></p>
        </div>

        <!-- personal informations -->
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
          <p>: Apon Ali</p>
          <p>: Sultan Mia</p>
          <p>: Yeaton Nesa</p>
          <p>: 05 May 1994</p>
          <p>: Unmarried</p>
          <p>: Bangladeshi</p>
          <p>: 6408999230</p>
          <p>: BY0522648</p>
          <p>: Islam</p>
          <p>: Vill-Boroykuri, Post-Sholakuri, P.S-Madhupur, Dist-Tangail.</p>
          <p>: Basa-5/6/A-1, Road-11, SouthBishil, Mirpur-1, Dhaka-1216.</p>
        </div>

        <!-- declaration part -->
        <div class="col-md-12">
          <h4 style="text-transform: uppercase; color:#26A356;">Declaration</h4>
        </div>
        <div class="col-md-12">
          <p>To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.</p><hr>
        </div>

        <div class="col-md-12">
          <a href="#"><button class="btn btn-primary float-right">Download My Resume as a PDF</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- my reasume content part end -->


@endsection
