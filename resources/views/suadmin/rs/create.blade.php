@extends('admin.main')

@section('title', 'Rumah Sakit')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Rumah Sakit</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{ route('superadmin.rs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Nama Rumah Sakit<span class="text-danger">*</span></p>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Email<span class="text-danger">*</span></p>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Password</p>
                    <input type="password" name="password" class="form-control">
                    <div class="text-danger">jika kosong akan diset default password *12345678</div>
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Logo<span class="text-danger">*</span></p>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Logo Polos</p>
                    <input type="file" name="logo_polos" class="form-control">
                </div>
                <div class="form-group">
                  <p class="my-0 fw-bold">Deskripsi Singkat<span class="text-danger">*</span></p>
                  <textarea name="deskripsi_singkat" class="form-control" col="5"></textarea>
                </div>
                <div class="form-group">
                  <p class="my-0 fw-bold">Tentang Rumah Sakit<span class="text-danger">*</span></p>
                  <textarea name="tentang_rs" class="form-control" col="5"></textarea>
                </div>
                <div class="form-group my-3">
                  <p class="my-0 fw-bold">Tone Warna<span class="text-danger">*</span></p>
                  <input type="color" name="tone_warna" class="form-control">
                </div>
                <div class="d-flex justify-content-end gap-1 mt-5 mb-3">
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                    <a href="{{url()->previous()}}" class="btn btn-warning">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</div>
@endsection