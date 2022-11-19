@extends('frontend.app')




@section('content')
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{route('home-page')}}">Home</a></li>
              <li>Blog</li>
            </ol>
            <h2>Blog</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
    
              <div class="col-lg-8 entries">

                <article class="entry entry-single">
    
                  <div class="entry-img">
                    <img src="{{$post->image_url}}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                     {{$post->title }}
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                   
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at->diffForHumans()}}</time></a></li>

                    </ul>
                  </div>
    
                  <div class="entry-content">
                    {!! $post->post_body!!}
                  </div>
    
                  <div class="entry-footer">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                      <li><a href="{{route('blog.category', $post->category->slug)}}">{{$post->category->title }}</a></li>
                    </ul>
    
                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                      @foreach ($post->tags as $tag)
                      <li><a href="{{route('blog.tag', $tag->slug )}}">{{$tag->name}}</a></li>
                          
                      @endforeach
                     
                    </ul>
                  </div>
    
                </article><!-- End blog entry -->
    
             
    
              </div><!-- End blog entries list -->
    
              <div class="col-lg-4">
    
               @include('frontend.partial.sidebar')
    
              </div><!-- End blog sidebar -->
    
            </div>
    
          </div>
        </section><!-- End Blog Section -->
@endsection