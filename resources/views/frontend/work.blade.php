@extends('frontend.app')

@section('hero-content')
  <section id="work_hero" class="hero work-hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 data-aos="fade-up" class="contact-header__title" >We do hand-crafted beautiful designs that will help your store or services shine</h1>
        </div>
      </div>
    </div>
  
  </section>
@endsection


@section('content')
  <section class="work__section">

    <div class="container">
        
    <div class="work_gallery">
      <div class="gallery_images">

        @foreach ($works as $work)
        <div class="gallery_images-container">
          <a href=" {{ route('work.show', $work->id )}}" class="img-box">
            <img src="{{ $work->work_img }}" loading="lazy"  class="gallery_image" alt="{{ $work->title }}"> 
          </a>
          <span class="image-cpt-box"> <a href="{{ route('work.show', $work->id)}}"> View Details</a></span>
        </div>
        @endforeach
      </div>
    </div>
    </div>

  </section>
@endsection