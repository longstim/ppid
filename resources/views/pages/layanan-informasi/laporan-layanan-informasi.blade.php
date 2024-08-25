@extends('layouts.web')
@section('content')
  <main class="main" style="margin-top:70px;">
    <!-- Features Section -->
    <section id="profil-bspjimedan" class="features section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Laporan Layanan Informasi</h2>
      </div><!-- End Section Title -->

      <div class="container pricing">
         <div class="row gy-4">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
              <h3 style="text-align:center">Laporan PPID Tahun 2023</h3>
              <p>
                <img src="{{asset('image/Laporan PPID 2023.jpg')}}" alt="" class="img-fluid" style="border:2px solid #3e5055">
              </p>
              <a href="https://drive.google.com/file/d/1oPQzR6G_6N24DU9FA0ugC0XVH-MnLFMf/view?usp=sharing" target="_blank" class="cta-btn">Unduh</a>              
              </div>
          </div>  
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
              <h3 style="text-align:center">Laporan PPID Tahun 2022</h3>
              <p>
                <img src="{{asset('image/Laporan PPID 2022.jpg')}}" alt="" class="img-fluid" style="border:2px solid #3e5055">
              </p>
              <a href="https://drive.google.com/file/d/1W91Xr9wWhfqbEy1hBtHk6tSajXrJsNy4/view?usp=sharing" target="_blank" class="cta-btn">Unduh</a>              
              </div>
          </div> 

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
              <h3 style="text-align:center">Laporan PPID Tahun 2020</h3>
              <p>
                <img src="{{asset('image/Laporan PPID 2020.jpg')}}" alt="" class="img-fluid" style="border:2px solid #3e5055">
              </p>
              <a href="https://drive.google.com/file/d/1nSJcOM9ss0SWfBr-nvn5PPcO8qY9CQNU/view?usp=sharing" target="_blank" class="cta-btn">Unduh</a>              
              </div>
          </div> 
         </div>
      </div>
    </section><!-- /Features Section -->

  </main>
@endsection
