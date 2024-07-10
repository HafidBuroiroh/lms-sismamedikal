@extends('layout.main')
@section('title', '- Materi')
@section('main')
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
            <p style="text-align: justify;">Materi tersebut menayangkan tentang Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis labore amet perferendis at quibusdam quasi eum laborum blanditiis nulla rerum porro necessitatibus vel non alias perspiciatis, hic nam illum. Temporibus, porro suscipit! Architecto porro ratione libero laboriosam quisquam. Maxime eius porro, quis saepe accusamus qui exercitationem vitae molestiae, rem debitis doloribus aspernatur reiciendis placeat molestias consectetur impedit, dolorem ipsum neque esse nostrum odio? Fuga esse sequi voluptates. Esse aliquid at temporibus cupiditate expedita, distinctio atque officia aut praesentium quas consectetur libero dignissimos ducimus eum et. Dolor laudantium fuga possimus blanditiis eveniet culpa repellat quidem aut asperiores veniam! Quia, laudantium explicabo.</p>
            <a href="#" class="btn btn-primary fw-bold">Download Materi PDF</a>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold">Kuisioner Poli Jantung</h4>
                        <p class="fw-bold text-danger">Nilai Anda: <span class="text-primary fw-bold fs-2">80</span></p>
                        <hr>
                        <p>Anda telah mengerjakan kuisioner</p>
                        <hr>
                        <div class="benar-salah">
                            <h4 class="fw-bold">Hasil Jawaban Anda</h4>
                            <ul>
                                <li class="text-success"> a. Infark miokard</li>
                                <li class="text-success">c. lemak</li>
                                <li class="text-danger">c. staphylokokus <span class="text-success">(e. streptokokus)</span></li>
                                <li class="text-success">a. Simvastatin</li>
                                <li class="text-success">b. nitrogliserin </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold">Reminder</h4>
                        <p class="fw-bold text-danger">Kerjakan lagi kuisioner pada bulan <span class="text-primary fw-bold fs-2">Agustus</span></p>
                        <hr>
                        <p>Anda Akan Diingatkan Melewati Whatsapp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection