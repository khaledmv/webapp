@extends('frontend.app')

@section('canonical')
<link rel="canonical" href="https://webaiid.com/blog/" />
@endsection

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

              @if($search = request('search'))
                  <div class="alert alert-success" role="alert">
                    Search Results For : {{ $search }}
                  </div>
              @endisset

              @foreach ($posts as $post)
                  <article class="entry">
        
                   @if ($post->image)
                   <div class="entry-img">
                    <img src="{{ $post->image_url }}" loading="lazy" alt="{{$post->title }}" class="img-fluid">
                  </div>
                   @endif
      
                    <h2 class="entry-title">
                      <a href="{{ route('blog.show', $post->slug ) }}">{{ $post->title }}</a>
                    </h2>
      
                    <div class="entry-meta">
                      <ul>
                        
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="{{$post->created_at->diffForHumans(); }}">{{$post->created_at->diffForHumans(); }}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-folder2"></i> <a href="{{route('blog.category', $post->category->slug )}}">{{ $post->category->title }}</a></li>
                      </ul>
                    </div>
      
                    <div class="entry-content">

                     

                        {!! $post->post_excerpt!!}

                      <div class="read-more">
                        <a href="{{ route('blog.show', $post->slug ) }}">Read More</a>
                      </div>
                    </div>
      
                  </article><!-- End blog entry -->
              @endforeach
               
            
    
               
                <div class="blog-pagination">
                  {{$posts->appends(request()->only(['search']))->links() }}
                </div>
    
              </div><!-- End blog entries list -->
    
              <div class="col-lg-4">
    
               @include('frontend.partial.sidebar')
    
              </div><!-- End blog sidebar -->
    
            </div>
    
          </div>
        </section><!-- End Blog Section -->
@endsection