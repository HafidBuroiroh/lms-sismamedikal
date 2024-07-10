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
      <h1 style="width:87%">Sub Materi</h1>
      <div class="float-right">
        <a href="/sub-materi/create" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Create
        </a>
      </div>
    </div>

    <div class="section-body">
      <p class="section-leadx">Sub Materi.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Jenis Materi</th>
                    <th class="text-center" scope="col">Judul Materi</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($submateri as $item)
                 <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    @if($item->id_sop)
                      <td>{{$item->sop->sop}}</td>
                    @elseif($item->id_spm)
                      <td>{{$item->spm->spm}}</td>
                    @elseif($item->id_course)
                      <td>{{$item->course->course ?? '-'}}</td>
                    @elseif($item->id_mu)
                      <td>{{$item->materi->materi ?? '-'}}</td>
                    @endif
                    <td>{{$item->judul_materi}}</td>
                    <td>
                      <div class="d-flex justify-content-center gap-1">
                        <form action="{{ url('/sub-materi', $item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}">Delete</button>
                          </form> 
                          <a href="{{url('/sub-materi',$item->id)}}" class="btn btn-primary">Detail</a>
                          <a href="{{url('/sub-materi/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                          <a href="{{url('/sub-materi/pertanyaan/'.$item->id)}}" class="btn btn-info">List Pertanyaan</a>
                      </div>
                    </td>
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
