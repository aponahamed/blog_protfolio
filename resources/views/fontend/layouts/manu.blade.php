<!--  -->
   <style>
    .modal-title{
      color:#2eca6a;
    }
    .form-group{
      color:#2eca6a;
    }
    .btn-light-design:hover{
      background-color:#2eca6a;
    }
    .input-style-line{
      border:1px solid #2eca6a;
    }
  </style>


  <div class="click-closed"></div>

  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Option</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a"action="search.php" method="GET">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <!-- <label for="Type"></label> -->
              <input type="search" name="data" value="" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12">
            <button  class="btn btn-b" type="submit" name='req' value="Search" >Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->



  <!--/ Nav Start /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{route('home')}}"><span class="color-b">Mr </span> Apon <span class="color-b">Ahamed</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>


      <div class="navbar-collapse collapse  flex-row-reverse mr-5" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('protfolio')}}">Protfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">Blog</a>
          </li>

        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse  d-none d-md-block" data-toggle="collapse"
        data-target="#loginModal" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->