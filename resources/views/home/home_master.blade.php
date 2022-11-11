<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <base href="/public">
    <title>E-commerce-2</title>
    <link rel="icon" href="{{'home/assets/images/favicon.png'}}">
    <link rel="stylesheet" href="{{'home/assets/css/owl.carousel.css'}}">
    <link rel="stylesheet" href="{{'home/assets/css/owl.theme.default.css'}}">
    <link rel="stylesheet" href="{{'home/assets/css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{'home/assets/fonts/bootstrap-icons.css'}}">
    <link rel="stylesheet" href="{{'home/assets/sass/main.css'}}">
  </head>
  <body>
    <!-- navbar -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{'home/assets/images/ecommerce-logo-png-11.png'}}" alt="" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/product')}}">Shop</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Route::has('login'))
                @auth
                <li class="nav-item">
                  <a href="{{url('/orders')}}" class="nav-link">
                    Orders
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="bi bi-heart"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/show_cart')}}">
                    <i class="bi bi-cart4 position-relative">
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:12px;">1</span>
                    </i>
                  </a>
                </li>
                <li class="nav-item ml-3">
                  <x-app-layout></x-app-layout>
                </li>

                @else
                <li class="nav-item">
                  <a href="{{url('login')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('register')}}" class="nav-link">Register</a>
                </li>
                @endauth
                @endif
              </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- End navbar -->
    @yield('home')

    <!-- Footer -->
    <footer class="borer-top py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img src="assets/images/ecommerce-logo-png-11.png" height="40" alt="" class="">
            <h3 class="mt-3">Get The App</h3>
            <p class="">NEfresh App is now available on Google Play & App Store.Get it now </p>
            <img src="assets/images/store1.png" alt="" class="">
            <img src="{{'home/assets/images/store2.png'}}" alt="" class="">
          </div>
          <div class="col-lg-3">
            <h4 class="">Information</h4>
            <ul class="footer-list">
              <li> <a href="" class="">About Us</a> </li>
              <li> <a href="" class="">Shipping Policy</a> </li>
              <li> <a href="" class="">Terms & Conditions</a> </li>
              <li> <a href="" class="">Privacy Policy</a> </li>
              <li> <a href="" class="">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4 class="">Use Area</h4>
            <ul class="footer-list">
              <li> <a href="" class="">My Account</a> </li>
              <li> <a href="" class="">My Cart</a> </li>
              <li> <a href="" class="">Login</a> </li>
              <li> <a href="" class="">Checkout</a> </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4 class="">Contact Info</h4>
            <p class="">01742042069</p>
            <p class="">509 724 580 - issued in New York (NY) on 03/11/2021, expires 08/11/2022 </p>
            <p class="">Support@eshop.com</p>
          </div>
        </div>
        <hr>
        <div class="text-center copyright-text mt-3">
          <a href="" class="">Copyright &copy; 2022 <span class="text-danger fw-bold">Web Burden</span> </a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div class="loading" id="loader">
      <img src="{{'home/assets/images/preloader.svg'}}" alt="">
    </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
      setTimeout(()=>{
        document.getElementById('loader').style.display = "none"
      },1000);
    </script>

    <script src="{{'home/assets/js/bootstrap.bundle.js'}}">

    </script>
    <script>
    $(document).ready(function(){
      var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            dots:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
      });
  </script>
    <script src="{{'home/assets/js/owl.carousel.js'}}">

    </script>


  </body>
</html>
