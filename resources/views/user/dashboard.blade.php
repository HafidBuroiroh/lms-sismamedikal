@extends('layout.main')
@section('title', '- Dashboard')
@section('main')
<div class="container">

    <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/image/pp-dokter.png')}}" class="card-img-top" alt="Profil Picture">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Sismarikum</h5>
                            <p class="card-text">Spesialis Bedah Umum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="mb-4">Profil</h2>
                    <p>Dr. Sismarikum adalah seorang dokter spesialis bedah umum dengan pengalaman lebih dari 15 tahun. Beliau telah menangani berbagai kasus bedah dengan tingkat keberhasilan yang tinggi.</p>
                    <h3 class="mt-5">Sertifikat</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>2019:</strong> Sertifikat Pelatihan Bedah Laparoskopi
                        </li>
                        <li class="list-group-item">
                            <strong>2020:</strong> Sertifikat Manajemen Luka Bakar
                        </li>
                        <li class="list-group-item">
                            <strong>2021:</strong> Sertifikat Bedah Onkologi
                        </li>
                    </ul>
                </div>
            </div>
    
            <div class="row my-5">
                <div class="col-12">
                    <h3>Artikel</h3>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SPM Jantung Terbaru</h5>
                                <p class="card-text">Standar Pelayanan Minimal (SPM) untuk layanan jantung di Rumah Sakit Sehat Selalu bertujuan untuk memastikan bahwa setiap pasien yang membutuhkan perawatan jantung mendapatkan layanan medis yang tepat waktu, efektif, dan berkualitas tinggi.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection