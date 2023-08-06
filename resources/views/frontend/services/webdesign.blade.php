@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/services/web-design/" />
@endsection

@section('hero-content')
  <section id="work_hero" class="hero work-hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 data-aos="fade-up" class="contact-header__title" >A Web Design Company <br>
            That Delivers Results</h1>
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
                <h2 class="webdesign-preview__content-header">Websites with style, purpose
                <br>and strategy</h2>
                <p class="webdesign-preview__content-des">You only have seconds... Does a glance at your current website effectively communicate who you are, what you do, and why it matters to your visitor? Our web design blends beautiful on-brand design with intentional marketing strategy to ensure your website both captivates and converts. We believe your website should actively draw an audience, connect with them, and most importantly, motivate them to take action</p>

                <button class="btn btn-proposal"><a href="{{ route('contact-page')}}">I want a proposal</a></button>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="webdesign-preview__images">
                <img src="{{ asset('assets/img/services/webdesign/webdesign.png')}}" class="webdesign-preview__image" loading="lazy" alt="webaiid webdesign process">
            </div>
        </div>
    </div>
   </div>
 </section>

 <section class="container webdesign-steps" id="webdesign-steps">
    <header class="section-header">
        <h2>WHAT WE DO</h2>
        <p>Web Design & Development Process </p>
    </header>
    <div class="webdesign-steps__div">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-box">
                    
                   
                        <img src="{{ asset('assets/img/services/webdesign/process1.png')}}" class="service-box_image" loading="lazy" alt="webaiid webdesign steps 01">
                 
                    <h3 class="services__title">STEP 01</h3>
                    <p>Site Architecture and Wireframes</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process2.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 02">
                    <h3 class="services__title">STEP 02</h3>
                    <p>A Preview of Your Design</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process3.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 03">
                    <h3 class="services__title">STEP 03</h3>
                    <p>Homepage Design Mockup</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process4.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 04">
                    <h3 class="services__title">STEP 04</h3>
                    <p>Page Build out and Content </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process5.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 04">
                    <h3 class="services__title">STEP 05</h3>
                    <p>Client Review and Feedback </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process6.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 04">
                    <h3 class="services__title">STEP 06</h3>
                    <p>Mobile Device QA and Optimization </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process7.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 04">
                    <h3 class="services__title">STEP 07</h3>
                    <p>Final Website Quality Check and Testing</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-box ">
                    
                    <img src="{{ asset('assets/img/services/webdesign/process8.png')}}" loading="lazy" class="service-box_image" alt="webaiid webdesign steps 04">
                    <h3 class="services__title">STEP 08</h3>
                    <p>Final Approval and Website Launch</p>
                </div>
            </div>
           
 
        </div>
    </div>
 </section>


 <section class="webdesign-branding" id="webdesignBranding">

    <div class="container">
        <header class="section-header webdesign-branding__header">
            <h3>What could your website be doing for you right now?</h3>
            <p>It should be competing for salesperson of the year! </p>
        </header>
    
        <div class="webdesign-card__box">
           <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="branding__card">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon1.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set1">
                    </div>
    
                    <h3 class="branding__card-title">Upgrade Your Brand's 
                        Representation</h3>
                    <p class="branding__card-des">
                        From colors to imagery and content, RivalMind will ensure your branding is communicated clearly, consistently and cohesively across your entire website. Visitors take about three seconds to decide if they can trust a website, so your first impression is key to converting visitors into repeat customers.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="branding__card">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon12.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set12">
                    </div>
    
                    <h3 class="branding__card-title">Enhance Your Search 
                        Engine Visibility</h3>
                    <p class="branding__card-des">
                        Our web design team works closely with our in-house SEO experts to develop a comprehensive strategy for your website. This form-and-function teamwork ensures that the new architecture and page elements of your website include all the tools needed for search engine optimization success.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="branding__card">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/services/webdesign/web design icon3.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set3">
                    </div>
    
                    <h3 class="branding__card-title">Boost Your Conversion 
                        Rates</h3>
                    <p class="branding__card-des">
                        Your website will be designed with your target audience in mind, guiding visitors down the path to conversion. Simply providing information about your company is no longer sufficient in today's digital landscape. It's crucial to engage, establish trust, and inspire visitors to action.
                    </p>
                </div>
            </div>
           </div>
        </div>
    </div>
 

 </section>
@endsection