@extends('admin.main')

@section('title', 'Pertanyaan')

@push('style')
<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="width:87%">Create Pertanyaan</h1>
    </div>

    <div class="section-body">
      <p class="section-leadx">Pertanyaan.</p>
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <form action="{{url('/pertanyaan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 form-group">
                    <p class="my-0 fw-bold">Pilih Sub Materi<span class="text-danger">*</span></p>
                    <select name="id_submateri" class="form-select">
                        <option selected disabled>-- Pilih --</option>
                        @foreach($submateri as $item)
                        <option value="{{$item->id}}">{{$item->judul_materi}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pertanyaan-1">
                    <h5>Pertanyaan Pertama</h5>
                    <div class="mb-3 form-group" id="form-materi">
                        <p class="my-0 fw-bold">Pertanyaan<span class="text-danger">*</span></p>
                        <input type="text" name="pertanyaan[]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 1<span class="text-danger">*</span></p>
                                <input type="text" name="option_1[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 2<span class="text-danger">*</span></p>
                                <input type="text" name="option_2[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 3<span class="text-danger">*</span></p>
                                <input type="text" name="option_3[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 4<span class="text-danger">*</span></p>
                                <input type="text" name="option_4[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 5<span class="text-danger">*</span></p>
                                <input type="text" name="option_5[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Jabawan Benar<span class="text-danger">*</span></p>
                                <input type="text" name="true_option[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pertanyaan-2">
                    <h5>Pertanyaan Kedua</h5>
                    <div class="mb-3 form-group" id="form-materi">
                        <p class="my-0 fw-bold">Pertanyaan<span class="text-danger">*</span></p>
                        <input type="text" name="pertanyaan[]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 1<span class="text-danger">*</span></p>
                                <input type="text" name="option_1[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 2<span class="text-danger">*</span></p>
                                <input type="text" name="option_2[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 3<span class="text-danger">*</span></p>
                                <input type="text" name="option_3[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 4<span class="text-danger">*</span></p>
                                <input type="text" name="option_4[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 5<span class="text-danger">*</span></p>
                                <input type="text" name="option_5[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Jabawan Benar<span class="text-danger">*</span></p>
                                <input type="text" name="true_option[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pertanyaan-3">
                    <h5>Pertanyaan Ketiga</h5>
                    <div class="mb-3 form-group" id="form-materi">
                        <p class="my-0 fw-bold">Pertanyaan<span class="text-danger">*</span></p>
                        <input type="text" name="pertanyaan[]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 1<span class="text-danger">*</span></p>
                                <input type="text" name="option_1[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 2<span class="text-danger">*</span></p>
                                <input type="text" name="option_2[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 3<span class="text-danger">*</span></p>
                                <input type="text" name="option_3[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 4<span class="text-danger">*</span></p>
                                <input type="text" name="option_4[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 5<span class="text-danger">*</span></p>
                                <input type="text" name="option_5[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Jabawan Benar<span class="text-danger">*</span></p>
                                <input type="text" name="true_option[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pertanyaan-4">
                    <h5>Pertanyaan Keempat</h5>
                    <div class="mb-3 form-group" id="form-materi">
                        <p class="my-0 fw-bold">Pertanyaan<span class="text-danger">*</span></p>
                        <input type="text" name="pertanyaan[]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 1<span class="text-danger">*</span></p>
                                <input type="text" name="option_1[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 2<span class="text-danger">*</span></p>
                                <input type="text" name="option_2[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 3<span class="text-danger">*</span></p>
                                <input type="text" name="option_3[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 4<span class="text-danger">*</span></p>
                                <input type="text" name="option_4[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 5<span class="text-danger">*</span></p>
                                <input type="text" name="option_5[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Jabawan Benar<span class="text-danger">*</span></p>
                                <input type="text" name="true_option[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pertanyaan-5">
                    <h5>Pertanyaan Kelima</h5>
                    <div class="mb-3 form-group" id="form-materi">
                        <p class="my-0 fw-bold">Pertanyaan<span class="text-danger">*</span></p>
                        <input type="text" name="pertanyaan[]" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 1<span class="text-danger">*</span></p>
                                <input type="text" name="option_1[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 2<span class="text-danger">*</span></p>
                                <input type="text" name="option_2[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 3<span class="text-danger">*</span></p>
                                <input type="text" name="option_3[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 4<span class="text-danger">*</span></p>
                                <input type="text" name="option_4[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Opsi 5<span class="text-danger">*</span></p>
                                <input type="text" name="option_5[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 form-group" id="form-materi">
                                <p class="my-0 fw-bold">Jabawan Benar<span class="text-danger">*</span></p>
                                <input type="text" name="true_option[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-1 mt-5 mb-3">
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                    <a href="{{url()->previous()}}" class="btn btn-warning">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</div>
@endsection