@extends('admin.main')

@section('title', 'List Unverif')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">List Unverif</h1>
      <div class="float-right">
        {{-- <a target="_blank" class="btn btn-sm btn-success" href="export-data-unverif"><i class="fa fa-download"></i>
          Export Excel</a> --}}
          <form action="/export-data-unverif" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id_kabupaten" name="id_kab">
            <input type="hidden" id="id_kecamatan" name="id_kec">
            <input type="hidden" id="id_kelurahan" name="id_kel">
              <button type="submit" class="btn btn-sm btn-success" ><i class="fa fa-download"></i> Export
                Excel</button>
            </form>
      </div>
    </div>

    <div class="section-body">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item {{ request()->routeIs('/list-unverif') ? 'active' : '' }}">
            @if(request()->routeIs('/list-unverif'))
            List Unverif
            @else
            <a href="#">List Unverif</a>
            @endif
          </li>

        </ol>
      </nav>
      <p class="section-leadx">List daftar responden yang sudah mengisi kuesioner dengan status unverif.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <tr class="text-center">
                    <td>1</td>
                    <td>User 1</td>
                    <td>loremipsum@gmail.com</td>
                    <td><button class="btn btn-danger">Unverif</button></td>
                    <td><button class="btn btn-primary">Cek</button></td>
                 </tr>
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
