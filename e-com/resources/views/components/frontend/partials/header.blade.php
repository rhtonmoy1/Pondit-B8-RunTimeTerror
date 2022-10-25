
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <a href="" class="account-link">
              
                
                <span>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <i class="fa fa-user" aria-hidden="true"></i>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </span>
              </a>
              <a href="" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/">
              <span>
                Minics
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('why') }}">Why Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonial') }}">Testimonial</a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->


