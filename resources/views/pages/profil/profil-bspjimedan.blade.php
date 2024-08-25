@extends('layouts.web')
@section('content')
  <main class="main" style="margin-top:70px;">
    <!-- Features Section -->
    <section id="profil-bspjimedan" class="features section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profil BSPJI Medan</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4" style="margin-bottom: 20px;">
            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <h4>Sejarah</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <h4>Visi dan Misi</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <h4>Tugas dan Fungsi</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                  <h4>Moto Pelayanan</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                  <h4>Maklumat Pelayanan</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                  <h4>Struktur Organisasi</h4>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-7">
                  <h4>Profil Pejabat</h4>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-8">
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="{{asset('image/sejarah.jpeg')}}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade services" id="features-tab-2">
                <div class="service-item item-cyan position-relative">
                  <div>
                    <h3>Visi</h3>
                    <p style="text-align:justify;">Balai Standardisasi dan Pelayanan Jasa Industri Medan yang akuntabel, adaptif, kolaboratif dan berorientasi pelayanan dalam mewujudkan industri nasional yang mandiri dan berdaya saing</p>
                  </div>
                </div>
                <br>
                <div class="service-item item-cyan position-relative">
                  <div>
                    <h3>Misi</h3>
                    <p style="text-align:justify;">Balai Standardisasi dan Pelayanan Jasa Industri Medan mendukung peningkatan kemandirian, daya saing dan kolaborasi industri melalui pemanfaatan infrastruktur dan revitalisasi standardisasi, optimalisasi pemanfaatan teknologi industri, jasa industri dan industri hijau</p>
                  </div>
                </div>
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade services" id="features-tab-3">
                <div class="service-item item-cyan position-relative">
                  <div>
                    <h3>Tugas</h3>
                    <p style="text-align:justify;">Balai Standardisasi dan Pelayanan Jasa Industri yang selanjutnya disingkat BSPJI berada di bawah dan bertanggung jawab kepada Kepala Badan Standardisasi dan Kebijakan Jasa Industri, mempunyai tugas yaitu melaksanakan standardisasi industri, optimalisasi pemanfaatan teknologi industri, industri hijau, dan pelayanan jasa industri berlandaskan potensi sumber daya daerah.</p>
                  </div>
                </div>
                <br>
                <div class="service-item item-cyan position-relative">
                  <div>
                    <h3>Fungsi</h3>
                    <p style="text-align:justify;">Dalam melaksanakan tugasnya, BSPJI Medan menyelenggarakan beberapa fungsi diantaranya adalah sebagai berikut:
                    <ul style="color:color-mix(in srgb, var(--default-color), transparent 10%)">
                      <li><p style="text-align:justify;">Pelaksanaan penerapan dan pengawasan standardisasi industri</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan optimalisasi pemanfaatan teknologi industri</p></li>
                      <li><p style="text-align:justify;">Pendampingan dan konsultasi di bidang standardisasi, optimalisasi pemanfaatan teknologi industri, industri hijau, dan jasa industri</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan pengujian, kalibrasi, inspeksi teknis dan verifikasi di bidang industri</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan sertifikasi sistem manajemen, produk, teknologi, dan industri hijau</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan fasilitasi kemitraan layanan jasa industri</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan pengumpulan dan pengolahan data serta penyajian informasi</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan urusan perencanaan, program, anggaran, kepegawaian, keuangan, organisasi, tata laksana, administrasi kerja sama, hubungan masyarakat, pengelolaan barang milik negara, persuratan, perpustakaan, kearsipan, dan rumah tangga</p></li>
                      <li><p style="text-align:justify;">Pelaksanaan evaluasi dan pelaporan</p></li>
                    </ul>
                    </p>
                  </div>
                </div>
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade services" id="features-tab-4">
                <div class="service-item item-cyan position-relative">
                  <div class="row">
                    <div class="col-lg-7">
                    <h3>Moto Pelayanan</h3>
                    <h5 style="color:#388da8">"Melayani Dengan Sepenuh Hati"</h5><p style="text-align:justify;">Moto ini mencerminkan semangat BSPJI Medan untuk memberikan pelayanan terbaik kepada setiap pelanggan kami dengan sepenuh hati. Setiap langkah dilakukan dengan keikhlasan dan dedikasi yang tulus. Di balik setiap tindakan adalah komitmen yang kuat untuk terus berinovasi, memberikan <i>service excellence</i> dan membangun sinergi dengan mitra kerja kami guna mewujudkan masa depan yang lebih baik.
                    </p>
                    </div>
                    <div class="col-lg-5 mt-4">
                      <img src="{{asset('image/moto-pelayanan.jpeg')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>                
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade services" id="features-tab-5">
                <img src="{{asset('image/maklumat-pelayanan.png')}}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade services" id="features-tab-6">
                <img src="{{asset('image/struktur-organisasi.jpeg')}}" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade testimonials services" id="features-tab-7">
                <div class="service-item item-cyan position-relative">
                  <div>
                  <h4 style="color:#388da8">Hendra Leonard, ST, MSE</h4>
                  <h5><b>Kepala Balai</b></h5>
                  <p style="text-align:justify;"><img src="{{asset('image/hendra-leonard.png')}}" alt="" width="200px" style="float: right;padding-left: 15px;">
                  Lahir di Jakarta pada tanggal 12 Maret 1980. Menyelesaikan pendidikan dan memperoleh gelar Sarjana Teknik dari Institut Teknologi Bandung Jurusan Teknik Mesin pada bulan Juni 2004. Kemudian melanjutkan pendidikannya di Keio University, Jepang dan memperoleh gelar Master of System Engineering Jurusan System Design and Management pada bulan September 2014.<br><br>

                  Memulai karir di Kementerian Perindustrian sejak September 2009 sebagai Pelaksana di Balai Besar Bahan dan Barang Teknik, Bandung. Kemudian pada Februari 2018 menjabat sebagai Analis Kerjasama Standardisasi Industri di Pusat Standardisasi Industri. Pada Januari 2019, menjabat sebagai Kepala Seksi Kalibrasi di Balai Besar Industri Agro, Bogor. Selanjutnya beliau beralih jabatan ke Fungsional Tertentu sebagai Penguji Mutu Barang Ahli Muda di Balai Besar Industri Agro, Bogor pada Desember 2020. Kemudian pada Agustus 2021 menjabat sebagai Assesor Manajemen Mutu Industri Ahli Muda di Pusat Perumusan, Penerapan, dan Pemberlakuan Standardisasi Industri. Pada Agustus 2022 dipromosikan menjadi Kepala Balai Standardisasi dan Pelayanan Jasa Industri Medan.<br><br>

                  Atas pengabdian beliau hingga saat ini, Presiden Republik Indonesia menganugerahkan penghargaan Satyalancana Karya Satya X Tahun.
                    </p>
                  </div>
                </div>
                <br>
                <div class="service-item item-cyan position-relative">
                  <div>
                  <h4 style="color:#388da8">Hardiana Sriyati, SE</h4>
                  <h5><b>Kepala Sub Bagian Tata Usaha</b></h5>
                  <p style="text-align:justify;"><img src="{{asset('image/hardiana-sriyati.png')}}" alt="" width="200px" style="float: right;padding-left: 15px;">
                  Lahir di Padang Sidempuan pada tanggal 6 April 1968. Meraih gelar Sarjana Ekonomi dari Universitas Islam Sumatera Utara Jurusan Manajemen pada Agustus 1991.<br><br>

                  Mengawali karir di Kementerian Perindustrian sejak Mei 1993 sebagai Staf Sub Bagian Tata Usaha di Balai Penelitian dan Pengembangan Industri Medan. Kemudian pada Juni 2004 menjabat sebagai Analis Kepegawaian Ahli Muda di Baristand Industri Medan. Selanjutnya memperoleh kenaikan jenjang jabatan menjadi Analis Kepegawaian Ahli Madya di Baristand Industri Medan pada Juli 2011. Pada September 2017 menjabat sebagai Analis Kompetensi di Baristand Industri Medan. Kemudian pada September 2018 dipromosikan menjadi Kepala Sub Bagian Tata Usaha di Baristand Industri Medan. Pada November 2020 beralih jabatan sebagai pejabat fungsional Analis Kepegawaian Ahli Muda. Kembali menjabat sebagai Kepala Sub Bagian Tata Usaha di Baristand Industri Medan pada Maret 2021. Pada Agustus 2022 dilantik kembali sebagai Kepala Sub Bagian Tata Usaha di Balai Standardisasi dan Pelayanan Jasa Industri Medan.<br><br>

                  Pada tahun 2016, beliau memperoleh Tanda Kehormatan Satyalancana Karya Satya XX Tahun dari Presiden Republik Indonesia.
                    </p>
                  </div>
                </div>
              </div><!-- End Tab Content Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

  </main>
@endsection
