@extends('layout.mainafter')
@section('title', '- Home')
@section('mainafter')
<div class="pt-5" style=" background-image: url('./image/bg-home.png'); background-repeat: no-repeat; background-size: cover; background-position-X: bottom; height: 40vh;">
    <div class="container">
        <nav aria-label="breadcrumb">
            </ol>
        </nav>
        <h2 class="text-uppercase text-center font-bold pt-3" style="font-size: 3rem; font-weight: bolder;">
            Welcome User
        </h2>
    </div>
</div>
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:7%;">
    <div class="container">
        <div class="row">
            @if(Auth::user()->id_jabatan == 1)
            <div class="col text-center mb-2">
               <div class="card">
                    <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                        <h4>SOP Poli Jantung</h4>
                        <div class="card-text">
                            <p>Standar Operasional Prosedur (SOP) Poli Jantung</p>
                        </div>
                        <hr>
                        <div>
                            <a href="/materi" class="btn btn-dark btn-sm">Lihat Materi <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col text-center mb-2">
               <div class="card">
                    <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                        <h4>SPM Poli Jantung</h4>
                        <div class="card-text">
                            <p>Standar Pelayanan Minimal (SPM) Poli Jantung</p>
                        </div>
                        <hr>
                        <div>
                            <a href="/materi" class="btn btn-dark btn-sm">Lihat Materi <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
               </div>
            </div>

            @elseif(Auth::user()->id_jabatan == 2)
            <div class="col text-center mb-2">
               <div class="card">
                    <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                        <h4>SOP Poli Paru</h4>
                        <div class="card-text">
                            <p>Standar Operasional Prosedur (SOP) Poli Paru Paru</p>
                        </div>
                        <hr>
                        <div>
                            <a href="/materi" class="btn btn-dark btn-sm">Lihat Materi <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col text-center mb-2">
               <div class="card">
                    <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                        <h4>SPM Poli Paru Paru</h4>
                        <div class="card-text">
                            <p>Standar Pelayanan Minimal (SPM) Poli Paru Paru</p>
                        </div>
                        <hr>
                        <div>
                            <a href="/materi" class="btn btn-dark btn-sm">Lihat Materi <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
               </div>
            </div>
            @endif
        </div>
    </div>
</div>
  @endsection