<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {!! SEOMeta::generate() !!}
  {!! OpenGraph::generate() !!}
  {!! Twitter::generate() !!}

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/favicon/apple-touch-icon.png')}}" rel="apple-touch-icon">
   <!-- Boxicon -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YZKF52QT2T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YZKF52QT2T');
</script>



  <script>
    (function(d, w, c) {
        w.ChatraID = 'geieStjankjxd7CN2';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>


  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home-page')}}" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo-web.png')}}" loading="lazy" alt="web design shopify agency">
        
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="{{route('home-page')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('blog-page')}}">Blog</a></li>
          <li><a class="nav-link scrollto" href="{{route('work-page')}}">Work</a></li>
          <li><a class="getstarted scrollto" href="{{ route('contact-page')}}">Get A Quote</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    @livewireStyles
  </header><!-- End Header -->

 