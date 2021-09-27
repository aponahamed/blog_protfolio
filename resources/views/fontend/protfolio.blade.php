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

            <!-- =======
    experienced description and profile view start
    ==========-->
   <!--about or why-->
  <section id="about" class="bg-light py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="info-book">
            <h2 class="text-left my-3 display-4" style="color:#26a356;">Work Gallery</h2>
            <p class="text-left lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.</p>
          </div>
        </div>
        <div class="col-md-12 my-5">
          <div class="row">
            <div class="col-md-5">
              <!-- Gallery -->
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />

                  <img
                    src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
                </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
<!-- Gallery -->
          </div>
          <div class="col-md-7">
             <!--accordiyam-->
          <div id="accordion" class="">
            <h2 class="text-left" style="text-transform: ;color:#26A356;"><b>Laravel Ecommerce Web Project</b></h2>
            <div class="card">

              <div class="card-header" role="tab">

                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse1">
                    <p class="text-left text-justify text-muted">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consectetur accusantium, molestias quos, distinctio, labore assumenda repellendus, beatae adipisci fuga explicabo iure quia. Facilis ratione, aut, impedit id rerum voluptate...
                      <b>Read More</b>
                    </p>
                  </div>
                </h5>
              </div>
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consectetur accusantium, molestias quos, distinctio, labore assumenda repellendus, beatae adipisci fuga explicabo iure quia. Facilis ratione, aut, impedit id rerum voluptate?</p>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Authors start -->


@endsection