@extends('layout.main')
@section('title', '- SPM/SOP')
@section('main')
<div class="container my-5">
    <div class="row">
    <div class="col-12 col-md-4">
            <h2>Filter Pelatihan</h2>
            <form action="{{ url('/pelatihan') }}" method="GET">
                <div class="form-group mb-3">
                    <input type="text" class="form-control border border-dark" name="search" placeholder="Cari Pelatihan..." value="{{ request('search') }}">
                </div>
                <div class="form-group mb-3">
                    <h3>Kategori</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category[]" value="sop" id="sop" {{ in_array('sop', (array) request('category')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="sop">SOP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category[]" value="spm" id="spm" {{ in_array('spm', (array) request('category')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="spm">SPM</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category[]" value="course" id="course" {{ in_array('course', (array) request('category')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="course">Course</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="category[]" value="materi_umum" id="materi_umum" {{ in_array('materi_umum', (array) request('category')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="materi_umum">Materi Umum</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <h3>Sertifikasi</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="certification" value="skp" id="skp" {{ request('certification') == 'skp' ? 'checked' : '' }}>
                        <label class="form-check-label" for="skp">Bersertifikat (SKP)</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <h3>Biaya</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="biaya" value="free" {{ request('biaya') == 'free' ? 'checked' : '' }}>
                        <label class="form-check-label">Free</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-1">Cari</button>
            </form>
        </div>
        <div class="col-12 col-md-8">
            <div class="row g-3 mb-3">
                @foreach($data as $item)
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <div class="p-2" style="width: 100%; height: 200px; background: url('{{ asset('img_pelatihan/'.$item->foto) }}') center/cover no-repeat;">
                            <span class="badge bg-warning">{{$item->kategori}}</span>
                            @if($item->biaya == 0)
                                <span class="badge bg-success">Free</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="card-title fw-bold">{{$item->judul}}</div>
                            <div class="card-text lh-1 small text-muted mb-3">{{Str::limit($item->deskripsi, 50, '...')}}</div>
                            @if($item->sertifikat == 'skp')
                                <div class="alert alert-primary">Bersertifikat (SKP)</div>
                            @endif
                            @if(Auth::user())
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Detail</button>
                            @else
                                <a href="/login" class="btn btn-primary w-100">Detail</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $data->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

@foreach($data as $item)
<div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Pelatihan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3"><img src="{{ asset('img_pelatihan/'.$item->foto) }}" class="img-fluid" alt=""></div>
            <div class="fw-bold">Judul</div>
            <div class="mb-3">{{ $item->judul }}</div>
            <div class="fw-bold">Deskripsi</div>
            <div class="mb-3">{{ $item->deskripsi }}</div>
            <div class="fw-bold">Instruktur</div>
            <div class="mb-3">{{ $item->instruktur }}</div>
            <div class="fw-bold">Tanggal</div>
            <div class="mb-3">{{ $item->tanggal }}</div>
            <div class="fw-bold">Biaya</div>
            <div class="mb-3">{{ 'Rp. '.strrev(implode('.', str_split(strrev(strval($item->biaya)), 3))) }}</div>
            <div class="fw-bold">Kategori</div>
            <div class="mb-3">{{ $item->kategori }}</div>
            <div class="fw-bold">Sertifikat</div>
            <div class="mb-3">
                @if($item->sertifikat == 'skp')
                    Bersertifikat (SKP)
                @else
                    Tidak Bersertifikat
                @endif
            </div>
            <a href="{{ $item->link_lms_kemenkes }}" target="_blank" class="btn btn-primary w-100">Ikut Pelatihan</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection