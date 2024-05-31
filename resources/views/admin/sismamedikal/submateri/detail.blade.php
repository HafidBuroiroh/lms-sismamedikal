@extends('admin.main')

@section('title', 'Sub Materi')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Sub Materi - {{$detail->judul_materi}}</h1>
    </div>

    <div class="section-body">
        <p class="section-leadx">Sub Materi - {{$detail->judul_materi}}</p>
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="fw-bold">SOP/SPM/Course</p>
                        </div>
                        <div class="col-12 col-md-6">
                        @if($detail->id_sop)
                            <p>: {{$detail->sop->sop}}</p>
                        @elseif($detail->id_spm)
                            <p>: {{$detail->spm->spm}}</p>
                        @elseif($detail->id_course)
                            <p>: {{$detail->course->course}}</p>
                        @endif
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="fw-bold">Judul Materi</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>: {{$detail->judul_materi}}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="fw-bold">Deskripsi Materi</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>: {{$detail->description_materi}}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="fw-bold">Video Materi</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>: <a href="{{$detail->link_youtube}}" target="_blank" rel="noopener noreferrer">{{$detail->link_youtube}}</a></p>
                        </div>
                    </div>
                    <div class="d-flex gap-1 mt-5 mb-3">
                        <a href="{{url()->previous()}}" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection