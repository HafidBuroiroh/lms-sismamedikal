@extends('layout.main')
@section('title', '- SPM/SOP')
@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2>Pelatihan yang Tersedia</h2>
            <p>Sisma Medikal menawarkan berbagai pelatihan untuk meningkatkan keterampilan dan pengetahuan tenaga medis dan umum. Berikut adalah beberapa pelatihan yang kami tawarkan:</p>
            <ul>
                <li><a href="#training1">Pelatihan Pertolongan Pertama</a></li>
                <li><a href="#training2">Pelatihan Manajemen Stres</a></li>
                <li><a href="#training3">Pelatihan Penanganan Darurat</a></li>
                <li><a href="#training4">Pelatihan Kebersihan dan Sanitasi</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control border border-dark" placeholder="Cari Pelatihan..." aria-label="Cari Pelatihan..." aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">Cari</button>
            </div>
            <div class="mb-3">
                <h4>Pelatihan Pertolongan Pertama</h4>
                <p>Pelatihan ini mencakup pengetahuan dasar dan keterampilan yang diperlukan untuk memberikan pertolongan pertama dalam situasi darurat.</p>
                <p><strong>Jadwal:</strong> Setiap Senin, pukul 09:00 - 12:00</p>
                <p><strong>Instruktur:</strong> Dr. Budi Santoso</p>
                <p><strong>Biaya:</strong> Rp 500.000</p>
            </div>

            <div class="mb-3">
                <h4>Pelatihan Manajemen Stres</h4>
                <p>Pelatihan ini membantu peserta memahami dan mengelola stres dengan teknik-teknik yang efektif.</p>
                <p><strong>Jadwal:</strong> Setiap Rabu, pukul 14:00 - 17:00</p>
                <p><strong>Instruktur:</strong> Dr. Siti Nurhaliza</p>
                <p><strong>Biaya:</strong>(Hanya User Terdaftar)</p>
            </div>

            <div class="mb-3">
                <h4>Pelatihan Penanganan Darurat</h4>
                <p>Pelatihan ini memberikan pengetahuan dan keterampilan untuk menangani situasi darurat medis dengan cepat dan tepat.</p>
                <p><strong>Jadwal:</strong> Setiap Jumat, pukul 09:00 - 12:00</p>
                <p><strong>Instruktur:</strong> Dr. Andi Wijaya</p>
                <p><strong>Biaya:</strong> Rp 600.000</p>
            </div>

            <div class="mb-3">
                <h4>Pelatihan Kebersihan dan Sanitasi</h4>
                <p>Pelatihan ini fokus pada pentingnya kebersihan dan sanitasi dalam lingkungan rumah sakit.</p>
                <p><strong>Jadwal:</strong> Setiap Sabtu, pukul 10:00 - 13:00</p>
                <p><strong>Instruktur:</strong> Dr. Rina Kusuma</p>
                <p><strong>Biaya:</strong>(Hanya User Terdaftar)</p>
            </div>
        </div>
    </div>
</div>
@endsection