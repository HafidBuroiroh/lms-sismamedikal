@extends('layout.mainafter')
@section('title', '- Materi')
@section('mainafter')
<div class="pt-5" style=" background-image: url('./image/bg-home.png'); background-repeat: no-repeat; background-size: cover; background-position-X: bottom; height: 40vh;">
    <div class="container">
        @if(Session::get('success'))
            <div class="alert alert-important alert-primary" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
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
            <h3>Penjelasan</h3>
            <p style="text-align: justify;">
            {{$materi->description_materi}}
        </p>
            <a href="#" class="btn btn-primary fw-bold">Download Materi PDF</a>
        </div>

        @php
            $shouldShowQuiz = true;
            $nextQuizDate = null;

            if ($materi->results->isNotEmpty()) {
                $latestResult = $materi->results->sortByDesc('tanggal_pengerjaan')->first();
                $dateDiff = \Carbon\Carbon::now()->diffInMonths($latestResult->tanggal_pengerjaan);
                if ($dateDiff < 3) {
                    $shouldShowQuiz = false;
                    $nextQuizDate = \Carbon\Carbon::parse($latestResult->tanggal_pengerjaan)->addMonths(3)->format('d F Y');
                }
            }
        @endphp

        <h3 class="mt-5">Kuisioner</h3>
        @if($shouldShowQuiz)
        <div class="mt-3">
            <div class="alert alert-important alert-danger" role="alert">Sebelum mengerjakan kuisioner pastikan anda telah mempelajari materi dengan benar. Kesempatan pengerjaan hanya 1 kali percobaan. Anda dapat mengerjakan kuisioner lagi dalam 3 bulan.</div>
            <a href="{{ route('kusioner.pertanyaan', $materi->id) }}" class="btn btn-primary fw-bold">Kerjakan Kuisioner</a>
        </div>
        @else
        <div class="mt-3">
            <div class="alert alert-important alert-danger" role="alert">Anda dapat mengerjakan kuisioner kembali pada <span class="fw-bold">{{ $nextQuizDate }}</span></div>
        </div>
        @endif

        @if($materi->results->isNotEmpty())
            <h3 class="mt-5">History Pengerjaan Kuisioner</h3>
            <div class="row mt-3">
                @foreach ($materi->results as $result)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="fw-bold">Percobaan {{ $loop->iteration }}</h4>
                                <hr>
                                <p>Anda telah mengerjakan kuisioner pada tanggal {{ $result->tanggal_pengerjaan }}</p>
                                <hr>
                                <div class="">
                                    <h5 class="fw-bold">Hasil Jawaban Anda</h5>
                                    <ul>
                                        @foreach ($result->jawabans as $jawaban)
                                            <li class="{{ $jawaban->jawaban == $jawaban->pertanyaan->true_option ? 'text-success' : 'text-danger' }}">
                                                {{ $jawaban->jawaban }}
                                                @if ($jawaban->jawaban != $jawaban->pertanyaan->true_option)
                                                    <span class="text-success">({{ $jawaban->pertanyaan->true_option }})</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <hr>
                                <p class="fw-bold text-danger">Nilai Anda: <span class="text-primary fw-bold fs-2">{{ $result->skor }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        @endif
    </div>
</div>
  @endsection