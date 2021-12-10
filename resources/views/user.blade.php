@extends('layouts.master')
@section('hero')
<!-- ======= Hero Section ======= -->
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
          <a href="{{url('/formulir')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Daftar disini</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/hero-img.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->
@endsection