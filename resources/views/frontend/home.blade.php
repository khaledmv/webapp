@extends('frontend.app')


@section('canonical')
<link rel="canonical" href="https://webaiid.com/" />
@endsection


@section('hero-content')
  @include('frontend.partial.hero')
@endsection


@section('content')

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-5">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Who We Are</h3>
            <h2>Integrated eCommerce Agency with Result-Driven Foresight </h2>
            <p>
              We started developing with Shopify in the very early days and have since helped hundreds of brands succeed on the platform
              Our mission is to help eCommerce businesses grow through innovation, consistency and quality of delivered Shopify solutions and services.
            </p>

            <div class="cta-btn" data-aos="fade-up" data-aos-delay="400">
              <div class="text-center text-lg-start">
                <a href="{{ route('contact-page')}}" class="ctn-btn-link">
                  <span>Get In Touch</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="composition">
            <img src="{{asset('assets/img/about/webdesign.jpg')}}" alt="webaiid digital agency" loading="lazy" class="composition__photo composition__photo--1">
            <img src="{{asset('assets/img/about/webdesign2.jpg')}}" alt="webaid shopify design" loading="lazy" class="composition__photo composition__photo--2">
            <img src="{{asset('assets/img/about/webdesign3.jpg')}}" alt="webaiid wordpress development" loading="lazy" class="composition__photo composition__photo--3">
          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->


     <!-- ======= Services Section ======= -->
     <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>WHAT WE DO</h2>
          <p>If you're ready to start a business, develop or scale on online, we have the solution</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box ">
              <ion-icon class="bx" name="albums-outline"></ion-icon>
              
              <h4 class="services__title">Digital Design & Services </h4>
              <h5>
                Web design,
                Custom web app development,
                User experience (UX),           
                Personalization and customization</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box ">
              <ion-icon class="bx" name="grid-outline"></ion-icon>
              <h4 class="services__title">Marketing</h4>
              <h5>Media strategy, eRetail / Amazon, Paid social, Audience planning, Content marketing, Media analytics</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box ">
              <ion-icon class="bx" name="analytics-outline"></ion-icon>
              <h4 class="services__title">SEO</h4>
              <h5>
                Search Engine Optimization (SEO),
                Paid search,
                Audience planning,
              </h5>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

<!-- ======= choose-us Section ======= -->
    <section class="choose-us" data-aos="fade-up" id="choose-us">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="choose-us__image">
              <img src="{{asset('assets/img/choose-us/circle.png')}}" alt="why-choose-us" loading="lazy">
            </div>
          </div>
          <div class="col-sm-12 col-md-6 choose-us__content-div">
            <div class="choose-us__content">
              <h2 class="choose-us__content-title geo">Why <span style="color: #FF498A;">choose</span> a digital marketing agency like <span style="color: #BFDD76;">Webaiid?</span></h2>
              <p>We win business because everything we do is about winning more business for the companies we serve. And we can prove our value. Every client sees our mission in action... We exist to help companies thrive, driving transformational growth through innovative digital marketing. </p>

              <a href="{{ route('contact-page')}}">
                Get In Touch 
                <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <!-- ======= End choose-us Section ======= -->

  <!-- ======= Features Section ======= -->
  <section id="why" data-aos="fade-up" class="features">

    <div class="container" >

      <header class="section-header design-portfolio">
        <h2>Portfolio </h2>
        <p>See Our Most Recent Work </p>
      </header>

      <div class="row">

        @foreach($portfolios as $portfolio )

        <div class="col-lg-6">
          <img src="{{ $portfolio->image_url }}" loading="lazy" class="img-fluid" alt="webaiid web design portfolio">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div  data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box portfolio-feature-box">
                <h4 class="feature-box__title"> {{ $portfolio->title }}</h4>
                <p class="feature-box__para">{{ $portfolio->para }}</p>
                <a class="feature-box__btn" href="{{ route('work-page')}}">{{$portfolio->buttonText}}<i class="bi bi-arrow-right"></i> </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div> <!-- / row -->


          <!-- ======= Testimonials Section ======= -->
          @if($reviews->count())
          <section id="testimonials" class="testimonials">
    
            <div class="container" data-aos="fade-up">
    
              <header class="section-header">
                <h2>Testimonials</h2>
                <p>What clients are saying about us</p>
              </header>
    
            
    
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
    
                  @foreach($reviews as $review)
    
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        {{ $review->review }}
                      </p>
                      <div class="profile mt-auto">
                        @if($review->image)
                        <img src="{{$review->image_url}}" loading="lazy" class="testimonial-img" alt="{{$review->name}}">
                        @endif
                        <h3>{{$review->name}}</h3>
                        <h4>{{ $review->tagline }}</h4>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->
    
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
    
            </div>
    
          </section>
          @endif
        <!-- End Testimonials Section -->
      

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6 marginBottm-6 ">
          <h3>Ready to take your brand
            to the next level?</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Shopify</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">WordPress</a>
            </li>
           
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Fully focus on business goals
                  and customer success</h4>
              </div>
              <p>We started developing with Shopify in the very early days and have since helped hundreds of brands succeed on the platform. Today our reputation as the go-to agency for everything Shopify & ecommerce proceeds us.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Fastest time-to-market solutions
                  from scratch</h4>
              </div>

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Quick Response</h4>
              </div>

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>24/7 Hours Support</h4>
              </div>

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Online Training</h4>
              </div>

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Share Weekly Market Tips</h4>
              </div>
              
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Responsive</h4>
              </div>
             
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Follow The Trends</h4>
              </div>

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Less Code Good Outcome</h4>
              </div>
            </div><!-- End Tab 2 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="assets/img/features-2.png" loading="lazy" class="img-fluid" alt="webaiid-webdesign-service" >
        </div>

      </div><!-- End Feature Tabs -->

    </div>

  </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->

 
  <section id="recent-blog-posts" class="recent-blog-posts">



    <div class="container aos-init aos-animate" data-aos="fade-up">
      @if ($posts->count())
      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>
      @endif
 

      <div class="row">

          @foreach ($posts as $post)
          <div class="col-lg-4">
            <div class="post-box">
              @if ($post->image_url)
              <div class="entry-img">
                <img src="{{ $post->image_url }}" loading="lazy" alt="{{$post->title }}" class="img-fluid">
              </div>
              @endif
              <span class="post-date">{{$post->created_at->diffForHumans(); }}</span>
              <h3 class="post-title"> {{ $post->title }}</h3>
              <a href="{{ route('blog.show', $post->slug ) }}">Read More</a>
            </div>
          </div>
          
        @endforeach

      </div>
    </div>

  </section>

  <!-- End Recent Blog Posts Section -->

@endsection