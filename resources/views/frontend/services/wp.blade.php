@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/services/wordpress-development/" />
@endsection

@section('hero-content')
  <section id="work_hero" class="hero work-hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 data-aos="fade-up" class="contact-header__title" >WordPress Website Design</h1>
        </div>
      </div>
    </div>
  
  </section>
@endsection


@section('content')
 <section class="webdesign-preview" id="webdesign-preview">
   <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="webdesign-preview__content">
                <h2 class="webdesign-preview__content-header">Custom WordPress design <br> with bottom-line impact.</h2>
                <p class="webdesign-preview__content-des">We believe your website should be more than just a fancy brochure—it should drive sales. Our web development team integrates marketing strategy into every aspect of your WordPress website so it attracts, engages, and converts more visitors into lifelong customers.</p>

                <button class="btn btn-proposal"><a href="{{ route('contact-page')}}">I want a proposal</a></button>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="webdesign-preview__images">
                <img src="{{ asset('assets/img/services/wp/wp-large.webp')}}" class="webdesign-preview__image" loading="lazy" alt="webaiid webdesign process">
            </div>
        </div>
    </div>
   </div>
 </section>


 <section class="webdesign-branding" id="webdesignBranding">

    <div class="container">
      <header class="section-header">
        <h2>WHAT WE DO</h2>
        <p>We approach WordPress websites differently</p>
      </header>
    
        <div class="webdesign-card__box">
           <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="branding__card branding__card-center">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon1.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set1">
                    </div>
    
                    <h3 class="branding__card-title">Flexible design</h3>
                    <p class="branding__card-des">
                      Our industry-leading design team listens to your needs, your wish list, and collaborates with you to create a beautiful, user-friendly WordPress website that puts you in control. You'll be able to manage and implement future modifications with ease.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="branding__card seo-icon branding__card-center">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon3.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set12">
                    </div>
    
                    <h3 class="branding__card-title">User-friendly</h3>
                    <p class="branding__card-des">
                      It’s critical that your new website is as flexible as you are. That's why we ensure your site is easy to manage without a programmer. You’ll be able to create and duplicate new pages, schedule and publish content, and preview design changes effortlessly.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="branding__card branding__card-center">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon12.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set3">
                    </div>
    
                    <h3 class="branding__card-title">SEO-ready</h3>
                    <p class="branding__card-des">
                      <a href="{{ route('seo-page')}}">Search Engine Optimization</a> is essential for online business growth. Our architects consider search engine guidelines and best practices from conception to launch, enabling you to deploy an effective SEO campaign from day 1.
                    </p>
                </div>
            </div>
           </div>
        </div>
    </div>
 

 </section>

 <!-- section 3 --> 
 <section class="seo-page__sec3">
  <div class="container seo-page__sec3-container">
    <div class="seo-page__sec3-content">  

          <div class="seo-page__sec3-content-box">
            <h2 class="seo-page__sec3-title">What can we build for you?</h2>
            <p class="seo-page__sec3-des">We're eager to hear your dreams, needs, and goals for your new WordPress website.</p>
          </div>
          <a class="seo-page__sec3-btn" href="{{ route('contact-page')}}"> Get In Touch </a>

    </div>
  </div>
 </section>
<!-- section 3 -->

<section class="webdesign-preview" id="webdesign-preview">
  <div class="container">
   <div class="row">
       <div class="col-sm-12 col-md-6">
           <div class="webdesign-preview__content">
               <h2 class="webdesign-preview__content-header">Sales-generating <br> WordPress sites.</h2>
               <p class="webdesign-preview__content-des">Online success hinges on how effectively your website attracts, convinces, and converts new visitors. Take a look at our WordPress design case studies. You’ll see how we take our work seriously—to accomplish serious growth for your business.</p>

               <button class="btn btn-proposal"><a href="{{ route('work-page')}}">See Our Design</a></button>
           </div>
       </div>
       <div class="col-sm-12 col-md-6">
           <div class="webdesign-preview__images">
               <img src="{{ asset('assets/img/services/wp/wordpress-portfolio.webp')}}" class="webdesign-preview__image" loading="lazy" alt="wordpress portfolio">
           </div>
       </div>
   </div>
  </div>
</section>

@endsection