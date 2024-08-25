@extends('layouts.web')
@section('content')
  <main class="main" style="margin-top:70px;">
    <!-- Features Section -->
    <section id="profil-bspjimedan" class="features-details section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Unit Pelayanan Publik</h2>
      </div><!-- End Section Title -->

      <div class="container services">
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

          <div class="content mt-2" style="color: #3d4348;">
              <h4>Unit Pelayanan Publik BSPJI Medan</h4>
              <p style="text-align:justify;">
                Unit Pelayanan Publik (UPP) merupakan unit kerja non struktural yang melakukan kegiatan penyelengaraan pelayanan publik. Tugas UPP adalah memberikan pelayanan kepada masyarakat atau badan hukum atas permintaan informasi, konsultasi, dan pelaksanaan pelayanan publik yang berada pada ruang lingkupnya.
              </p>
              <ul>
                <li style="margin-bottom: -10px;"><i class="bi bi-alarm flex-shrink-0"></i><b>Waktu Layanan</b></li>
                  Senin s/d Kamis : 07.30 - 16.00 WIB
                  <br>
                  Jumat : 07.30 - 16.30 WIB
                  <br><br>
                <li style="margin-bottom: -5px;"><i class="bi bi-pin-map flex-shrink-0"></i><b>Alamat</b></li>
                <p style="text-align: justify;">Jl. Sisingamangaraja No. 24, Kel. Pasar Merah Barat, Kec. Medan Kota, Kota Medan, Prov. Sumatera Utara, Indonesia, 20217</p>
              </ul>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2 mt-5" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('image/upp.jpg')}}" class="img-fluid" alt="">
          </div>

          </div><!-- Features Item -->
      </div>

    </section><!-- /Features Section -->

  </main>
@endsection
