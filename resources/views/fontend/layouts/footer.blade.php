
  <footer class="bg-light"style="box-shadow: 0px 1px 16px #999;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="{{route('about')}}">About</a>
              </li>
              <li class="list-inline-item">
                <a href="{{route('contact')}}">Contact</a>
              </li>
              <li class="list-inline-item">
                <a href="{{route('protfolio')}}">Protfolio</a>
              </li>
              <li class="list-inline-item">
                <a href="{{route('blog')}}">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <button class="btn btn-lg px-5 mb-3 text-light" style="background-color:#26A356;" data-toggle="modal" data-target="#myModal">Make Contact</button>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              <small>{{$General->footer_title}}</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="text-center">
                <img src="{{asset('A.png')}}" class="rounded-circle" style="height:60px;width:60px;">
              </div>
            </div> 
            <div class="col-md-12 text-center">
              <div class="text-center">
                <p>Md. Apon Ahamed</p>
              </div>
            </div>
            <div class="col-md-12">
              <form method="POST" action="{{route('subscriber')}}" enctype="multipart/form-data">
                @csrf

                <div class="input-group input-group-lg my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                  <input type="text" name="name" placeholder="name" class="form-control form-control-lg">
                </div>

                <div class="input-group input-group-lg my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <input type="email" name="email" placeholder="Email" class="form-control form-control-lg">
                </div>

                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </div>
                  <input type="date" name="date" class="form-control form-control-lg">
                </div>

                <div class="input-group input-group-lg my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-clock-o"></i>
                    </span>
                  </div>
                  <input type="time" name="time" min="09:00" max="18:00"class="form-control form-control-lg" required>
                </div>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-center" style="background: ;height:100%;">
                      <i class="fa fa-pencil" ></i>
                    </span>
                  </div>
                  <textarea name="message" rows="4" style="height:100%;" class="form-control" cols="100"></textarea>
                </div>
                <input type="submit" class="btn btn-lg btn-block" style="color:#fff;background-color:#26A356;" value="submit">
              </form>
            </div>
            </div> 
          </div>
          
          
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        
        <!-- Modal body -->

        <!-- Modal footer -->
<!--         <div class="modal-footer">
          
        </div> -->
        
      </div>
    </div>
  </div>

  <!--/ Footer End /-->