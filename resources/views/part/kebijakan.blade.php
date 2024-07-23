@extends('layout.main')
@section('title', '- Kebijakan')
@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2>Filter Kebijakan</h2>
            <form action="{{ url('/kebijakan') }}" method="GET">
                <div class="form-group mb-3 mt-3">
                    <input type="text" class="form-control border border-dark" name="search" placeholder="Cari Kebijakan..." value="{{ request('search') }}">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-1">Cari</button>
            </form>
        </div>
        <div class="col-12 col-md-8">
            @foreach($kebijakans as $kebijakan)
            <div class="detail mb-5">
                <h4 class="fw-bold">{{ $kebijakan->judul }}</h4>
                <p>{{ $kebijakan->deskripsi }}</p>
                <a href="{{ $kebijakan->link }}" target="_target" class="btn btn-primary">Detail</a>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $kebijakans->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection