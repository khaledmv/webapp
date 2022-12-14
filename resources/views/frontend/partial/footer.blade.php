  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    @livewire('newsletter')

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{route('home-page')}}" class="logo d-flex align-items-center">
              <img src="{{asset('assets/img/webaiidlogo.png')}}" alt="web design shopify agency">
          
            </a>
            <p>We started developing with Shopify in the very early days and have since helped hundreds of brands succeed on the platform Our mission is to help eCommerce businesses grow through innovation, consistency and quality of delivered Shopify solutions and services</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('home-page')}}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('blog-page')}}">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('contact-page')}}">Services</a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a>Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a>Shopify Developemt</a></li>
              <li><i class="bi bi-chevron-right"></i> <a>Theme Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a>Shopify SEO & Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a>Custom Web App</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Boro Dewra, Mondol Market, Tongi <br>
              Dhaka, Bangladesh <br>
              <br>
              <strong>Phone:</strong> +880 1626537643<br>
              <strong>Email:</strong> info@webaiid.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>WebAiid</strong>. All Rights Reserved</strong>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  


<script>
  $(document).ready(function(){

    toastr.options = {
      "progressBar": true,
      "positionClass": "toast-top-right"
    }

    window.addEventListener('success', event => {
      toastr.success(event.detail.message);
    });

  });
</script>
  @stack('scripts');
  @livewireScripts
  <script src="//code.tidio.co/t8lxn6gv8zdoeemsalrmnblqc2oix6xt.js" async></script>
</body>
</html>