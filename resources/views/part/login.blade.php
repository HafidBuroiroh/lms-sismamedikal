<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
<link rel="stylesheet" href="{{asset('css/login.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  @include('sweetalert::alert')
  <div class="parent-login">
      <div class="sub-parent-login">
        <div class="row justify-content-center h-100">
          <div class="col-sm-8 col-xxl-10 my-auto">
            <div class="title text-center">
              <img class="Umkm w-50" src="{{ asset('image/logo-sismamedikal.png') }}" alt="Umkm" />
              <h5 class="cb text-primary my-5 fw4">LOGIN</h5>
            </div>
    
            <form action="{{route('postlogin')}}" method="post" class="container fw-bold">
              @csrf
              <div class="form-group input-group-lg mt-3">
                <label><p>Email <span class="errmsg text-red">*</span></p></label>
                <input name="email" value="{{ old('email') }}" class="form-control my-3 form-login" size="lg">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group input-group-lg mt-4">
                <label><p>Password <span class="errmsg text-red">*</span></p></label>
                <input type="password" name="password" class="form-control my-3 form-login" size="lg">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="button-submit-login d-flex justify-content-center">
                <button type="submit" class="button-submit text-white">Login
                </button>
              </div>
            </form>
              <p class="text-center mt-4 fw-bold">Belum Punya Akun? <a href="/register">Daftar</a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

