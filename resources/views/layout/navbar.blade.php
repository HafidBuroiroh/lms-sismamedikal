<link rel="stylesheet" href="{{asset('css/nav.css')}}">
<nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{url('/')}}/image/logo-sismamedikal.png" alt="" width="100%" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-2 gap-md-3 fw-semibold">
          @if(Auth::user())
            <li class="nav-item">
              <a class="nav-link {{ Route::is('home') ? 'fw-bold text-primary' : '' }}" aria-current="page" href="/home">Beranda</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'fw-bold text-primary' : '' }}" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('sopm') ? 'fw-bold text-primary' : '' }}" aria-current="page" href="/sopm">SPM/SOP</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pelatihan') ? 'fw-bold text-primary' : '' }}" aria-current="page" href="/pelatihan">Pelatihan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kebijakan') ? 'fw-bold text-primary' : '' }}" aria-current="page" href="/kebijakan">Kebijakan</a>
          </li>
          @if(Auth::user())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->email }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/user-dashboard">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          @else
            <a class="btn btn-daftar fw-semibold fs-6" aria-current="page" href="/register">Daftar</a>
            <a class="btn btn-login fw-semibold fs-6" aria-current="page" href="/login">Login</a>
          @endif
        </ul>
      </div>
    </div>
  </nav>