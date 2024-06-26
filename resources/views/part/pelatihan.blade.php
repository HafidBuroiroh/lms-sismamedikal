@extends('layout.main')
@section('title', '- SPM/SOP')
@section('main')
<link rel="stylesheet" href="{{asset('css/pelatihan.css')}}">
<div class="container my-5">
    <div class="row">
    <div class="col-12 col-md-4">
            <h2>Filter Pelatihan</h2>
            <form id="filterForm">
                <p>Filter berdasarkan:</p>
                <div class="form-group">
                    <h3>Kategori</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category" value="sop" id="sop">
                        <label class="form-check-label" for="sop">SOP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category" value="spm" id="spm">
                        <label class="form-check-label" for="spm">SPM</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category" value="course" id="course">
                        <label class="form-check-label" for="course">Course</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category" value="materi_umum" id="materi_umum">
                        <label class="form-check-label" for="materi_umum">Materi Umum</label>
                    </div>
                </div>
                <div class="form-group">
                    <h3>Sertifikasi</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="certification" value="skp" id="skp">
                        <label class="form-check-label" for="skp">Bersertifikat (SKP)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="certification" value="non_skp" id="non_skp">
                        <label class="form-check-label" for="non_skp">Tidak Bersertifikat</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Cari</button>
            </form>
        </div>
        <div class="col-12 col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control border border-dark" placeholder="Cari Pelatihan..." aria-label="Cari Pelatihan..." aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">Cari</button>
            </div>
            <div class="row">
                @foreach($data as $item)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img_pelatihan/'.$item->foto)}}" class="card-img-top" alt="...">
                        <span class="badge badge-info category-label bg-warning">{{$item->kategori}}</span>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->judul}}
                            </h5>
                            <p class="card-text">{{Str::limit($item->deskripsi, 35, '...')}}</p>
                            @if($item->sertifikat == 'skp')
                            <p class="text-secondary">Bersertifikat</p>
                            @endif
                            <a href="/login" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection