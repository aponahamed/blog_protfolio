@extends('fontend.layouts.master')


@section('content')


    <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->

  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-md-9 my-5 text-center">
        <div class="mt-4 ml-5 mb-5 text-left">
          <h2 class="mb-4" style="font-size: 38px;color:#26A356;">{{$data->post_title}}</h2>
          <div>
            <span class="font-italic">
              <small>
                <b>Author: </b>Apon Ahamed <br>
                <b>Date:</b> 12/12/21
              </small>
            </span><br>
            <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$data->featuredImage)}}" style="" alt="Card image cap">
          </div>
          <p class="font-italic my-3">{{$data->post_description}}</p>
        </div>

         <div class="row mx-5">
           <div class="col-md-8 text-left mt-5">
            <p style="font-size:20px;color:#26A356;"><b>Share your Comments</b></p>
              <form> 
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="name" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <textarea name="message" rows="3" style="height:100%;" class="form-control" cols="100" placeholder="Enter Your Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn form-control" style="background-color:#26A356; color:#fff;">Message</button>
                </div>
              </form>
           </div>
           <div class="col-md-4 mt-5">
             <p style="font-size:20px;color:#26A356;">Share Post</p>
             <div>
              <a class="#"><i class="fa fa-twitter text-light mr-2" style="background-color:#26A356;font-size:18px; padding: 6px; border-radius: 5px;"></i></a>
              <a class="#"><i class="fa fa-instagram text-light mr-2" style="background-color:#26A356;font-size:18px; padding: 6px; border-radius: 5px;"></i></a>
              <a class="#"><i class="fa fa-linkedin text-light mr-2" style="background-color:#26A356;font-size:18px; padding: 6px; border-radius: 5px;"></i></a>
              <a class="#"><i class="fa fa-skype text-light mr-2" style="background-color:#26A356;font-size:18px; padding: 6px; border-radius: 5px;"></i></a>
              <a class="#"><i class="fa fa-telegram text-light mr-2" style="background-color:#26A356;font-size:18px; padding: 6px; border-radius: 5px;"></i></a>
            </div>
           </div>
         </div>

      </div>
       <div class="col-md-3 my-5">
          <p class="mt-4"><b>Category</b></p>
         <div>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Web Development</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">PHP</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">HTML Design</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Wordpress</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Laravel</a>
         </div><hr>


          <p><b>Tags</b></p>
         <div>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Web Development</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">PHP</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">HTML Design</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Wordpress</a>
            <a class="btn btn-sm m-1" href="#" style="background-color:#26A356;color:#fff;">Laravel</a>
         </div>

            <div class="col-md-12 mt-5">
              <p><b>Most Populer Post</b></p>
            </div>
            <div class="col-md-12">
              <div class="row my-3">
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('fontend/images/blog_01.jpg')}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b>Website Design Is Our Passion</b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b> 12/12/21</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                      Finding correlation between site performance and business metrics was the key to driving the success of their optimization.... <a href="#" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('fontend/images/blog_01.jpg')}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b>Website Design Is Our Passion</b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b> 12/12/21</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                      Finding correlation between site performance and business metrics was the key to driving the success of their optimization.... <a href="#" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
              </div>

          </div>
       </div>
     </div>
   </div>
   <div class="container">
      <div class="row mb-5">
            <div class="col-md-12">
              <p style="color:#26A356; font-size: 24px"><b>Realated Post</b></p>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('fontend/images/blog_01.jpg')}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b>Website Design Is Our Passion</b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b> 12/12/21</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                      Finding correlation between site performance and business metrics was the key to driving the success of their optimization.... <a href="#" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('fontend/images/blog_01.jpg')}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b>Website Design Is Our Passion</b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b> 12/12/21</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                      Finding correlation between site performance and business metrics was the key to driving the success of their optimization.... <a href="#" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>

              </div>
            </div>

              </div>
            </div>
     </div>
   </div>

@endsection