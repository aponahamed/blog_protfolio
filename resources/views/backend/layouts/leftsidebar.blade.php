
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
      <img src="{{asset('gallery/'.$personalView->personal_image)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$personalView->first_name}} {{$personalView->middle_name}} {{$personalView->last_name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->
      <div class="form-inline mt-1">
        <div class="input-group" data-widget="sidebar-search">
          <input style="height:37px;" class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Maintanance All Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('adminHome')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminProfile')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminContact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminProtfolio')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Protfolio Edit</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_blog')}}" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blogcreate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Blog Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin_blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Blog Post</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_blog')}}" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categoryView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin_blog')}}" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Schedule 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('subscriberShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Schedule</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin_blog')}}" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Common Tags 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tagviewinsert')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tagviewshow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Tags</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>