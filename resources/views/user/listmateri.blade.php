@extends('layout.mainafter')
@section('title', '- List Materi')
@section('mainafter')
<div class="pt-5" style=" background-image: url('../image/bg-home.png'); background-repeat: no-repeat; background-size: cover; background-position-X: bottom; height: 40vh;">
    <div class="container">
        <nav aria-label="breadcrumb">
            </ol>
        </nav>
        <h2 class="text-uppercase text-center font-bold pt-3" style="font-size: 3rem; font-weight: bolder;">
            List Materi
        </h2>
    </div>
</div>
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:7%;">
    <div class="container">
        <div class="row">
            @foreach($data as $item)
                <div class="col text-center mb-2">
                    <div class="card">
                        <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                            <h4>{{$item->judul_materi}}</h4>
                            <div class="card-text">
                                <p>{{ Str::limit($item->description_materi, 35) }}</p>
                            </div>
                            <hr>
                            <div>
                                <a href="{{url('/submateri/'.$item->id)}}" class="btn btn-dark btn-sm">Lihat Materi <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
  @endsection