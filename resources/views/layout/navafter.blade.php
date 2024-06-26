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
            <a class="nav-link" aria-current="page" href="/home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/user-dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/kebijakan">Kebijakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/logout">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>