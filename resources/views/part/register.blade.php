<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
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
              <img class="Umkm w-50" src="{{ asset('image/logo-sismamedikal.png') }}" width="500" alt="Umkm" />
              <h5 class="cb text-primary my-3">USER REGISTER</h5>
            </div>
    
            <form action="{{url('/postregister')}}" method="POST" class="container fw-bold">
              @csrf
              <div class="row pt-2">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-floating mb-4 shadow rounded-pill">
                        <input type="nama" class="form-control rounded-pill px-4" name="name" required value="{{ session('name') }}"
                          data-error-required="Silahkan isi kolom ini!" />

                            <label for="floatingInput" class="ms-4">
                                <i class="fa fa-solid fa-user me-3"></i> Nama</label>
                        </div>
                        <div class="form-floating mb-4 shadow rounded-pill">
                          <input type="email" class="form-control rounded-pill px-4" name="email" required value="{{ session('email') }}"
                          data-error-required="Silahkan isi kolom ini!"
                          data-error-invalid="sertakan @ di alamat email anda"
                          data-error-end-with-at="@: Lengkapi alamat email anda dengan lengkap" />

                            <label for="floatingInput" class="ms-4">
                                <i class="fa fa-envelope me-3"></i> Email</label>
                        </div>
                        <div class="form-floating mb-4 shadow rounded-pill">
                            <input type="text" class="form-control rounded-pill px-4" name="no_telp" required value="{{ session('no_telp') }}"
                                />

                            <label for="floatingInput" class="ms-4"><i class="fa fa-phone me-3"></i> No. Telp (WhatsApp Aktif)</label>
                        </div>
                        <div class="form-floating mb-4 shadow rounded-pill">
                        <select
                            class="form-select rounded-pill shadow px-4"
                            id="jabatan"
                            name="id_jabatan"
                            required
                            aria-label="Floating label select example"
                            oninvalid="this.setCustomValidity(' ');
                            $.toast({
                                heading: 'Mohon Lakukan',
                                text: 'Mohon Lengkapi Kolom Jabatan',
                                icon: 'error',
                                hideAfter: false,
                                position: 'top-right',
                                loaderBg: '#9EC600'
                            });"
                            onchange="setCustomValidity('')"
                        >
                            <option selected disabled>-- Pilih --</option>
                            @foreach($jabatan as $item)
                            <option value="{{$item->id}}">{{$item->jabatan}}</option>
                            @endforeach
                        </select>
                        <label for="jenisKelamin" class="ms-4"
                            ><i
                            class="fa-solid fa-up-right-and-down-left-from-center me-2"
                            ></i
                            >Pilih Jabatan <span style="color: red; font-weight:bold">*</span></label>
                        </div> 
                        <div class="form-floating mb-4 shadow rounded-pill">
                        <select
                            class="form-select rounded-pill shadow px-4"
                            id="jk"
                            name="jenis_kelamin"
                            required
                            aria-label="Floating label select example"
                            oninvalid="this.setCustomValidity(' ');
                            $.toast({
                                heading: 'Mohon Lakukan',
                                text: 'Mohon Lengkapi Kolom Jabatan',
                                icon: 'error',
                                hideAfter: false,
                                position: 'top-right',
                                loaderBg: '#9EC600'
                            });"
                            onchange="setCustomValidity('')"
                        >
                            <option selected disabled>-- Pilih --</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                        <label for="jenisKelamin" class="ms-4"
                            ><i
                            class="fa-solid fa-up-right-and-down-left-from-center me-2"
                            ></i
                            >Jenis Kelamin <span style="color: red; font-weight:bold">*</span></label>
                        </div>
                        <div class="row">
                            <div class="col form-floating mb-4">
                                <input type="password" class="form-control rounded-pill px-4" name="password" required
                                    oninput="validatePassword(this)"
                                    oninvalid="this.setCustomValidity('Password harus terdiri dari minimal 8 karakter dan menyertai huruf dan angka')" />

                                <label for="floatingInput" class="ms-4"><i class="fa fa-key me-3"></i> Password</label>
                            </div>
                            <div class="col form-floating mb-4 ">
                                <input type="password" class="form-control rounded-pill px-4" name="konfirmasi_password"
                                    required oninput="validateConfirmPassword(this)"
                                    oninvalid="this.setCustomValidity('Konfirmasi password harus sama dengan password')" />
                                <label for="floatingInput" class="ms-4"><i class="fa fa-key me-3"></i> Konfirmasi
                                    Password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-submit-login d-flex justify-content-center">
                <button type="submit" class="button-submit text-white">Daftar
                </button>
              </div>
            </form>
              <p class="text-center">Sudah Punya Akun? <a href="/login">Login</a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

