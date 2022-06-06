@extends('layouts/header-footer')
@section('content')
<body>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('/img/slide-1.jpg')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Happy </span> Home
                      <br> Happy Faces
                    </h1>
                    <p class="intro-title-top">Find your place with an immersive photo experience,and the most listings, 
                      <br> including things you won’t find anywhere else.
                    </p>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('user.property.create') }}"><span class="price-a">Post Your Property</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('/img/slide-2.jpg')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Happy </span> Home
                      <br> Happy Faces
                    </h1>
                    <p class="intro-title-top">Find your place with an immersive photo experience,and the most listings, 
                      <br> including things you won’t find anywhere else.
                    </p>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('user.property.create') }}"><span class="price-a">Post Your Property</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('/img/slide-3.jpg')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Happy </span> Home
                      <br> Happy Faces
                    </h1>
                    <p class="intro-title-top">Find your place with an immersive photo experience,and the most listings, 
                      <br> including things you won’t find anywhere else.
                    </p>
                   
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('user.property.create') }}"><span class="price-a">Post Your Property</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">


    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">All Property
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            @foreach ($latestProperty as $property)
              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a" >
                    <img src="{{ asset('uploads/cover_images/'.$property->cover_image) }}" alt="coverImgae">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">{{ $property->property_title }}
                            <br /> {{ $property->address }}</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | Rs. {{ $property->price }}</span>
                        </div>
                        <a href="{{ route('user.property.detail', [$property->id]) }}" class="link-a">Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">LR</h4>
                            <span>{{ $property->livingroom }}
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>{{ $property->bedroom }}</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>{{ $property->bathroom }}</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Kitchen</h4>
                            <span>{{ $property->kitchen }}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- End carousel item -->
            @endforeach

          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->


    <!-- ======= Latest Blogs Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Blogs</h2>
              </div>
              <div class="title-link">
                {{-- <a href="blog-grid.html">All Blogs
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            @foreach($latestBlog as $blog)
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('uploads/blog_images/'.$blog->image) }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="{{ route('user.blog.detail', [$blog->id]) }}">{{ $blog->title }}
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">{{ $blog->created_at->diffForHumans() }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item --> 
            @endforeach

            {{-- <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset("/img/post-3.jpg") }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item --> --}}

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

  </main><!-- End #main -->

  

</body>

|@endsection