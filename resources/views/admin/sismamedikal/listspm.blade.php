@extends('admin.main')

@section('title', 'List SPM')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create SPM</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/spm') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <p class="fw-bold my-0">Nama SPM<span class="text-danger">*</span></p>
                <input type="text" class="form-control" value="{{ old('spm') }}" id="exampleInputUsername1" placeholder="Input Nama SPM..." name="spm">
                @error('spm')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
              <p class="my-0 fw-bold">Deskripsi<span class="text-danger">*</span></p>
              <textarea name="deskripsi" class="form-control" col="5"></textarea>
            </div>
            <input type="hidden" name="aktif" value="1">
            <div class="modal-footer gap-1">
            <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@foreach($spm as $item)
<div class="modal fade" id="Edit{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="EditLabel">Edit SPM</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('/spm', $item->id) }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @method('PUT')
                  <div class="form-group">
                      <p class="fw-bold">SPM Name<span class="text-danger">*</span></p>
                      <input type="text" class="form-control" value="{{ $item->spm }}" id="exampleInputUsername1" placeholder="Input SPM Name..." name="spm">
                  </div>
                  <div class="form-group">
                    <p class="my-0 fw-bold">Deskripsi<span class="text-danger">*</span></p>
                    <textarea name="deskripsi" class="form-control" col="5">{{ $item->deskripsi }}</textarea>
                  </div>
                  <div class="modal-footer gap-1">
                  <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                      <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                          Submit
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endforeach
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">List SPM</h1>
      <div class="float-right">
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Create
        </a>
      </div>
    </div>

    <div class="section-body">
      <p class="section-leadx">List SPM.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">SPM</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($spm as $item)
                 <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->spm}}</td>
                    <td>
                    <div class="d-flex align-items-center justify-content-center gap-1">
                          <a data-bs-toggle="modal" data-bs-target="#Edit{{$item->id}}" class="btn btn-warning btn-sm-lg text-white">Update</a>
                          <form action="{{ url('/spm', $item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}">Delete</button>
                          </form>
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
