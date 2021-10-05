@extends('fontend.layouts.master')


@section('content')


    <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->

  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-md-9">
        <div class="row my-4 ml-4">
            <div class="col-md-12 my-5 text-left">
              <div class="mt-4 mx-4">
                <h2 style="font-size: 50px;color:#26A356;">Our Blog Post</h2>
                <p class="font-italic">Finding correlation between site performance and business metrics was the key to driving the success of their optimization efforts.business metrics was the key to driving the success of their optimization efforts</p>
              </div>
            </div>

            @foreach($data as $value)
            <div class="col-md-4 mb-3">
              <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" style="width:100%;height:220px" alt="featuredImage">
            </div>
            <div class="col-md-8 mb-3">
              <div class="card" style="width: 100%;border: 0;">
                <div class=" m-0">
                  <div class="">
                    <h5 style="color:#26A356"><b>{{$value['post_title']}}</b></h5>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b>{{$value['create_date']}}</span>
                  </div>
                  <div>
                    <p class="text-justify" style="font-size:14px;">
                      {{Str::limit($value['post_description'],450)}}<a href="{{'viewpost/'.$value['post_slug']}}" class="btn btn-sm" style="background-color:#26A356;color:#fff;">Read More</a >
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

           
           
          </div>
          <div class="col-md-12 text-sm">
          {{$data->links()}}
          </div>
          

       </div>
      
         
     

       <div class="col-md-3">
          <div class="row">
            <div class="col-md-12 mt-5">
              <div class="my-3">
                <p style="font-size: 14px;color:#26A356;"><b>Search Text</b></p>
                <input type="Search" class="form-control">
              </div>
              <p><b>Category</b></p>
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
         </div><hr>

         <p><b>Share Link</b></p>
         <div>
            <a class="#"><i class="fa fa-twitter text-light mb-1" style="background-color:#26A356;font-size:24px; padding: 8px; border-radius: 5px;"></i></a>
            <a class="#"><i class="fa fa-instagram text-light mb-1" style="background-color:#26A356;font-size:24px; padding: 8px; border-radius: 5px;"></i></a>
            <a class="#"><i class="fa fa-linkedin text-light mb-1" style="background-color:#26A356;font-size:24px; padding: 8px; border-radius: 5px;"></i></a>
            <a class="#"><i class="fa fa-skype text-light mb-1" style="background-color:#26A356;font-size:24px; padding: 8px; border-radius: 5px;"></i></a>
            <a class="#"><i class="fa fa-telegram text-light mb-1" style="background-color:#26A356;font-size:24px; padding: 8px; border-radius: 5px;"></i></a>
         </div><hr>

       </div>
            <div class="col-md-12">
              <p><b>Most Recent Post</b></p>
            </div>
            <div class="col-md-12">
              <div class="row my-3">
              @foreach($recent_post as $value)
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b>{{$value['post_title']}}</b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b>{{$value['create_date']}}</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                    {{Str::limit($value['post_description'],150)}}<a href="{{'viewpost/'.$value['id']}}" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>


            <div class="col-md-12">
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
  </div>


@endsection