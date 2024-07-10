@extends('admin.main')

@section('title', 'Kebijakan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Kebijakan</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{ route('kebijakan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Judul Kebijakan<span class="text-danger">*</span></p>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                  <p class="my-0 fw-bold">Deskripsi<span class="text-danger">*</span></p>
                  <textarea name="deskripsi" class="form-control" col="5"></textarea>
                </div>
                <div class="form-group my-3">
                  <p class="my-0 fw-bold">File<span class="text-danger">*</span></p>
                  <input type="file" name="file" class="form-control">
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