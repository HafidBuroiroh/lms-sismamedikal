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
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/sopm">SPM/SOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pelatihan">Pelatihan</a>
          </li>
          <a class="btn btn-daftar fw-semibold fs-6" aria-current="page" href="/register">Daftar</a>
          <a class="btn btn-login fw-semibold fs-6" aria-current="page" href="/login">Login</a>
        </ul>
      </div>
    </div>
  </nav>