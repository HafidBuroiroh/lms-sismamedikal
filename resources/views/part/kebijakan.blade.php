@extends('layout.main')
@section('title', '- Kebijakan')
@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2>Kebijakan Rumah Sakit</h2>
            <ul>
                <li><a href="#">Kebijakan Kunjungan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Kebijakan Pembayaran</a></li>
            </ul>
            <h2>Kebijakan WHO</h2>
            <ul>
                <li><a href="#">Kebijakan WHO no...</a></li>
                <li><a href="#">Kebijakan WHO no...</a></li>
                <li><a href="#">Kebijakan WHO no...</a></li>
            </ul>
            <h2>Kebijakan Kemenkes</h2>
            <ul>
                <li><a href="#">Permenkes no....</a></li>
                <li><a href="#">Permenkes no....</a></li>
                <li><a href="#">Permenkes no....</a></li>
            </ul>
            <h2>Kebijakan PERSI</h2>
            <ul>
                <li><a href="#">Perpersi no...</a></li>
                <li><a href="#">Perpersi no...</a></li>
                <li><a href="#">Perpersi no...</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control border border-dark" placeholder="Cari Kebijakan..." aria-label="Cari Kebijakan..." aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">Cari</button>
            </div>
            <div class="detail mb-5">
                <h4 class="fw-bold">Kebijakan Rumah Sakit</h4>
                <p>Kebijakan rumah sakit adalah serangkaian pedoman, peraturan, dan prosedur yang dibuat dan diterapkan oleh manajemen rumah sakit untuk mengatur berbagai aspek operasional, klinis, dan administratif dalam lingkungan rumah sakit. Kebijakan ini bertujuan untuk memastikan pelayanan kesehatan yang berkualitas, aman, efisien, dan sesuai dengan standar dan peraturan yang berlaku. Anda bisa download penjelasannya dibawah</p>
                <button class="btn btn-primary">Download PDF</button>
            </div>
            <div class="detail mb-5">
                <h4 class="fw-bold">Kebijakan WHO</h4>
                <p>Kebijakan WHO (World Health Organization/Organisasi Kesehatan Dunia) merujuk pada berbagai pedoman, rekomendasi, dan standar yang dikeluarkan oleh WHO untuk memandu negara-negara anggota dalam meningkatkan kesehatan masyarakat secara global. Kebijakan ini mencakup berbagai aspek kesehatan, mulai dari pencegahan dan pengendalian penyakit hingga promosi kesehatan dan perawatan medis. Anda bisa download penjelasannya dibawah</p>
                <button class="btn btn-primary">Download PDF</button>
            </div>
            <div class="detail mb-5">
                <h4 class="fw-bold">Kebijakan Kemenkes</h4>
                <p>Kebijakan Kementerian Kesehatan (Kemenkes) adalah serangkaian pedoman, peraturan, dan program yang dibuat oleh Kementerian Kesehatan Republik Indonesia untuk meningkatkan kualitas dan akses layanan kesehatan di seluruh Indonesia. Kebijakan ini mencakup berbagai aspek, termasuk pencegahan penyakit, perawatan kesehatan, pengelolaan sumber daya kesehatan, dan peningkatan kesehatan masyarakat secara umum. Anda bisa download penjelasannya dibawah</p>
                <button class="btn btn-primary">Download PDF</button>
            </div>
            <div class="detail">
                <h4 class="fw-bold">Kebijakan PERSI</h4>
                <p>Persatuan Rumah Sakit Seluruh Indonesia (PERSI) adalah organisasi yang menaungi rumah sakit di Indonesia, baik negeri maupun swasta. PERSI berperan dalam memberikan panduan, advokasi, dan dukungan kepada anggotanya untuk meningkatkan mutu pelayanan kesehatan. Kebijakan PERSI biasanya berfokus pada penguatan manajemen rumah sakit, peningkatan kualitas layanan, dan adaptasi terhadap regulasi kesehatan yang berlaku di Indonesia. Anda bisa download penjelasannya dibawah</p>
                <button class="btn btn-primary">Download PDF</button>
            </div>
        </div>
    </div>
</div>
@endsection