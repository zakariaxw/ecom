<nav class="sidebar sidebar-offcanvas " id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle" src="{{ asset('admin/assets/images/faces/face2.jpg') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
                  <span>Administrator</span>
                </div>
              </div>
             
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/redirect') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-shopping"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}"><i class="mdi mdi-cart-plus"></i> Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}"><i class="mdi mdi-eye"></i> View Products</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('order') }}">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Order</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('userlist') }}">
              <span class="menu-icon">
                <i class="mdi mdi-account icon-item"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          
        </ul>
      </nav>