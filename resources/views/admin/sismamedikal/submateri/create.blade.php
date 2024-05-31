@extends('admin.main')

@section('title', 'Sub Materi')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Sub Materi</h1>
    </div>

    <div class="section-body">
      <p class="section-leadx">Sub Materi.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{url('/sub-materi')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 form-group">
                    <p class="my-0 fw-bold">Pilih SOP/SPM/Course<span class="text-danger">*</span></p>
                    <select name="" class="form-select" id="select">
                        <option selected disabled>-- Pilih --</option>
                        <option value="sop">SOP</option>
                        <option value="spm">SPM</option>
                        <option value="course">Course</option>
                    </select>
                </div>
                <div class="mb-3 form-group" id="sop" style="display: none;">
                    <p class="my-0 fw-bold">Pilih SOP<span class="text-danger">*</span></p>
                    <select name="id_sop" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($sop as $item)
                        <option value="{{$item->id}}">{{$item->sop}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 form-group" id="spm" style="display: none;">
                    <p class="my-0 fw-bold">Pilih SPM<span class="text-danger">*</span></p>
                    <select name="id_spm" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($spm as $item)
                        <option value="{{$item->id}}">{{$item->spm}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 form-group" id="course" style="display: none;">
                    <p class="my-0 fw-bold">Pilih Course<span class="text-danger">*</span></p>
                    <select name="id_course" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($course as $item)
                        <option value="{{$item->id}}">{{$item->course}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 form-group" id="form-materi" style="display: none;">
                    <p class="my-0 fw-bold">Judul Materi<span class="text-danger">*</span></p>
                    <input type="text" name="judul_materi" class="form-control">
                </div>
                <div class="mb-3 form-group" id="form-deskripsi" style="display: none;">
                    <p class="my-0 fw-bold">Deskripsi Materi<span class="text-danger">*</span></p>
                    <textarea name="description_materi" class="form-control" col="5"></textarea>
                </div>
                <div class="mb-3 form-group" id="form-link" style="display: none;">
                    <p class="my-0 fw-bold">Link Youtube Materi<span class="text-danger">*</span></p>
                    <input type="text" name="link_youtube" class="form-control">
                </div>
                <div class="mb-3 form-group" id="form-file" style="display: none;">
                    <p class="my-0 fw-bold">File Materi<span class="text-danger">*</span></p>
                    <input type="file" name="materi" class="form-control">
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

<script>
document.getElementById('select').addEventListener('change', function() {
    var value = this.value;
    
    // Hide all form sections
    document.getElementById('sop').style.display = 'none';
    document.getElementById('spm').style.display = 'none';
    document.getElementById('course').style.display = 'none';
    document.getElementById('form-materi').style.display = 'none';
    document.getElementById('form-deskripsi').style.display = 'none';
    document.getElementById('form-link').style.display = 'none';
    document.getElementById('form-file').style.display = 'none';

    // Show the selected section and common form fields
    if (value === 'sop') {
        document.getElementById('sop').style.display = 'block';
    } else if (value === 'spm') {
        document.getElementById('spm').style.display = 'block';
    } else if (value === 'course') {
        document.getElementById('course').style.display = 'block';
    }

    if (value === 'sop' || value === 'spm' || value === 'course') {
        document.getElementById('form-materi').style.display = 'block';
        document.getElementById('form-deskripsi').style.display = 'block';
        document.getElementById('form-link').style.display = 'block';
        document.getElementById('form-file').style.display = 'block';
        document.getElementById('dis').disabled = false;
    }

    
});
</script>
@endsection