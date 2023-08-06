@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/services/shopify-development/" />
@endsection

@section('hero-content')
  <section id="work_hero" class="hero work-hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 data-aos="fade-up" class="contact-header__title" >Shopify Store Design</h1>
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
               <h2 class="webdesign-preview__content-header">We're Shopify <br> development partners.</h2>
               <p class="webdesign-preview__content-des">Opening—or improving—your online store has never been easier. As a Shopify development partner, RivalMind is uniquely qualified to help you design a beautifully branded experience, while accommodating for rare use cases, workflows, system integrations, and custom functionality needs.</p>

               <button class="btn btn-proposal"><a href="{{ route('contact-page')}}">I want a proposal</a></button>
           </div>
       </div>
       <div class="col-sm-12 col-md-6">
           <div class="webdesign-preview__images">
               <img src="{{ asset('assets/img/services/shopify/shopify-header-img.webp')}}" class="webdesign-preview__image" loading="lazy" alt="shopify-design">
           </div>
       </div>
   </div>
  </div>
</section>


<section class="webdesign-branding" id="webdesignBranding">

   <div class="container">
     <header class="section-header">
       <h2>Shopify Design</h2>
       <p>Why Shopify for ecommerce.</p>
     </header>
   
       <div class="webdesign-card__box">
          <div class="row">
           <div class="col-md-6 col-lg-4">
               <div class="branding__card seo branding__card-center">
                   <div class="icon-box">
                       <img src="{{ asset('assets/img/services/webdesign/web design icon1.png')}}" class="icon-image" loading="lazy" alt="webdesign icon set1">
                   </div>
   
                   <h3 class="branding__card-title shopify">Customizable and <br> Feature Rich</h3>
                   <p class="branding__card-des shopify">
                    From graphic design to systems integration, Shopify's robust ecommerce platform provides unlimited customization opportunities down to the code level. Whether you're selling wedding dresses or widgets, our team will create your dream marketing tool, designed to convert visitors and drive revenue.
                   </p>
               </div>
           </div>
           <div class="col-md-6 col-lg-4">
               <div class="branding__card branding__card-center">
                   <div class="icon-box ">
                       <img src="{{ asset('assets/img/services/shopify/shopify-icon-2.webp')}}" class="icon-image" loading="lazy" alt="webdesign icon set12">
                   </div>
   
                   <h3 class="branding__card-title shopify" >Marketing Channel <br> Integrations</h3>
                   <p class="branding__card-des shopify">
                    With direct integrations to most of the world's largest social media platforms and ecommerce marketplaces, Shopify can sync your store and seamlessly market your products across critical revenue-generating channels like Google, Facebook, Instagram, Etsy, Pinterest, TikTok, and Amazon.
                   </p>
               </div>
           </div>
           <div class="col-md-6 col-lg-4">
               <div class="branding__card branding__card-center">
                   <div class="icon-box">
                       <img src="{{ asset('assets/img/services/shopify/shopify-icon-3.webp')}}" class="icon-image" loading="lazy" alt="webdesign icon set3">
                   </div>
   
                   <h3 class="branding__card-title shopify" >Local to Global <br> Expansion</h3>
                   <p class="branding__card-des shopify">
                    From a single brick-and-mortar location to a global enterprise, Shopify offers a wide array of built-in tools to foster growth, including multinational currency, VAT tax, and various shipping options. Any business can effectively market products online and scale operations without limits.
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
              <h2 class="webdesign-preview__content-header">Our Shopify websites <br> increase revenue.</h2>
              <p class="webdesign-preview__content-des">And we can prove it! Beyond elegant and on-brand, our Shopify websites increase loyalty, drive conversions, generate larger average order sizes, and improve overall customer satisfaction. Take a moment to view our design work and impressive results.</p>

              <button class="btn btn-proposal"><a href="{{ route('work-page')}}">See More</a></button>
          </div>
      </div>
      <div class="col-sm-12 col-md-6">
          <div class="webdesign-preview__images">
              <img src="{{ asset('assets/img/services/shopify/shopifyportfolios.webp')}}" class="webdesign-preview__image" loading="lazy" alt="wordpress portfolio">
          </div>
      </div>
  </div>
 </div>
</section>
@endsection