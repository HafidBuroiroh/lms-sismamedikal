@extends('layout.mainafter')
@section('title', '- Kuisioner')
@section('mainafter')
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:3%;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Petunjuk: Pilih Jawaban Yang Benar</h4>
                <form action="" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="soal my-4">
                                @foreach($kuis as $item)
                                <ul style="list-style: none">
                                    <li class="fw-bold">{{$loop->iteration}}. {{$item->pertanyaan}}</li>
                                    <br>
                                    <ul  style="list-style: none">
                                        <li><input type="radio" name="option_1" value="a"> a. {{$item->option_1}}</li>
                                        <li><input type="radio" name="option_2" value="b"> b. {{$item->option_2}}</li>
                                        <li><input type="radio" name="option_3" value="c"> c. {{$item->option_3}}</li>
                                        <li><input type="radio" name="option_4" value="d"> d. {{$item->option_4}}</li>
                                        <li><input type="radio" name="option_5" value="e"> e. {{$item->option_5}}</li>
                                    </ul>  
                                </ul>
                                <br>
                                @endforeach
                                <div class="d-flex justify-content-end me-4 gap-2">
                                    <a href="#" class="btn btn-secondary">Simpan</a>
                                    <a href="#" class="btn btn-primary"id="done">Selesai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('done').addEventListener('click', function(event) {
        event.preventDefault();
        
        Swal.fire({
            title: 'Pastikan Jawaban Anda',
            text: "Anda Tidak Dapat Mengerjakan Ulang",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Selesai'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: "success",
                    title: "Nilai Anda 80",
                    text: "Data Telah Tersimpan",
                }).then((secondResult) => {
                    if (secondResult.isConfirmed) {
                        window.location.href = '/nilai';
                    }
                });
            }
        });
    });
</script>
  @endsection