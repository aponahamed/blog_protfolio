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
                <h2 style="font-size: 50px;color:#26A356;">Category : {{$title}}  </h2>
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
                    <h5><b><a style="color:#26A356" href="{{'/blog/'.$value['post_slug']}}">{{$value['post_title']}}</a></b></h5>
                    <span>
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
                        {{$rattings}}
                        ({{$value['count_rattings']}} Reviews)
                      @else
                        No Reviews
                      @endif
                    </span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b>{{$value['create_date']}}</span>
                  </div>
                  <div>
                    <p class="text-justify" style="font-size:14px;">
                    {{Str::limit(strip_tags($value['post_description']),450)}}<a href="{{'/blog/'.$value['post_slug']}}" class="btn btn-sm" style="background-color:#26A356;color:#fff;">Read More</a >
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
              <form action="{{route('postSearch')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="input-group ">
                    <input class="form-control border-end-0 border rounded-pill" name="search" type="text" value="search" id="example-search-input">
                    <span class="input-group-append">
                      <button class="btn   border-start-0 border rounded-pill ms-n3 btn-success" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
              <p><b>Category</b></p>
         <div>
            @foreach($category as $value)
              <a class="btn btn-sm m-1" href="{{'/blog/category/'.$value['category_title']}}" style="background-color:#26A356;color:#fff;">{{$value['category_title']}}</a>
            @endforeach
         </div><hr>


          <p><b>Public Tags</b></p>
         <div>
            @foreach($tagView as $value)
              <a class="btn btn-sm m-1" href="{{'/blog/publicTag/'.$value['tag_name']}}" style="background-color:#26A356;color:#fff;">{{$value['tag_name']}}</a>
            @endforeach
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
                    <p style="font-size:14px;"><b><a style="color:#26A356" href="{{'/blog/'.$value['post_slug']}}">{{$value['post_title']}}</a></b></p>
                    <div style="margin-top:-15px;font-size: 10px;">
                    <span>
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
                    </span>
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


            <div class="col-md-12">
              <p><b>Most Populer Post</b></p>
            </div>
            <div class="col-md-12">
              <div class="row my-3">
              @foreach($populer_post as $value)
                <div class="col-md-6">
                  <div>
                    <img class="img-fluid" src="{{asset('upload/post/featuredImage/'.$value['featuredImage'])}}" style="" alt="Card image cap">
                  </div>
                  <div class="mb-2">
                    <p style="font-size:14px;"><b><a style="color:#26A356" href="{{'/blog/'.$value['post_slug']}}">{{$value['post_title']}}</a></b></p>
                    <div style="margin-top:-15px;font-size: 10px;">
                    <span>
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
                    </span>
                      <span><b>Author: </b>Apon Ahamed <b>Date:</b> {{$value['create_date']}}</span>
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