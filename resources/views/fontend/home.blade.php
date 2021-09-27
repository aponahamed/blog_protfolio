@extends('fontend.layouts.master')


@section('content')

  <!--/ Carousel Star /-->
    <div class="bg-light banner_main mt-5"style="box-shadow: 0px 2px 16px #999;">

            <div class="container">
              <div class="row">
                <div class="col-md-12 my-5">
                  
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <img src="{{asset('fontend/images/baner.png')}}" class="img-fluid" style="max-height:600px;">
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 my-3">
                  
                        </div>
                      </div>  
                      <div class="intro-body content-justify-center">
                        <a href=""><p class="intro-title-top">Mr. Apon Ali
                          <br>B.<small>sc Engineer</small></p></a>
                          <h2 class="intro-title mb-5">
                            <span class="color-b">Exper</span>ienceed
                              <br><span style="font-size:50px;">Web </span><span class="color-b"style="font-size:50px;">Developer</span>
                          </h2>
                          <p class="text-muted text-justify">
                            <span style="color:#26A356;font-size:38px;"><b>Ex</b></span>perience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides.<br> 

                            So,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.<br>
                            <span class="text-muted text-dark"> <a href=""><b>Read Our Blog</b></a> || <a href=""><b>Contact With me </b></a></span>
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <!--/ Carousel end /-->

            <!-- =======
    experienced description and profile view start
    ==========-->
   
    <div class="container">
      <div class="row">
        <div class="col-md-12  mt-5 mb-3">
          <h2 style="font-size: 50px;color:#26A356;">Motivation</h2>
        </div>
        <div class="col-md-12">
          <p class=" text-justify">Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides. 

          So,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.</br>

          Finally we can say if this platform will helps all of the people. It will help people to make right decision and also make self-confidence,that what does he need to do for his skill development.</br>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5 text-left">
          <h2 class="universal-h2 universal-h2-bckg"style="font-size: 50px;color:#26A356;">My Skills</h2>
        </div>
        <!-- Counter -->
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 text-center text-light">
              <div class="card">
                <div class="card-body p-4" style="background: #26A356; border-radius: 5px">
                  <span class="count" style="font-size: 32px;font-weight: 500" data-count="80">80</span><br>
                  <img src="{{asset('fontend/images/counter-1.png')}}" style="height:45px;width: 45px;" class="img-fluid" alt="counter icon">
                  <p style="font-size: 18px;font-weight: 500;margin-top: 15px;">Photoshop & Illustration</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-center text-light">
              <div class="card-body p-4" style="background: #26A356;border-radius: 5px">
                <span class="count" style="font-size: 32px;font-weight: 500" data-count="95">95</span><br>
                <img src="{{asset('fontend/images/counter-2.png')}}" style="height:45px;width: 45px;" class="img-fluid" alt="counter icon">
                <p style="font-size: 18px;font-weight: 500; margin-top: 15px;">WebDesign</p>
              </div>
            </div>
            <div class="col-md-3 text-center text-light">
              <div class="card-body p-4" style="background: #26A356;border-radius: 5px">
                <span class="count" style="font-size: 32px;font-weight: 500" data-count="75">75</span><br>
                <img src="{{asset('fontend/images/counter-3.png')}}" style="height:45px;width: 45px;" class="img-fluid" alt="counter icon">
                <p style="font-size: 18px;font-weight: 500; margin-top: 15px;">WebDevelopment</p>
              </div>
            </div>
            <div class="col-md-3 text-center text-light">
              <div class="card-body p-4" style="background: #26A356;border-radius: 5px">
                <span class="count" style="font-size: 32px;font-weight: 500" data-count="25">25</span><br>
                <img src="{{asset('fontend/images/counter-4.png')}}" style="height:45px;width: 45px;" class="img-fluid" alt="counter icon">
                <p style="font-size: 18px;font-weight: 500; margin-top: 15px;">Framework(laraval)</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Counter -->
      </div>  
    </div>



      <!-- Books and CD -->
  <section class="fh5co-books">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5">
          <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">Some Of Works</h2>
        </div>
      </div>
      <div class="books">
        <div class="single-book">
          <a href="#" class="single-book__img">
            <img src="{{asset('fontend/images/work-1.png')}}" alt="single book and cd">
            <div class="single-book_download">
              <img src="{{asset('fontend/images/download.svg')}}" alt="book image">
            </div>
          </a>
          <h4 class="single-book__title">Experience Sharing Platform</h4>
          <span class="single-book__price">University Project</span>
          <!-- star rating -->
          <div class="rating">
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
          </div>
          <!-- star rating end -->
        </div>
        <div class="single-book">
          <a href="#" class="single-book__img">
            <img src="{{asset('fontend/images/work-2.png')}}" alt="single book and cd">
            <div class="single-book_download">
              <img src="{{asset('fontend/images/download.svg')}}" alt="book image">
            </div>
          </a>
          <h4 class="single-book__title">Open Poster Moc Kup</h4>
          <span class="single-book__price">Making banner Website</span>
          <!-- star rating -->
          <div class="rating">
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
          </div>
          <!-- star rating end -->
        </div>
        <div class="single-book">
          <a href="#" class="single-book__img">
            <img src="{{asset('fontend/images/work-3.png')}}" alt="single book and cd">
            <div class="single-book_download">
              <img src="{{asset('fontend/images/download.svg')}}" alt="book image">
            </div>
          </a>
          <h4 class="single-book__title">Bootstrap Templete</h4>
          <span class="single-book__price">Learning website</span>
          <!-- star rating -->
          <div class="rating">
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
          </div>
          <!-- star rating end -->
        </div>
        <div class="single-book">
          <a href="#" class="single-book__img">
            <img src="{{asset('fontend/images/work-4.png')}}" alt="single book and cd">
            <div class="single-book_download">
              <img src="{{asset('fontend/images/download.svg')}}" alt="book image">
            </div>
          </a>
          <h4 class="single-book__title">PSD To Web-Code Project</h4>
          <span class="single-book__price">Practical Html,Css & Bootstrap</span>
          <!-- star rating -->
          <div class="rating">
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
          </div>
          <!-- star rating end -->
        </div>
      </div>
    </div>
  </section>
  <!-- Books and CD end -->

@endsection