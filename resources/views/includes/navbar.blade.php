<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="/images/logo.svg" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Reward</a>
          </li>
          @guest
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('login') }}" class="btn btn-success nav-link px-4 text-white">Sign In</a>
            </li>
          @endguest
        </ul>
        @auth
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" id="navbardropdown" role="button" data-toggle="dropdown">
                <img src="images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                Hi, {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu">
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dashboard-setting-account') }}" class="dropdown-item">Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-3"></a>
              <img src="images/icon-cart-empty.svg" alt="" />
            </li>
          </ul>

          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Hi, Reno
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">
                Cart
              </a>
            </li>
          </ul>
        @endauth
      </div>
    </div>
  </nav>