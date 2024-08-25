@extends('layouts.web')
@section('content')

<style type="text/css">
.index-page .header {
  --background-color: rgba(255, 255, 255, 0);
}
</style>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="{{asset('image/pegawai-bspjimedan.jpg')}}" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up"><span>Portal PPID BSPJI Medan</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Portal PPID BSPJI Medan menyediakan berbagai jenis informasi publik yang dapat diakses oleh masyarakat. Informasi ini mencakup <b>Informasi Berkala</b>, yang diperbarui secara rutin; <b>Informasi Setiap Saat</b>, yang dapat diakses kapan saja sesuai kebutuhan; <b>Informasi Serta Merta</b>, yang disediakan segera dalam situasi tertentu; dan informasi lainnya yang relevan.<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <!-- <a href="#about" class="btn-get-started">Get Started</a>
          </div>-->
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="informasi-publik" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar-check"></i></div>
              <div>
                <h4 class="title"><a href="{{url('informasi-publik/informasi-berkala')}}" class="stretched-link">Informasi Berkala</a></h4>
                <p class="description">Informasi Publik yang wajib disediakan dan diumumkan secara berkala</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-alarm"></i></div>
              <div>
                <h4 class="title"><a href="{{url('informasi-publik/informasi-setiap-saat')}}" class="stretched-link">Informasi Setiap Saat</a></h4>
                <p class="description">Informasi Publik yang wajib disediakan dan diumumkan setiap saat</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-info-square"></i></div>
              <div>
                <h4 class="title"><a href="{{url('informasi-publik/informasi-serta-merta')}}" class="stretched-link">Informasi Serta Merta</a></h4>
                <p class="description">Informasi Publik yang wajib diumumkan secara serta merta tanpa penundaan</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
        <p>Hubungi kami untuk mendapatkan seputar informasi publik BSPJI Medan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p style="text-align:center">Jl. Sisingamangaraja No. 24, Kel. Pasar Merah Barat, <br>Kec. Medan Kota, Kota Medan, Prov. Sumatera Utara, Indonesia</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p style="text-align:center">bind_medan@kemenperin.go.id<br>
                 baristandindustrimdn@gmail.com
              </p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p style="text-align:center;">Telp: (061)7363471<br>HP: 085171699665
              </p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0813659016494!2d98.6908373!3d3.5687513999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031305d4ea62637%3A0xdbb783617bd1537f!2sBalai%20Standardisasi%20dan%20Pelayanan%20Jasa%20Industri%20Medan!5e0!3m2!1sen!2sid!4v1707714769529!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
@endsection
