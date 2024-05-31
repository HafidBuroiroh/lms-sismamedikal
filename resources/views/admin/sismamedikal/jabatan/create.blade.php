@extends('admin.main')

@section('title', 'Jabatan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Jabatan</h1>
    </div>

    <div class="section-body">
      <p class="section-leadx">Jabatan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{url('/jabatan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Nama Jabatan<span class="text-danger">*</span></p>
                    <input type="text" name="jabatan" placeholder="Input Jabatan..." class="form-control">
                </div>
                <h5 class="fw-bold mb-0">Pilih Salah Satu atau lebih<span class="text-danger">*</span></h5>
                <div class="form-group">
                    <p class="my-0 fw-bold">Pilih SOP</p>
                    <select name="id_sop" class="form-select">
                      <option selected disabled>Pilih</option>
                        @foreach($sop as $item)
                        <option value="{{$item->id}}">{{$item->sop}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Pilih SPM</p>
                    <select name="id_spm" class="form-select">
                      <option selected disabled>Pilih</option>
                        @foreach($spm as $item)
                        <option value="{{$item->id}}">{{$item->spm}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Pilih Course</p>
                    <select name="id_course" class="form-select">
                      <option selected disabled>Pilih</option>
                        @foreach($course as $item)
                        <option value="{{$item->id}}">{{$item->course}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Pilih Materi Umum</p>
                    <select name="id_mu" class="form-select">
                      <option selected disabled>Pilih</option>
                        @foreach($materi as $item)
                        <option value="{{$item->id}}">{{$item->materi}}</option>
                        @endforeach
                    </select>
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