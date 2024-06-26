@extends('admin.main')

@section('title', 'Pelatihan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Pelatihan</h1>
      <div class="float-right">
        <a href="/list-pelatihan/create" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Create
        </a>
      </div>
    </div>

    <div class="section-body">
      <p class="section-leadx">Pelatihan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Judul</th>
                    <th class="text-center" scope="col">Kategori</th>
                    <th class="text-center" scope="col">Sertifikasi</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pelatihan as $item)
                 <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">{{$item->kategori}}</button>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            @if($item->sertifikat == 'skp')
                            <button class="btn btn-primary">Bersertifikat</button>
                            @else
                            <button class="btn btn-warning">Tidak Bersertifikat</button>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-1">
                            <form action="{{ url('/list-pelatihan', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}">Delete</button>
                            </form> 
                            <a href="{{url('/list-pelatihan/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
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
