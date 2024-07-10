@extends('admin.main')

@section('title', 'Rumah Sakit')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Rumah Sakit</h1>
      <div class="float-right">
        <a href="{{ route('rs.create') }}" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            Create
        </a>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-z">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Nama Rumah Sakit</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Logo</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                 <tr class="text-center">
                    <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                    <td>{{ $user->name ?? '-' }}</td>
                    <td>{{ $user->email ?? '-' }}</td>
                    <td>
                      <img src="/file/rumah-sakit/logo/{{ $user->profilRumahSakit->logo ?? '-' }}" alt="" width="50">
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center gap-1">
                          <a href="{{ route('rs.edit', $user->id) }}" class="btn btn-warning btn-sm-lg text-white">Update</a>
                          <form action="{{ route('rs.destroy', $user->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $user->id }}">Delete</button>
                          </form>
                        </div>  
                    </td>
                 </tr>
                 @endforeach
                </tbody>
              </table>
            </div>

            <div class="float-right">
              {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
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
