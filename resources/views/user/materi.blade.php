@extends('layout.mainafter')
@section('title', '- Materi')
@section('mainafter')
<div class="pt-5" style=" background-image: url('./image/bg-home.png'); background-repeat: no-repeat; background-size: cover; background-position-X: bottom; height: 40vh;">
    <div class="container">
        <nav aria-label="breadcrumb">
            </ol>
        </nav>
        <h2 class="text-uppercase text-center font-bold pt-3" style="font-size: 3rem; font-weight: bolder;">
            Materi Poli Jantung
        </h2>
    </div>
</div>
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:3%;">
    <div class="container">
        <div class="title-page">
            <h3 class="text-center py-3 fw-bold">Video Pembelajaran</h3>
            <div class="frame">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/Ou5AvokfGDE?si=nYXH2hO9XPsMQmR5" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="after-video mt-4">
            <h3>Penjelasan:</h3>
            <p style="text-align: justify;">Materi tersebut menayangkan tentang Aritmia. Aritmia adalah istilah medis yang merujuk pada gangguan irama jantung, di mana detak jantung menjadi tidak teratur, terlalu cepat (takikardia), atau terlalu lambat (bradikardia). Normalnya, detak jantung manusia berada dalam rentang 60 hingga 100 denyut per menit saat istirahat. Namun, pada orang dengan aritmia, irama jantung dapat bervariasi di luar rentang ini.</p>
            <a href="#" class="btn btn-primary fw-bold">Download Materi PDF</a>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold">Kuisioner Poli Jantung</h4>
                        <p class="fw-bold text-danger">Pastikan anda telah mempelajari materi dengan benar</p>
                        <hr>
                        <a href="/kuisioner" class="btn btn-warning">Kerjakan Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection