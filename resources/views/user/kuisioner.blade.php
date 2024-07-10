@extends('layout.main')
@section('title', '- Kuisioner')
@section('main')
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:3%;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Petunjuk: Pilih Jawaban Yang Benar</h4>
                <form action="{{ route('kusioner.pertanyaan.store', $materi->id) }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="soal my-4">
                                @foreach($pertanyaans as $pertanyaan)
                                <ul style="list-style: none">
                                    <li class="fw-bold">{{$loop->iteration}}. {{$pertanyaan->pertanyaan}}</li>
                                    <br>
                                    <ul style="list-style: none">
                                        <li><input type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="{{ $pertanyaan->option_1 }}"> a. {{ $pertanyaan->option_1 }}</li>
                                        <li><input type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="{{ $pertanyaan->option_2 }}"> b. {{ $pertanyaan->option_2 }}</li>
                                        <li><input type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="{{ $pertanyaan->option_3 }}"> c. {{ $pertanyaan->option_3 }}</li>
                                        <li><input type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="{{ $pertanyaan->option_4 }}"> d. {{ $pertanyaan->option_4 }}</li>
                                        <li><input type="radio" name="jawaban[{{ $pertanyaan->id }}]" value="{{ $pertanyaan->option_5 }}"> e. {{ $pertanyaan->option_5 }}</li>
                                    </ul>  
                                </ul>
                                <br>
                                @endforeach
                                <div class="d-flex justify-content-end me-4 gap-2">
                                    <button type="submit" class="btn btn-primary">Selesai</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection