<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RentGhar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset{{ 'img/favicon.png' }}" rel="icon">
  <link href="asset{{ 'img/apple-touch-icon.png' }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!--Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

 
</head>

<body>


  <div class="click-closed"></div>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        
      <a class="navbar-brand text-brand {{ (strpos(Route::currentRouteName(), 'homepage') == 0) ? 'active' : '' }}" href="{{ route('homepage') }}">Rent<span class="color-b">Ghar</span></a>

      <div class="navbar-collapse collapse justify-content-center ml-10" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('user/about*')) ? 'active' : '' }}" href="{{ route('user.about') }}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('user/property/create*')) ? 'active' : '' }}" href="{{ route('user.property.create') }}">Submit Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->is('user/property-catalog*')) ? 'active' : '' }}" href="{{ route('user.property.catalog') }}">Catalog</a>
          </li>


          <li class="nav-item"> 
            <a class="nav-link {{ (request()->is('user/contact*')) ? 'active' : '' }}" href="{{ route('user.contact') }}">Contact</a>
          </li>

            @auth
            <li class="nav-item ">
              
              <a class="nav-link {{ (request()->is('user/dashboard*')) ? 'active' : '' }} " href="{{ route('user.dashboard') }}">                  <i class="bi bi-person-circle "></i> Dashboard </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="/logout">
                  @csrf
                  <Button type="submit"  class="nav-link"><i class="bi bi-box-arrow-right"></i> Log Out</Button>
                </form>
            </li>
            @else 
            <li class="nav-item">
              <a class="nav-link " href="{{ route('login') }}"><i class="bi bi-box-arrow-in-left"></i> LogIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('register') }}"><i class="bi bi-plus-circle"></i> Register</a>
            </li>
            @endguest

        </ul>
      </div>

    </div>


  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
 
@yield('content')

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">RentGhar</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                RentGhar is a website where you can post your property that you want to rent out. Or you can search for properties to rent and settle in.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +977 9803654317
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> tandukarprabesh@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quick Links</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="{{ route('user.about') }}">About</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="{{ route('user.property.create') }}">Submit Property</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="{{ route("user.property.catalog") }}">Catelog</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="{{ route("user.contact") }}">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">RentGhar</span> All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  
  {{-- <script>
    $(document).ready(function() {
      activeLinkControl()
    });

    function activeLinkControl(){
      $('.navbar-nav .nav-item a').click(function(){
        //remove active class from any of nav-item
        $('.nav-item').remove
        // $(this).closest('.nav-item').siblings().removeClass('active')
        //add active class to clicked item but at li not the anchor
        $(this).closest('.nav-item').addClass('active')
      })
    }
  </script> --}}

</body>

</html>