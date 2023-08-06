@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/work/{{ $work->id}}/" />
@endsection


@section('content')
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{route('home-page')}}">Home</a></li>
              <li>Work</li>
            </ol>
            <h2>{{$work->title}}</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= work Section ======= -->

        <section class="portfolio-view" id="portfolio-view">
         <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="project-content">
                        <h4 class="project-content_subtitle">Web Design </h4>
                        <h2 class="project-content_title">{{ $work->title }}</h2>
                        <p class="project-content_excerpt">{{$work->excerpt}}</p>
                        <br>
                       <span class="project_category">{{ $work->techTitle }} </span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 view-001">
                    <div class="project-images">
                        @if($work->work_img )
                        <img class="project-images_item" src="{{ $work->work_img }}" loading="lazy" alt="{{ $work->title }}">

                        @endif 

                    </div>
                </div>
              </div>
         </div>
        </section>

        <section class="portfolio-details" id="portfolio-details">
          <div class="container" data-aos="fade">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="portfolio-details_title">
                  <div>Our Approach
                    Combining <span style="color:#FF498A;">tradition</span> with <br>
                    approachable <span style="color:#FF498A;">modernity</span>
                  </div>
                  
                  
                </div>
              </div>
              <div class="col-md-12 col-lg-12">
                <div class="portfolio-details_para">
                  <p>
                    {{ $work->body }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="work-result" id="work-result">
          <div class="container" data-aos="fade-in">
            <div class="row">
              <div class="col-md-12 col-lg-6">
               <h3 class="result-title">The Results</h3>
               <p class="result-title-para">The result of this project was a website that is fun to browse through as it has a very unique brand that conveys an inviting, colorful, joyful tone.</p>
               <div class="result-images_left">
                @if ($work->result1_img)
                <img src="{{ $work->result1_img }}" alt="{{ $work->title }} result-img-1" loading="lazy" class="result-image">
                @endif
               </div>
              </div>
              <div class="col-md-12 col-lg-6">
                <div class="result-images_right">
                  @if ($work->result2_img)
                  <img src="{{ $work->result2_img }}" alt="{{ $work->title }} resutl-img-2" loading="lazy" class="result-image">
                  @endif
                 </div>
              </div>
            </div>
          </div>
        </section>


        <section class="work-font" id="work-font">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-md-12">
                <h3 class="work-font_title">Expressive, Bold Fonts</h3>
                <p class="work-font-para">The font "Lobster"  effectively communicates who Indiana Sugars is: a friendly, family-based corporation providing sweeteners nationwide. Pairing Lobster with PT Sans and Fredoka gives the site a modern, corporate feel while Lobster emphasizes the company's approachability and personality.</p>

                <div class="work-font-images">
                  @if ($work->font_img)
                  <img src="{{ $work->font_img }}" alt="{{ $work->title }} font-img-2" loading="lazy" class="result-image">
                  @endif
                </div>

                <div class="color_name">
                  
                  @if ($work->color_img)
                  <img src="{{ $work->color_img }}" alt="{{ $work->title }} color-img-2" loading="lazy" class="result-image">
                  @endif
                </div>


              </div>
            </div>
          </div>
        </section>

        <!-- ======= End work Section ======= -->

@endsection