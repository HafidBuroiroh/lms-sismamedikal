@extends('layout.mainafter')
@section('title', '- Home')
@section('mainafter')
<div class="modal fade" id="listsop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">SOP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tbody>
                @foreach($jabatans as $jabatan)
                    @foreach($jabatan->sops as $sop)
                        <tr>
                            <td>{{ $sop->sop ?? '-' }}</td>
                            <td style="width: 10%;">
                                <a href="{{url('/materi-sop/'.$sop->id)}}" class="btn btn-primary btn-sm-lg text-white"><i class="fa fa-arrow-right"></i></a>
                            </td>
                         </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="listcourse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tbody>
                @foreach($jabatans as $jabatan)
                    @foreach($jabatan->courses as $course)
                        <tr>
                            <td>{{ $course->course ?? '-' }}</td>
                            <td style="width: 10%;">
                                <a href="{{url('/materi-course/'.$course->id)}}" class="btn btn-primary btn-sm-lg text-white"><i class="fa fa-arrow-right"></i></a>
                            </td>
                         </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="listMateriUmum" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Materi Umum</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tbody>
                @foreach($jabatans as $jabatan)
                    @foreach($jabatan->materiUmums as $materiUmum)
                        <tr>
                            <td>{{ $materiUmum->materi ?? '-' }}</td>
                            <td style="width: 10%;">
                                <a href="{{url('/materi-umum/'.$materiUmum->id)}}" class="btn btn-primary btn-sm-lg text-white"><i class="fa fa-arrow-right"></i></a>
                            </td>
                         </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="listspm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">SPM</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tbody>
                @foreach($jabatans as $jabatan)
                    @foreach($jabatan->spms as $spm)
                        <tr>
                            <td>{{ $spm->spm ?? '-' }}</td>
                            <td style="width: 10%;">
                                <a href="{{url('/materi-spm/'.$spm->id)}}" class="btn btn-primary btn-sm-lg text-white"><i class="fa fa-arrow-right"></i></a>
                            </td>
                         </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
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
            @foreach($jabatans as $jabatan)
                @if($jabatan->sops)
                <div class="col text-center mb-2">
                    <div class="card">
                        <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                            <h4>SOP</h4>
                            <div class="card-text">
                                <p>Standar Operasional Prosedur (SOP)</p>
                            </div>
                            <hr>
                            <div>
                                <a data-bs-toggle="modal" data-bs-target="#listsop" class="btn btn-dark btn-sm btn-icon-text">
                                    List SOP Anda <i class="fa fa-arrow-right"></i></a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($jabatan->spms)
                <div class="col text-center mb-2">
                    <div class="card">
                        <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                            <h4>SPM</h4>
                            <div class="card-text">
                                <p>Standar Pelayanan Minimal (SPM)</p>
                            </div>
                            <hr>
                            <div>
                                <a data-bs-toggle="modal" data-bs-target="#listspm" class="btn btn-dark btn-sm btn-icon-text">
                                    List SPM Anda <i class="fa fa-arrow-right"></i></a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($jabatan->courses)
                <div class="col text-center mb-2">
                    <div class="card">
                        <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                            <h4>Course</h4>
                            <div class="card-text">
                                <p>Materi Course Rumah Sakit</p>
                            </div>
                            <hr>
                            <div>
                                <a data-bs-toggle="modal" data-bs-target="#listcourse" class="btn btn-dark btn-sm">List Materi <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($jabatan->materiUmums)
                <div class="col text-center mb-2">
                    <div class="card">
                        <div class="card-body" style="width: 100%; border:none; background:none; border: 1px solid #ababab">
                            <h4>Materi Umum</h4>
                            <div class="card-text">
                                <p>Materi Umum</p>
                            </div>
                            <hr>
                            <div>
                                <a data-bs-toggle="modal" data-bs-target="#listMateriUmum" class="btn btn-dark btn-sm">List Materi <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection