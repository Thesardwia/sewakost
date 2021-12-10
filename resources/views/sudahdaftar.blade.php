@extends('layouts.master')

@section('content')
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Mulai Perubahan dengan berkarir di AREAKERJA.com</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Community, Creativity, Comfort and More
          KAMU SISWA SMK ATAU MAHASISWA?
          CARI TEMPAT PKL, MAGANG, PRAKERIN
          OJT ATAU PRAKTIK KERJA</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="{{url('/login')}}"> </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Pemagang</h2>
      <p>{{Auth::user()->name}}</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-box blue">
          <i class="ri-discuss-line icon"></i>
          <h3>Absensi</h3>
          <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-box orange">
          <i class="ri-discuss-line icon"></i>
          <h3>Penyewaan Motor</h3>
          <a href="sewamotor" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-box green">
          <i class="ri-discuss-line icon"></i>
          <h3>Sewa Kost-kostn</h3>
          <a href="sewakost" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-box red">
          <i class="ri-discuss-line icon"></i>
          <h3>Catering</h3>
          <a href="catering" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Services Section -->
@endsection