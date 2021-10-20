@extends('fontend.layouts.master')
@section('title', $data->post_title)
@section('meta_title', $data->meta_title)
@section('meta_description', $data->meta_description)
@section('meta_keywords', $data->meta_keywords)


@section('content')

    <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->

  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-md-9 my-5 text-center">
        <div class="mt-4 ml-5 mb-5 text-left">
          <h2 class="mb-4" style="font-size: 38px;color:#26A356;"><a style="color:#26A356" href="{{'/blog/'.$data->post_title}}">{{$data->post_title}}</a></h2>
          <div>
            <span class="font-italic">
              <small>
                <!-- <span>
                  @php $rattings = number_format($rattings_avg)  @endphp
                  @for($i = 1; $i<= $rattings; $i++)
                  <i class="fa fa-star checked"></i>
                  @endfor
                  @for($j=$rattings+1; $j<=5; $j++)
                  <i class="fa fa-star"></i>
                  @endfor
                  
                  @if($post_review->count()>0)
                  {{number_format($rattings_avg)}}
                  ({{$post_review->count()}} reviews)
                  @else
                   No Reviews
                  @endif
                </span><br> -->
                <b>Author: </b>Apon Ahamed <br>
                <b>Date:</b> 12/12/21
              </small>
            </span><br>
            <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$data->featuredImage)}}" style="" alt="{{$data->featuredImage}}">
          </div>
          <p class="font-italic my-3">{{strip_tags($data->post_description)}}</p>
        </div>

         <div class="row mx-5">
           <div class="col-md-12 my-5 text-left">
            @if($post_review->count() > 0 )
              <p style="font-size:20px;color:#26A356;"><b>Post's Reviews</b></p>
            @endif
             @foreach($all_reviews as $value)
             <div class="row">
               <div class="col-md-1">
                  <img src="{{asset('backend/images/avatar3.png')}}" class="rounded-circle" style="height:45px;width:45px;" alt="">
               </div>
               <div class="col-md-11">
                 <p><b>{{$value->name}}</b><br>
                 <small>
                    <!-- <span>
                      @php $rattings = $value->rattings  @endphp
                        @for($i = 1; $i<= $rattings; $i++)
                          <i class="fa fa-star checked"></i>
                        @endfor
                        @for($j=$rattings+1; $j<=5; $j++)
                          <i class="fa fa-star"></i>
                        @endfor
                      
                        @if($value->rattings>0)
                          ({{$rattings}} Star Reviews)
                        @else
                          No Reviews
                        @endif
                    </span><br> -->
                    {{$value->message}}
                </small></p>
               </div>
             </div>
             @endforeach
           </div>
           <div class="col-md-8 text-left mt-5">
            <p style="font-size:20px;color:#26A356;"><b>Share your Reviews</b></p>
              <form action="{{route('rattings')}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <!-- <div class="form-group text-left">
                  <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="rattings" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="rattings" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="rattings" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="rattings" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="rattings" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                  <input type="hidden" class="form-control" name="post_slug" value="{{$data->post_slug}}">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                  <textarea name="message" rows="3" style="height:100%;" class="form-control" cols="100" placeholder="Enter Your Message" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn form-control" style="background-color:#26A356; color:#fff;" >Post Review</button>
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
          <div class="my-3">
              <form action="{{route('postSearch')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" name="search" type="text" value="search" id="example-search-input">
                    <span class="input-group-append">
                      <button class="btn   border-start-0 border rounded-pill ms-n3 btn-success" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
              </form>
          </div>
          <p class="mt-4"><b>Category</b></p>
         <div>
            @foreach($category as $value)
              <a class="btn btn-sm m-1" href="{{'/blog/category/'.$value['category_title']}}" style="background-color:#26A356;color:#fff;">{{$value['category_title']}}</a>
            @endforeach
         </div><hr>


          <p><b>Related Tags</b></p>
         <div>
            @foreach($post_tag as $value)
              <a class="btn btn-sm m-1" href="{{'/blog/publicTag/'.$value}}" style="background-color:#26A356;color:#fff;">{{$value}}</a>
            @endforeach
         </div>

            <div class="col-md-12 mt-5">
              <p><b>Most Populer Post</b></p>
            </div>
            <div class="col-md-12">
              <div class="row my-3">
              @foreach($populer_post as $value)
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" style="height:120px; width:100%" alt="{{$value['featuredImage']}}">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b><a style="color:#26A356" href="{{'/blog/'.$value['post_slug']}}">{{$value['post_title']}}</a></b></p>
                    <div style="margin-top:-15px;">
                      <!-- <span style="font-size: 10px;">
                        @php 
                          $rattings = $value->rattings;
                        @endphp
                        @for($i = 1; $i<= $rattings; $i++)
                          <i class="fa fa-star checked"></i>
                        @endfor
                        @for($j=$rattings+1; $j<=5; $j++)
                          <i class="fa fa-star"></i>
                        @endfor
                      
                        @if($value->rattings>0)
                          ({{$rattings}} Star Reviews)
                        @else
                          No Reviews
                        @endif
                    </span><br> -->
                      <span style="font-size: 11px;"><b>Author: </b>Apon Ahamed <b>Date:</b>{{$value['create_date']}}</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                    {{Str::limit(strip_tags($value['post_description']),150)}}<a href="{{'/blog/'.$value['post_slug']}}" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
                @endforeach
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
                @foreach($relatedPost as $value)
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" style="height:120px; width:100%" alt="{{$value['featuredImage']}}">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;color:#26A356"><b><a style="color:#26A356" href="{{'/blog/'.$value['post_slug']}}">{{$value['post_title']}}</a></b></p>
                    <div style="margin-top:-15px;font-size: 11px;">
                    <!-- <span>
                      @if($value['rattings']>1)
                        @php $final = $value['rattings']/$value['count_rattings']; $rattings = number_format($final)  @endphp
                      @else
                        @php $rattings =0; @endphp
                      @endif
                      @for($i = 1; $i<= $rattings; $i++)
                        <i class="fa fa-star checked"></i>
                      @endfor
                      @for($j=$rattings+1; $j<=5; $j++)
                        <i class="fa fa-star"></i>
                      @endfor
                      @if($value['count_rattings']>0)
                        ({{$rattings}} Star Reviews)
                      @else
                        No Reviews
                      @endif
                    </span> -->
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b>{{$value['create_date']}}</span>
                    </div>
                  </div>
                  <div>
                    <p class="text-muted text-justify" style="font-size:12px;">
                    {{Str::limit(strip_tags($value['post_description']),150)}}<a href="{{'/blog/'.$value['post_slug']}}" class="btn" style="background-color:#26A356;color:#fff;padding: 2px;">Read More</a >
                    </p>
                  </div>
                </div>
                @endforeach

              </div>
            </div>

              </div>
            </div>
     </div>
   </div>

@endsection