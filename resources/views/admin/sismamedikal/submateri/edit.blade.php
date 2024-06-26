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
            <form action="{{url('/sub-materi', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 form-group">
                    <p class="my-0 fw-bold">Pilih SOP/SPM/Course<span class="text-danger">*</span></p>
                    <select name="" class="form-select" id="select">
                        <option selected disabled>-- Pilih --</option>
                        <option value="sop" @if($data->id_sop)selected @endif>SOP</option>
                        <option value="spm"  @if($data->id_spm)selected @endif>SPM</option>
                        <option value="course"  @if($data->id_course)selected @endif>Course</option>
                        <option value="mu"  @if($data->id_mu)selected @endif>Materi Umum</option>
                    </select>
                </div>
                @if($data->id_sop)
                <div class="mb-3 form-group" id="sop">
                    <p class="my-0 fw-bold">Pilih SOP<span class="text-danger">*</span></p>
                    <select name="id_sop" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($sop as $item)
                        <option value="{{$item->id}}" @if($data->id_sop == $item->id) selected @endif>{{$item->sop}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3 form-group" id="sop"  style="display: none;">
                    <p class="my-0 fw-bold">Pilih SOP<span class="text-danger">*</span></p>
                    <select name="id_sop" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($sop as $item)
                        <option value="{{$item->id}}">{{$item->sop}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                @if($data->id_spm)
                <div class="mb-3 form-group" id="spm">
                    <p class="my-0 fw-bold">Pilih SPM<span class="text-danger">*</span></p>
                    <select name="id_spm" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($spm as $item)
                        <option value="{{$item->id}}"  @if($data->id_spm == $item->id) selected @endif>{{$item->spm}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3 form-group" id="spm" style="display: none;">
                    <p class="my-0 fw-bold">Pilih SPM<span class="text-danger">*</span></p>
                    <select name="id_spm" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($spm as $item)
                        <option value="{{$item->id}}">{{$item->spm}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                @if($data->id_course)
                <div class="mb-3 form-group" id="course">
                    <p class="my-0 fw-bold">Pilih Course<span class="text-danger">*</span></p>
                    <select name="id_course" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($course as $item)
                        <option value="{{$item->id}}"  @if($data->id_course == $item->id) selected @endif>{{$item->course}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3 form-group" id="course" style="display: none;">
                    <p class="my-0 fw-bold">Pilih Course<span class="text-danger">*</span></p>
                    <select name="id_course" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($course as $item)
                        <option value="{{$item->id}}">{{$item->course}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                @if($data->id_mu)
                <div class="mb-3 form-group" id="materi">
                    <p class="my-0 fw-bold">Pilih Materi Umum<span class="text-danger">*</span></p>
                    <select name="id_mu" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($materi as $item)
                        <option value="{{$item->id}}"  @if($data->id_mu == $item->id) selected @endif>{{$item->materi}}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3 form-group" id="materi" style="display: none;">
                    <p class="my-0 fw-bold">Pilih Materi Umum<span class="text-danger">*</span></p>
                    <select name="id_mu" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($materi as $item)
                        <option value="{{$item->id}}">{{$item->materi}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="mb-3 form-group" id="form-materi">
                    <p class="my-0 fw-bold">Judul Materi<span class="text-danger">*</span></p>
                    <input type="text" value="{{$data->judul_materi}}" name="judul_materi" class="form-control">
                </div>
                <div class="mb-3 form-group" id="form-deskripsi">
                    <p class="my-0 fw-bold">Deskripsi Materi<span class="text-danger">*</span></p>
                    <textarea name="description_materi" class="form-control" rows="8">{{$data->description_materi}}</textarea>
                </div>
                <div class="mb-3 form-group" id="form-link">
                    <p class="my-0 fw-bold">Link Youtube Materi<span class="text-danger">*</span></p>
                    <input type="text" value="{{$data->link_youtube}}" name="link_youtube" class="form-control">
                </div>
                <div class="mb-3 form-group" id="form-file">
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
    document.getElementById('materi').style.display = 'none';
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
    }else if (value === 'mu') {
        document.getElementById('materi').style.display = 'block';
    }

    if (value === 'sop' || value === 'spm' || value === 'course'|| value === 'mu') {
        document.getElementById('form-materi').style.display = 'block';
        document.getElementById('form-deskripsi').style.display = 'block';
        document.getElementById('form-link').style.display = 'block';
        document.getElementById('form-file').style.display = 'block';
        document.getElementById('dis').disabled = false;
    }

    
});
</script>
@endsection