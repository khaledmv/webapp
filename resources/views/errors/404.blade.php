@extends('frontend.app')

@section('content')
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-5">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h1>404</h1>
            <h2>Sorry! We are not found ☣☢☣</h2>
           <a href="{{route('home-page')}}" class="btn btn-info">Go Home</a>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="composition">
            <img src="{{asset('assets/img/about/webdesign.jpg')}}" alt="webaiid webdesgin 1" class="composition__photo composition__photo--1">
            <img src="{{asset('assets/img/about/webdesign2.jpg')}}" alt="webaiid webdesgin 2" class="composition__photo composition__photo--2">
            <img src="{{asset('assets/img/about/webdesign3.jpg')}}" alt="webaiid webdesgin 3" class="composition__photo composition__photo--3">
          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->
@endsection

