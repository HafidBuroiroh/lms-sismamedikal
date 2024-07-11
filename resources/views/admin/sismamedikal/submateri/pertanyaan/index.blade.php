@extends('admin.main')

@section('title', 'Pertanyaan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Import Pertanyaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('importpertanyaan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$materi->id}}" name="id_submateri">
            <div class="form-group">
                <label for="file">Choose Excel file</label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="main-content">
  <section class="section">
    <div class="section-header justify-content-between">
      <h1 style="">Pertanyaan</h1>
      <div>
        @if(count($materi->pertanyaans) == 0)
        <a href="{{ route('sub-materi.pertanyaan.create', $materi->id) }}" class="btn btn-primary btn-lg btn-icon-text">
          <i class="mdi mdi-upload btn-icon-prepend"></i>
          Create
        </a>
        @endif
        <a href="{{url('/export-template')}}" class="btn btn-lg btn-success">export</a>
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-info btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Import
        </a>
        
      </div>
    </div>

    <div class="section-body">
      <p class="section-leadx">Pertanyaan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Pertanyaan</th>
                    <th class="text-center" scope="col">Submateri</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($materi->pertanyaans as $item)
                 <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->pertanyaan}}</td>
                    <td>{{$item->submateri->judul_materi}}</td>
                    <td>
                      <div class="d-flex justify-content-center gap-1">
                        <form action="{{ url('/pertanyaan', $item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}">Delete</button>
                          </form> 
                          <a href="{{url('/pertanyaan',$item->id)}}" class="btn btn-primary">Detail</a>
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
