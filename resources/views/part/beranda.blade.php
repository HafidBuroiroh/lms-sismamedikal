@extends('layout.main')
@section('title', '- Beranda')
@section('main')
<!-- landing page -->
<section style="background-color: #EBF3FF;">
    <div class="container pt-2 pb-5 py-md-5">
      <div class="row justify-content-around">
        <div class="col-md-6 d-flex justify-content-center align-items-center order-md-2">
          <div class="p-2 p-md-0">
            <img src="{{url('/')}}/image/rumahsakit.png" alt="" class="img-fluid w-100 d-block mx-auto p-4 p-md-0">
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center order-md-1">
          <div class="p-1 p-md-0">
            <h1 class="fw-bold" style="color: #0C438D;">Sisma Medikal</h1>
            <p class="text-body-secondary" style="text-align: justify;">Berawal pada tahun 1971, almarhum dr. H. Sismadi Partodimulyo Sp.B, MBA mendirikan klinik mandiri pertama di daerah Tanjung Priok, Jakarta Utara, sebagai bentuk kepedulian beliau terhadap kondisi kesehatan masyarakat di sekitar wilayah tersebut dan wujud partisipasi membantu pemerintah dalam hal memperbaiki taraf kesehatan masyarakat. <br><br>
Pembangunan klinik ini menjadi cikal bakal keterlibatan Almarhum dr. H. Sismadi Partodimulyo Sp.B, MBA dalam memberikan kontribusi penuh pada dunia kesehatan di Indonesia. <br><br>
Setelah 30 tahun bergerak di bidang usaha kesehatan, disadari bahwa tantangan perkembangan bisnis kesehatan sangat diperlukan di tengah-tengah masyarakat Indonesia, maka keluarga almarhum dr. H. Sismadi Partodimulyo Sp.B, MBA mendirikan PT. Sisma Medika Internasional pada tanggal 13 Agustus 2003 sebagai upaya untuk memberikan kontribusi lebih luas kepada dunia kesehatan di Indonesia pada khususnya.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- landing page -->
  @endsection