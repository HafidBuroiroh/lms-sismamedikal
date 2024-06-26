@extends('admin.main')

@section('title', 'Pelatihan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Pelatihan</h1>
    </div>

    <div class="section-body">
      <p class="section-leadx">Pelatihan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{url('/list-pelatihan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Judul Pelatihan<span class="text-danger">*</span></p>
                    <input type="text" name="judul" placeholder="Input judul..." class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Instruktur Pelatihan<span class="text-danger">*</span></p>
                    <input type="text" name="instruktur" placeholder="Input instruktur..." class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Tanggal Pelatihan<span class="text-danger">*</span></p>
                    <input type="date" name="tanggal" placeholder="Input tanggal..." class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Deskripsi Pelatihan<span class="text-danger">*</span></p>
                    <textarea name="deskripsi" class="form-control" col="5"></textarea>
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Biaya Pelatihan<span class="text-danger">*</span></p>
                    <input type="number" name="biaya" placeholder="Input biaya..." class="form-control">
                </div>
                <div class="form-group my-3">
                    <p class="my-0 fw-bold">Image Pelatihan<span class="text-danger">*</span></p>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="my-3 form-group">
                    <p class="my-0 fw-bold">Kategori<span class="text-danger">*</span></p>
                    <select name="kategori" class="form-select" id="kategori">
                        <option selected disabled>-- Pilih --</option>
                        <option value="sop">SOP</option>
                        <option value="spm">SPM</option>
                        <option value="course">Course</option>
                        <option value="materi_umum">Materi Umum</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <p class="my-0 fw-bold">Sertifikasi<span class="text-danger">*</span></p>
                    <select name="sertifikat" class="form-select" id="sertifikasi">
                        <option selected disabled>-- Pilih --</option>
                        <option value="skp">Bersertifikat (SKP)</option>
                        <option value="non_skp">Tidak Bersertifikat</option>
                    </select>
                </div>
                <div class="form-group my-3" id="link" style="display: none;">
                    <p class="my-0 fw-bold">Link Pelatihan Kemenkes<span class="text-danger">*</span></p>
                    <input type="url" name="link_lms_kemenkes" placeholder="Input Link..." class="form-control">
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
    document.getElementById('sertifikasi').addEventListener('change', function() {
        var value = this.value;
        if (value === 'skp'){
            document.getElementById('link').style.display = 'block';
        }else{
            document.getElementById('link').style.display = 'none';
        }
    });
</script>
@endsection