@extends('fontend.layouts.master')
@section('title',$title)

@section('content')

  <!--/ Carousel Star /-->
    <div class="bg-light banner_main mt-5"style="box-shadow: 0px 2px 16px #999;">
          @if($banner->banner_status == '1')
            <div class="container">
              <div class="row">
                <div class="col-md-12 my-5">
                  
                </div>
                
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <img src="{{asset('gallery/'.$banner->homeBannerImage)}}" alt="{{$banner->homeBannerImage}}" class="img-fluid" style="max-height:600px;">
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 my-3">
                  
                        </div>
                      </div>  
                      <div class="intro-body content-justify-center">
                        <a href=""><p class="intro-title-top">{{$personal->first_name." ".$personal->middle_name." ".$personal->last_name}}
                          <br><small>{{$personal->Designition}}</small></p></a>
                          <h2 class="intro-title mb-5">
                            <span class="color-b">Exper</span>ienceed
                              <br><span style="font-size:50px;">{{$banner->banner_title_1st}} </span><span class="color-b"style="font-size:50px;">{{$banner->banner_title_2nd}}</span>
                          </h2>
                          <p class="text-muted text-justify">
                            <span style="color:#26A356;font-size:38px;"><b>Ex</b></span>perience {{$banner->banner_description}}<br>
                            <span class="text-muted text-dark"> <a href=""><b>Read Our Blog</b></a> || <a href=""><b>Contact With me </b></a></span>
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          @endif
    </div>
    <!--/ Carousel end /-->

            <!-- =======
    experienced description and profile view start
    ==========-->
   
    <div class="container">
      @if($banner->motivation_status == '1')
      <div class="row my-5">
        <div class="col-md-12  mt-5 mb-3">
          <h2 style="font-size: 50px;color:#26A356;">{{$banner->motivation_title}}</h2>
        </div>
        <div class="col-md-12">
          <p class=" text-justify">{{$banner->motivation_description}}</br>
        </div>
      </div>
      @endif
    </div>

    <div class="container">
      @if($banner->skill_status == '1')
      <div class="row mb-5">
        <div class="col-md-12 mb-3 text-left">
          <h2 class="universal-h2 universal-h2-bckg"style="font-size: 50px;color:#26A356;">My Skills</h2>
        </div>
        <!-- Counter -->
        <div class="col-md-12">
          <div class="row">
            @foreach($homeSkills as $value)
            <div class="col-md-3 text-center text-light">
              <div class="card">
                <div class="card-body p-4" style="background: #26A356; border-radius: 5px">
                  <span class="count" style="font-size: 32px;font-weight: 500" data-count="80">{{$value['skill_percentage']}}%</span><br>
                  <img src="{{asset('gallery/'.$value['homeSkillImage'])}}" style="height:45px;width: 45px;" class="img-fluid" alt="{{$value['homeSkillImage']}}">
                  <p style="font-size: 18px;font-weight: 500;margin-top: 15px;">{{$value['skill_title']}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- Counter -->
      </div>  
      @endif
    </div>



      <!-- Books and CD -->
  <section class="fh5co-books">
    <div class="container">
      @if($banner->works_status == '1')
      <div class="row">
        <div class="col-md-12 my-5">
          <h2 class="universal-h2 universal-h2-bckg" style="font-size: 50px;color:#26A356;">Some Of Works</h2>
        </div>
      </div>
      <div class="books">
        @foreach($homeWorks as $value)
        <div class="single-book">
          <a href="#" class="single-book__img">
            <img src="{{asset('gallery/'.$value['homeWorksImage'])}}" alt="{{$value['homeWorksImage']}}">
            <div class="single-book_download">
              <img src="{{asset('fontend/images/download.svg')}}" alt="download.svg">
            </div>
          </a>
          <h4 class="single-book__title">{{$value['works_title']}}</h4>
          <span class="single-book__price">{{$value['works_sub_title']}}</span>
          <!-- star rating -->
          <!-- <div class="rating">
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
            <span>&#9734;</span>
          </div> -->
          <!-- star rating end -->
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </section>
  <!-- Books and CD end -->

@endsection