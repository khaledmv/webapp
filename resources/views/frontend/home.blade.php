@extends('frontend.app')

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


     <!-- ======= Services Section ======= -->
     <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>WHAT WE DO</h2>
          <p>If you're ready to start a Business, develop or scale on Shopify we have the solution</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box ">
              <ion-icon class="bx" name="cog-outline"></ion-icon>
              <h1 class="services__title">Web Design & Development</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box ">
              <ion-icon class="bx" name="grid-outline"></ion-icon>
              <h1 class="services__title">Shopify Theme Tweeks & Changes</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box ">
              <ion-icon class="bx" name="analytics-outline"></ion-icon>
              <h1 class="services__title">Shopify SEO & Content Marketing</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box ">
              <ion-icon class="bx" name="albums-outline"></ion-icon>
              <h1 class="services__title">Product Landing Page</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box ">
              <ion-icon class="bx" name="stopwatch-outline"></ion-icon>
              <h1 class="services__title">Monthly Shopify Support</h1>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box">
              <ion-icon class="bx" name="code-working-outline"></ion-icon>
              <h1 class="services__title">Custom Shopify Theme Development</h1>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box">
              <ion-icon class="bx" name="bug-outline"></ion-icon>
              <h1 class="services__title">Shopify Store Audits</h1>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box">
              <ion-icon class="bx" name="stats-chart-outline"></ion-icon>
              <h1 class="services__title">Increase Store Conversation </h1>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box">
              <ion-icon class="bx" name="hourglass-outline"></ion-icon>
              <h1 class="services__title">Shopify Performance Optimization</h1>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    

  <!-- ======= Features Section ======= -->
  <section id="why" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Why we are ???</h2>
        <p>Because we get the job done. On time. On budget. To the highest standards</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Fast Delivery</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Trusted Brand</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Supporting Team</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>On-time Delivery</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Free Consultancy</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6 marginBottm-6 ">
          <h3>Ready to take your brand
            to the next level?</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Trusted Brand</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">Design Corner</a>
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
                <h4>2 months of warranty</h4>
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

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>SEO Optimized Code</h4>
              </div>
            </div><!-- End Tab 2 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="assets/img/features-2.png" class="img-fluid" alt="">
        </div>

      </div><!-- End Feature Tabs -->

      <!-- Feature Icons -->
      <div class="row feature-icons" data-aos="fade-up">
        <h3 class="py-4">WooCommerce to Shopify Migration Service</h3>

        <div class="row">

          <div class="col-xl-4 marginBottm-6 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Store Convert Into Shopify</h4>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Import Export Data</h4>
                  
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Custom or Similar Design</h4>
                  
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Third-party App Integration</h4>
                  
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>SEO Optimize</h4>
                  
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Store Maintain & Supporting</h4>
                  
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- End Feature Icons -->

    </div>

  </section><!-- End Features Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Testimonials</h2>
        <p>What they are saying about us</p>
      </header>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->


  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Clients</h2>
        <p>Temporibus omnis officia</p>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Tue, September 15</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Fri, August 28</span>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Mon, July 11</span>
            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

@endsection