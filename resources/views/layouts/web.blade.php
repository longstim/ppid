<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PPID BSPJI Medan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{asset('image/logo/logobspjimedan.png')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
  <link href="{{asset('assets-homepage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-homepage/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets-homepage/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets-homepage/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-homepage/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets-homepage/css/main.css')}}" rel="stylesheet">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

</head>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <img src="{{asset('image/logo/ppid.png')}}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
          <li class="dropdown"><a href="#" class="{{ Request::is('profil/*') ? 'active' : '' }}"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url('profil/profil-bspjimedan')}}">Profil BSPJI Medan</a></li>
              <li><a href="{{url('profil/profil-ppid')}}">Profil Singkat PPID</a></li>
              <li><a href="{{url('profil/tugas-tanggung-jawab-ppid')}}">Tugas dan Tanggung Jawab PPID</a></li>
              <li><a href="{{url('profil/struktur-ppid')}}">Struktur PPID</a></li>
              <li><a href="{{url('profil/visi-misi-ppid')}}">Visi Misi PPID</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ Request::is('layanan-informasi/*') ? 'active' : '' }}"><span>Layanan Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url('layanan-informasi/permohonan-informasi')}}">Permohonan Informasi</a></li>
              <li><a href="{{url('layanan-informasi/permohonan-keberatan-informasi')}}">Permohonan Keberatan Informasi</a></li>
              <li><a href="{{url('layanan-informasi/unit-pelayanan-publik')}}">Unit Pelayanan Publik</a></li>
              <li><a href="{{url('layanan-informasi/laporan-layanan-informasi')}}">Laporan Layanan Informasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ Request::is('standar-layanan/*') ? 'active' : '' }}"><span>Standar Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url('standar-layanan/tata-cara-permohonan-informasi')}}">Tata Cara Permohonan Informasi</a></li>
              <li><a href="{{url('standar-layanan/tata-cara-pengajuan-keberatan')}}">Mekanisme Keberatan</a></li>
              <li><a href="{{url('standar-layanan/tata-cara-penyelesaian-sengketa-informasi')}}">Mekanisme Penyelesaian Sengketa Informasi</a></li>
              <li><a href="{{url('standar-layanan/maklumat-pelayanan-informasi-publik')}}">Maklumat Pelayanan</a></li>
              <li><a href="{{url('standar-layanan/jalur-waktu-layanan')}}">Jalur dan Waktu Layanan</a></li>
              <li><a href="{{url('standar-layanan/biaya-layanan')}}">Biaya Layanan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ Request::is('informasi-publik/*') ? 'active' : '' }}"><span>Informasi Publik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{url('informasi-publik/informasi-berkala')}}">Informasi Berkala</a></li>
              <li><a href="{{url('informasi-publik/informasi-setiap-saat')}}">Informasi Setiap Saat</a></li>
              <li><a href="{{url('informasi-publik/informasi-serta-merta')}}">Informasi Serta Merta</a></li>
              <li><a href="{{url('informasi-publik/informasi-dikecualikan')}}">Informasi Dikecualikan</a></li>
            </ul>
          </li>
          <li><a href="index.html#contact">Regulasi</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div><!-- /.container-fluid -->
      </div>
  <!-- /.content -->
  <!-- {{ \TawkTo::widgetCode() }} -->

  <footer id="footer" class="footer position-relative">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">

          <h3><b><span class="sitename">PPID BSPJI Medan</span></b></h3>
          <div class="footer-contact pt-3">
            <p>
              Jl. Sisingamangaraja No. 24, 
              Kel. Pasar Merah Barat, <br>Kec. Medan Kota,
              Kota Medan, Prov. Sumatera Utara,
              Indonesia<br><br>
              <a href="tel:+62617363471"><i class="bi bi-telephone"></i> (061) 7363471</a><br>
              <a href="https://wa.me/+6285171699665" target="_blank"><i class="bi bi-whatsapp"></i> 085171699665</a><br>
              <a href="mailto:bind_medan@kemenperin.go.id"><i class="bi bi-envelope"></i> bind_medan@kemenperin.go.id</a><br>
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link Terkait</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Sosial Media</h4>
            <p>Temukan kami di jejaring sosial untuk mendapatkan informasi terbaru.</p>
            <div class="social-links d-flex mt-4">
              <a href="https://facebook.com/bspjimedan" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/bspjimedan" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://twitter.com/bspjimedan" target="_blank"><i class="bi bi-twitter-x"></i></a>
              <a href="https://youtube.com/@bspjimedan" target="_blank"><i class="bi bi-youtube"></i></a>
              <a href="https://wa.me/+6285171699665" target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; Copyright <strong><a href="https://bspjimedan.kemenperin.go.id" target="_blank">BSPJI Medan</a></strong>. All Rights Reserved</p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets-homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets-homepage/endor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets-homepage/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets-homepage/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets-homepage/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets-homepage/js/main.js')}}"></script>

  <!-- SweetAlert2 -->
  <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

</body>

</html>