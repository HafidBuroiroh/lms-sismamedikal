@extends('layout.mainafter')
@section('title', '- Kuisioner')
@section('mainafter')
<div style="background: url('{{asset('image/bg2.png')}}'); background-size:cover; padding-bottom:7%; padding-top:3%;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Petunjuk: Pilih Jawaban Yang Benar</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="soal my-4">
                            <ul style="list-style: none">
                                <li class="fw-bold">1. Contoh Penyakit Jantung</li>
                                <br>
                                <ul  style="list-style: none">
                                    <li><input type="radio" name="NO1" value="a"> a. Infark miokard</li>
                                    <li><input type="radio" name="NO1" value="b"> b. Ikterus</li>
                                    <li><input type="radio" name="NO1" value="c"> c. Tubercolosis</li>
                                    <li><input type="radio" name="NO1" value="d"> d. Pneumonia</li>
                                    <li><input type="radio" name="NO1" value="e"> e. Chronic Kidney Disease</li>
                                </ul>  
                            </ul>
                            <br>
                            <ul style="list-style: none">
                                <li class="fw-bold">2. Yang dahulu diduga sebagai penyebab penyakit katup jantung adalah</li>
                                <br>
                                <ul  style="list-style: none">
                                    <li><input type="radio" name="no2" value="a"> a. rematik</li>
                                    <li><input type="radio" name="no2" value="b"> b. olahraga yang berlebihan</li>
                                    <li><input type="radio" name="no2" value="c"> c. lemak</li>
                                    <li><input type="radio" name="no2" value="d"> d. a,b,c benar</li>
                                    <li><input type="radio" name="no2" value="e"> e. semua salah</li>
                                </ul>  
                            </ul>
                            <br>
                            <ul style="list-style: none">
                                <li class="fw-bold">3. Bakteri penyebab terjadinya katup jantung ialah</li>
                                <br>
                                <ul  style="list-style: none">
                                    <li><input type="radio" name="no3" value="a"> a. streptobasil</li>
                                    <li><input type="radio" name="no3" value="b"> b. sarccina</li>
                                    <li><input type="radio" name="no3" value="c"> c. staphylokokus</li>
                                    <li><input type="radio" name="no3" value="d"> d. vibrio</li>
                                    <li><input type="radio" name="no3" value="e"> e. streptokokus</li>
                                </ul>  
                            </ul>
                            <br>
                            <ul style="list-style: none">
                                <li class="fw-bold">4. Pilihan terapi untuk hipertrigliseridemia adalah</li>
                                <br>
                                <ul  style="list-style: none">
                                    <li><input type="radio" name="no4" value="a"> a. Simvastatin</li>
                                    <li><input type="radio" name="no4" value="b"> b. Niasin </li>
                                    <li><input type="radio" name="no4" value="c"> c. BAR</li>
                                    <li><input type="radio" name="no4" value="d"> d. Fibrat</li>
                                    <li><input type="radio" name="no4" value="e"> e. Ezetimibe</li>
                                </ul>  
                            </ul>
                            <br>
                            <ul style="list-style: none">
                                <li class="fw-bold">5. Obat antihipertensi yang bersifat vasodilator vena dan arteri</li>
                                <br>
                                <ul  style="list-style: none">
                                    <li><input type="radio" name="no5" value="a"> a. hidralazin</li>
                                    <li><input type="radio" name="no5" value="b"> b. nitrogliserin</li>
                                    <li><input type="radio" name="no5" value="c"> c. labetolol</li>
                                    <li><input type="radio" name="no5" value="d"> d. phentolamin</li>
                                    <li><input type="radio" name="no5" value="e"> e. sodium nitropusit</li>
                                </ul>  
                            </ul>
                            <br>
                            <div class="d-flex justify-content-end me-4 gap-2">
                                <a href="#" class="btn btn-secondary">Simpan</a>
                                <a href="#" class="btn btn-primary"id="done">Selesai</a>
                            </div>
                        </div>
                    </div>
                </div>
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