@extends('fontend.layouts.master')


@section('content')
 <style type="text/css">
      #showcase{
  background-image:url(image/bg_2.jpg);
  position:relative;
  min-height:600px;
  background-repeat: no-repeat;
  background-image: cover;
    height:100%;
}
.primary-overlay{
    background:rgba( 0, 0, 0,  0.7);
    min-height:600px;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
  }
    </style>

  <!--/ Carousel Star /-->
    <div class="bg-light banner_main mt-5"style="box-shadow: 0px 2px 16px #999;">

            

                    <!--showcase or home start -->
  <section id="showcase" class="py-5 text-center text-light mt-5">
    <div class="primary-overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 text-left">
            <h1 class="display-4 mt-5 pt-5" style="color:#26a356;">
              <span class="text-light"><b>Hello,</b></span><br>
              Do What You Dream Of...
            </h1>
            <p class="text-justify">
              Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides. </br>

          So,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.</br>

          Finally we can say if this platform will helps all of the people. It will help people to make right decision and also make self-confidence,that what does he need to do for his skill development.
            </p>
            <a href="#"><button class="btn btn-outline-light btn-lg"><i class="fa fa-arrow-right"></i> Read More</button></a>
          </div>
          <div class="col-lg-5 mt-5">
            <div class="mt-5">
              
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body my-4">
                  <div class="text-center">
                    <h1 class="card-title" ><b><span style="color:#26a356;">I'm</span> </b> <br>Webdeveloper</h1>
                  </div>
                  <h2 class="card-title">Active On 14 Hours</h2>
                  <h1 class="card-text"><b>Everyday</b></h1>
                  <h1>Time</h1><p class="text-dark">12.00 GMT - 2.00 GMT</p>
                  <a href="#" class="btn" style="background-color:#26a356;color:#fff;">Go Down</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--/ Carousel end /-->

            <!-- =======
    experienced description and profile view start
    ==========-->
    <section id="contact" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="info-contact">
            <h2 class="dsplay-4">Get In Touch</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, cumque.</p>
          </div>
          <form>

            <div class="form-group">
                <div class='input-group input-group-lg date' id='datetimepicker1'>
                    <input type='date' class="form-control" />
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
              </div>
              <input type="text" placeholder="name" class="form-control form-control-lg">
            </div>
            <div class="input-group input-group-lg my-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input type="email" placeholder="Email" class="form-control form-control-lg">
            </div>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text text-center" style="background: ;height:100%;">
                  <i class="fa fa-pencil" ></i>
                </span>
              </div>
              <textarea name="message" rows="4" style="height:100%;" class="form-control" cols="100"></textarea>
            </div>
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit">
          </form>
        </div>
        <div class="col-md-3 align-self-center d-none d-lg-block">
          <img src="{{asset('fontend/images/apon.jpg')}}" class="img-fluid rounded-circle" alt="logo">
        </div>
        
      </div>
    </div>
  </section>
  <section style="width:100%">
    <div class=" my-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14599.768620640136!2d90.3643517!3d23.8206559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc12bf87d41c2b0cb!2sCare%20for%20Child%20Development%20(CCD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1632313357047!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
  </section>

@endsection