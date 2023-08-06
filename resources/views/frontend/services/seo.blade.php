@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/services/search-engine-optimization/" />
@endsection

@section('hero-content')
  <section id="work_hero" class="hero work-hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 data-aos="fade-up" class="contact-header__title" >SEO Services Customized to Grow <br> Your Business</h1>
        </div>
      </div>
    </div>
  
  </section>
@endsection


@section('content')
   <section class="seo-page" id="seo-page">
    <div class="container">
      <div class="row seo-content1">
          <div class="col-sm-12 col-md-6">
              <div class="webdesign-preview__content">
                  <h2 class="webdesign-preview__content-header">Why is SEO important to 
                    <br> your business?</h2>
                  <p class="webdesign-preview__content-des">Every day, 8.5 billion searches occur on Google. 90% of visits from those searches go to the first ten websites listed. So if your website isn’t appearing at the top of the list for words and phrases related to your products and services, you're missing real revenue potential. If that alone doesn’t motivate you to get serious about SEO, check out our article on the benefits of investing in SEO.</p>
  
                  <button class="btn btn-proposal"><a href="{{ route('contact-page')}}">Send Me a Proposal</a></button>
              </div>
          </div>
          <div class="col-sm-12 col-md-6">
              <div class="webdesign-preview__images">
                  <img src="{{ asset('assets/img/services/seo/webaiid-seo.png')}}" class="webdesign-preview__image" loading="lazy" alt="webaiid-seo">
              </div>
          </div>
      </div>
     </div>
   </section>

  <!-- section 2 --> 
   <section class="seo-page__sec2" id="seo-page_sec2">
    <header class="section-header">
      <h2>search engine optimization.</h2>
      <p>Your business growth is being <br>
        hampered by online visibility issues.</p>
    </header>


    <div class="container">
      <div class="online-visibilty-container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo-icon2.png')}}" loading="lazy" alt="seo-icon-2">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">Low, No, or Poor
                  Online Reputation</h3>
                <p class="visibility-box__content-des">More than 90% of Internet users say their purchase decisions are heavily influenced by online reviews. Additionally, more than 80% of consumers look for Google reviews first because Google is trusted as an unbiased source of information. Leverage SEO and customer reviews to attract and convert leads!</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo-icon.png')}}" loading="lazy" alt="seo-icon-2">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">Low Organic Search Visibility</h3>
                <p class="visibility-box__content-des">Organic search results are the unpaid listings that appear in search engine results. Not only is being listed within the top 10 results critical, it is achievable. Our holistic SEO strategies connect the dots between what people are searching for and what you offer. First attract, then engage and convert.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo-icon3.png')}}" loading="lazy" alt="seo-icon-2">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">Few or No Website Inquiries</h3>
                <p class="visibility-box__content-des">SEO done right plays an integral role in lead generation and business growth—ROI should be easy to see! We focus on improving your visibility, resulting in targeted website traffic ready to convert. From B2B services to ecommerce to brick-and-mortar, customer acquisition is the name of the SEO game.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
 <!-- section 2 --> 

<!-- section 3 --> 
 <section class="seo-page__sec3">
  <div class="container seo-page__sec3-container">
    <div class="seo-page__sec3-content">  

          <h2 class="seo-page__sec3-title">Request your free SEO audit.</h2>
          <a class="seo-page__sec3-btn" href="{{ route('contact-page')}}"> Free Audit </a>

    </div>
  </div>
 </section>
<!-- section 3 -->

<!-- section 4 -->
 <section class="seo-page__sec4" id="seo-page">
  <div class="container">
    <div class="row seo-content1">
        <div class="col-sm-12 col-md-6">
          <div class="webdesign-preview__images">
              <img src="{{ asset('assets/img/services/seo/search-engine-optimization2.png')}}" class="webdesign-preview__image" loading="lazy" alt="webaiid-seo-consultant">
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="webdesign-preview__content">
                <h2 class="webdesign-preview__content-header">How SEO changes 
                  <br>the Internet marketing game.</h2>
                <p class="webdesign-preview__content-des">SEO flips the script on traditional paid marketing tactics because results compound over time. A solid SEO strategy has a consistent "slow burn" that yields more results for less cost than paid advertising. Your website can also continue to draw valuable organic traffic from strong SEO efforts for years to come, even during periods of SEO inactivity.</p>
                <p class="webdesign-preview__content-des">Statistically, less than 20% of Google searchers click on paid advertisements, making it essential for business to earn visibility within the organic results to connect with the vast majority of potential customers. Meet with one of our strategists and see how SEO can change the trajectory of your business.</p>

                <button class="btn btn-proposal"><a href="{{ route('contact-page')}}">Send Me a Proposal</a></button>
            </div>
        </div>
        
    </div>
   </div>
 </section>
 <!-- section 4 -->
 <!-- section 5 -->

 <section class="seo-page__sec5">
   <div class="container">
    <div class="seo-page__sec5-header">
      <div class="sec5-header-content__left">
        <h2>Why choose us for SEO?</h2>
        <p>We Provide Best SEO services that drive growth.</p>
      </div>
      <div class="sec5-header-content__right">
        <ion-icon class="star-outline" name="star"></ion-icon>
        <ion-icon class="star-outline" name="star"></ion-icon>
        <ion-icon class="star-outline" name="star"></ion-icon>
        <ion-icon class="star-outline" name="star"></ion-icon>
        <ion-icon class="star-outline" name="star"></ion-icon>
    
      </div>
    </div>

    
    <div class="seo-page__sec5-service-container">
      <div class="online-visibilty-container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo4.png')}}" loading="lazy" alt="webaiid-local-seo">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">Local SEO</h3>
                <p class="visibility-box__content-des">When local searchers see your business first, you’ll see your business grow! 76% of consumers looking for a local business online make an in-store visit within 24 hours. And with 37,000 localized searches occurring every second on Google, local SEO delivers a strong ROI. Improving visibility and engagement with your local listings is a proven way to reach the people ready to buy exactly what you’re offering.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo5.png')}}" loading="lazy" alt="webaiid-international-seo">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">National SEO</h3>
                <p class="visibility-box__content-des">Online brand reputation matters. Our national SEO strategy builds your reputation and bolsters your bottom line by improving Google's understanding of your expertise and industry authority. Positioning your brand as an authoritative and trustworthy source is the key to capturing high-value search phrases that drive more business. Take the next step toward nationwide visibility—we'd love to talk!</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="visibility-box">
              <div class="visibility-box__icon">
                <img src="{{asset('assets/img/services/seo/seo6.png')}}" loading="lazy" alt="webaiid-business-seo">
              </div>
              <div class="visibility-box__content">
                <h3 class="visibility-box__content-title">Ecommerce SEO</h3>
                <p class="visibility-box__content-des">Our ecommerce SEO strategy is a solution proven to provide better organic visibility, more traffic, additional sales, and increased revenue. Selling more products online is a direct result of improving your site's online visibility! Ecommerce SEO is a critical component of marketing for any ecommerce business, and nobody does it better than the experienced team at RivalMind.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   </div>
 </section>
 <!-- section 5 -->

@endsection