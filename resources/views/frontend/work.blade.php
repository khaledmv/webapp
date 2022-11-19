@extends('frontend.app')

@section('hero-content')
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h3 data-aos="fade-up" class="contact-header__title" >We do hand-crafted beautiful designs that will help your store or services shine</h3>
          {{-- <h2 class="header__iconBox" data-aos="fade-up" data-aos-delay="400">
            <span class="header-icon"><ion-icon class="header-icon-orange" name="stats-chart-outline"></ion-icon> Increase Store Performance</span>
            <span class="header-icon"><ion-icon class="header-icon-orangered" name="speedometer-outline"></ion-icon> Fast Delivery</span>
           </h2> --}}
          {{-- <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{route('contact-page')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/portfolio.svg" class="img-fluid hero__svg" alt="">
          
        </div>
      </div>
    </div>
  
  </section>
@endsection


@section('content')
  <section class="work__section">
      <!-- work three -->
    <div class="container work__container" data-aos="fade-up">
      <div class="row gx-5">
        <div class="col-lg-6 d-flex flex-column justify-content-center work__content-1" data-aos="fade-up" data-aos-delay="200">
          <div class="work__content">

            <h1 class="work__title"> <a href="https://nazakah.com/"><i class="bi bi-arrow-90deg-up"></i></a> Nazakah  </h1>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Shopify Development</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>SEO and Data Migration</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Conversion Optimisation</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Ongoing Support</p>
            </div>

          </div>
        </div>
    
        <div class="col-lg-6 d-flex align-items-center work__img-1" data-aos="zoom-out" data-aos-delay="200">
          
            <div class="work">
              <img src="{{asset('assets/img/work/work-three.png')}}" class="work_img" alt="shopify work portfolio">
            </div>
        
        </div>
      </div>
    </div>

       <!-- work four -->
    <div class="container work__container" data-aos="fade-up">
      <div class="row gx-5">
        
       
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          
            <div class="work">
              <img src="{{asset('assets/img/work/work-four.png')}}" class="work_img" alt="shopify work portfolio">
            </div>
        
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="work__content">

            <h1 class="work__title"> <a href="https://wearbriefly.com/"><i class="bi bi-arrow-90deg-up"></i></a> Wearbriefly  </h1>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Shopify Development</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>UI/UX</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>SEO and Data Migration</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Conversion Optimisation</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Ongoing Support</p>
            </div>

          </div>
        </div>

      </div>
    </div>

     <!-- work two -->
     <div class="container work__container" data-aos="fade-up">
      <div class="row gx-5">
        <div class="col-lg-6 d-flex flex-column justify-content-center work__content-1" data-aos="fade-up" data-aos-delay="200">
          <div class="work__content">

            <h1 class="work__title"> <a href="https://espiart.com/"><i class="bi bi-arrow-90deg-up"></i></a> Espiart T-shirt Brand  </h1>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Shopify Development</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>UI/UX</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>SEO and Data Migration</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Conversion Optimisation</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Ongoing Support</p>
            </div>

          </div>
        </div>
    
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          
            <div class="work">
              <img src="{{asset('assets/img/work/work-two.png')}}" class="work_img" alt="shopify work portfolio">
            </div>
        
        </div>
      </div>
    </div>
     <!-- work one -->
     <div class="container work__container" data-aos="fade-up">
      <div class="row gx-5">
        
       
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          
            <div class="work">
              <img src="{{asset('assets/img/work/work-one.png')}}" class="work_img" alt="shopify work portfolio">
            </div>
        
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="work__content">

            <h1 class="work__title"> <a href="https://iliabeauty.com/"><i class="bi bi-arrow-90deg-up"></i></a> Beauty  </h1>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Shopify Development</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>UI/UX</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>SEO and Data Migration</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Conversion Optimisation</p>
            </div>
            <div class="work__feture">
              <i class="bi bi-check2"></i><p>Ongoing Support</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection