@extends('admin.main')

@section('title', 'Jabatan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Jabatan</h1>
      <div class="float-right">
        <a href="/jabatan/create" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Create
        </a>
      </div>
    </div>

    <div class="section-body">
      <p class="section-leadx">Jabatan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Jabatan</th>
                    <th class="text-center" scope="col">Paket Materi</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($jabatan as $item)
                 <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td><div class="d-flex justify-content-center gap-1">
                        @foreach($item->sop as $sop)
                            <button class="btn btn-primary">{{$sop->sop}}</button>
                        @endforeach
                        @foreach($item->spm as $spm)
                            <button class="btn btn-primary">{{$spm->spm}}</button>
                        @endforeach
                        @foreach($item->course as $course)
                            <button class="btn btn-primary">{{$course->course}}</button>
                        @endforeach
                        @foreach($item->materi as $mu)
                            <button class="btn btn-primary">{{$mu->materi}}</button>
                        @endforeach
                    </div></td>
                    <td><a href="{{url('/jabatan',$item->id)}}" class="btn btn-primary">Detail</a></td>
                 </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>

<!-- Modal -->

@endsection

@push('scripts')
<script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
