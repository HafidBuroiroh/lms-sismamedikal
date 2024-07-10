@extends('layout.mainafter')
@section('title', '- Materi')
@section('mainafter')
<div class="pt-5" style=" background-image: url('./image/bg-home.png'); background-repeat: no-repeat; background-size: cover; background-position-X: bottom; height: 40vh;">
    <div class="container">
        <h2 class="text-uppercase text-center font-bold pt-3" style="font-size: 3rem; font-weight: bolder;">
        {{$materi->judul_materi}}
        </h2>
    </div>
</div>
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:3%;">
    <div class="container">
        <div class="title-page">
            <h3 class="text-center py-3 fw-bold">Video Pembelajaran</h3>
            <div class="frame">
                @php
                    $link_youtube = $materi->link_youtube;
                    $videoId = explode('=', explode('&', parse_url($link_youtube, PHP_URL_QUERY))[0])[1];
                @endphp
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ $videoId }}" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="after-video mt-4">
            <h3>Penjelasan:</h3>
            <p style="text-align: justify;">
            {{$materi->description_materi}}
        </p>
            <a href="#" class="btn btn-primary fw-bold">Download Materi PDF</a>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                       <h4 class="fw-bold">Kuisioner {{$materi->judul_materi}}</h4>
                        <p class="fw-bold text-danger">Pastikan anda telah mempelajari materi dengan benar</p>
                        <hr>
                        <a href="{{url('/kuisioner/'.$materi->id)}}" class="btn btn-warning">Kerjakan Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection