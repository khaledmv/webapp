@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/contact/" />
@endsection

@section('hero-content')
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Let's work together to accelerate your digital strategy!</h1>
        <h2 class="header__iconBox" data-aos="fade-up" data-aos-delay="400">
          <span class="header-icon"><ion-icon class="header-icon-orange" name="stats-chart-outline"></ion-icon> Increase Store Performance</span>
          <span class="header-icon"><ion-icon class="header-icon-orangered" name="speedometer-outline"></ion-icon> Fast Delivery</span>
         </h2>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/contact.svg" loading="lazy" class="img-fluid hero__svg" alt="webaiid get a quote">
        
      </div>
    </div>
  </div>

</section>
@endsection


@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        @if(session('success'))
                {{ session('success') }}
        @endif

        <header class="section-header">
          <h2>Contact</h2>
          <p>How Can We Help?</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dhaka, 1230</h3>
                  <p>Bangladesh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+8801626 537643 <br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@webaiid.com<br>shopify.khaled@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday<br>EST 8:00AM - 10:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          
            @livewire('livewire-contact-form')

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->


@endsection