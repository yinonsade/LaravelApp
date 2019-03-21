<!-- Preloader -->
<section id="preloader">
  <div class="loader" id="loader">
    <div class="loader-img"></div>
  </div>
</section>
<!-- End Preload er -->
<nav id="navigation" class="header-nav first">
  <div class="container">
    <div class="logo-headr row d-flex flex-md-row align-items-center">
      <div class="logo  mr-auto">
        <!--logo-->
        <a onclick="openNav()" id="showHide" class="logoz">
              <img class="logo-dark" src="{{asset('images/e22_logo_w.jpg')}}" alt="logo" />
              <img class="logo-light" src="{{asset('images/e22_logo_b.jpg')}}" alt="logo" />
            </a>
      </div>
      <!--sidenav-->

      <div id="sideNavigation" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="hideShow">&times;</a>
        <p class="nav-menu-item">
          <a href="{{ url('home') }}">Home</a>
        </p>
        @foreach ($menu as $item)
        <a href="{{ url($item['url']) }}">
          <li class="nav-menu-item">
            {{ $item['link'] }}
          </li>
        </a>
        @endforeach
        <p class="nav-menu-item mt-5">
          <a href="{{ url('/shop') }}">Shop</a>
        </p>
        @foreach ($categories as $category)
        <a href={{ url( 'shop/' . $category[ 'curl']) }}>
          <li>{{$category['ctitle'] }}</li>
        </a> @endforeach
        <a href={{ url( 'shop/all-products' ) }}>
          <li>All products</li>
        </a>
        <div class="mt-5">
          @if (! Session::has('user_id'))
          <p class=" log-custom"><a href="{{ url('user/signin' ) }}">Signin</a></p>
          <p class=" log-custom"><a href="{{ url('user/signup') }}">Signup</a></p>
          @else
          <p class=" log-custom"><a href="{{ url('user/logout' ) }}">Log out</a></p>
          <p class=" log-custom"><a href="{{ url('user/profile') }}">{{ Session::get('user_name')}}</a></p>
          @endif
        </div>
      </div>


      <div class="nav-menu ml-auto">
        <ul class="">
          <li class="nav-menu-item">
            <a class="mySize" href="{{ url('home') }}">Home</a>
          </li>

          @foreach ($menu as $item)
          <li class="nav-menu-item">
            <a class="mySize" href="{{ url($item['url']) }}">{{ $item['link'] }}</a>
          </li>
          @endforeach

          <li class="nav-menu-item">
            <a class="mySize" href="#">Shop</a>
            <div class="nav-dropdown col2-dropdown left">
              <div class="row text-center">
                <div class="col-lg-6">
                  <ul>
                    <li><a href="{{ url('shop' ) }}">Shop by categories</a></li>

                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><a href="{{ url('shop/all-products') }}">See all</a></li>

                  </ul>
                </div>


                <li class="nav-menu-item">
                  @if (! Session::has('user_id'))
                  <a href="#" class="mySize">Register</a>
                  <div class="nav-dropdown col2-dropdown left">
                    <div class="row text-center">
                      <div class="col-lg-6">
                        <ul>
                          <li><a href="{{ url('user/signin' ) }}">Signin</a></li>

                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul>
                          <li><a href="{{ url('user/signup') }}">Signup</a></li>

                        </ul>
                      </div>

                    </div>
                  </div>
                  @else
                  <a href="#" class="mySize">Your Account</a>
                  <div class="nav-dropdown col2-dropdown left">
                    <div class="row text-center">
                      <div class="col-lg-6">
                        <ul>
                          <li><a href="{{ url('user/logout' ) }}">Log out</a></li>
                        </ul>
                      </div>

                      @if( Session::has('is_admin'))
                      <div class="col-lg-6">
                        <ul>
                          <li><a href="{{ url('cms/dashboard') }}">Admin Panel</a></li>

                        </ul>
                      </div>
                      @endif

                      <div class="col-lg-6">
                        <ul>
                          <li><a href="{{ url('user/profile') }}">{{ Session::get('user_name')}}</a></li>

                        </ul>
                      </div>

                    </div>
                  </div>
                  @endif
                </li>
        </ul>
        </div>
        <div class="nav-icons">
          <div class="nav-icon-item d-lg-none">
            <span class="nav-icon-trigger menu-mobile-btn align-middle"><i class="ion"></i></span>
          </div>
          <a href="{{url('shop/checkout')}}">
            <div class="nav-icon-item total-cart">
              <span class="nav-icon-trigger sidebar-menu_btn align-middle"> 
                <i class="fas fa-shopping-bag"><span class="text-danger">
                    @if( ! Cart::isEmpty() )
                    + {{ Cart::getTotalQuantity() }}
                    @endif
                    <span></i></span>
            </div>
          </a>

          <a target="_blank" href="https://www.instagram.com/e218studio/">
            <div class="nav-icon-item">
              <span class="nav-icon-trigger sidebar-menu_btn align-middle"> 
                <i class="fab fa-instagram"></i></span>
            </div>
          </a>



        </div>
        </div>
      </div>
</nav>