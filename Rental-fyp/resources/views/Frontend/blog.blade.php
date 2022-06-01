@extends('layouts/header-footer')
@section('content')

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Blogs</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Blogs
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= About Section ======= -->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 position-relative">
          <div class="about-img-box">
          <img src="/uploads/blog_images/{{ $blogDetail->image }}" alt="" class="img-fluid">
          </div>
          {{-- <div class="sinse-box">
            <h3 class="sinse-title">RentGhar
              <span></span>
              <br> Since 2022
            </h3>

          </div> --}}
        </div>
        <div class="col-md-12 section-t8 position-relative">
          <div class="row">
            {{-- <div class="col-md-6 col-lg-5">
            <img src="{{ asset ("img/about-2.jpg") }}" alt="" class="img-fluid">
            </div> --}}
            {{-- <div class="col-lg-2  d-none d-lg-block position-relative">
              <div class="title-vertical d-flex justify-content-start">
                <span>About RentGhar</span>
              </div>
            </div> --}}
            <div class="col-md-8 col-lg-8 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">{{$blogDetail->title}}
                </h3>
              </div>
              <p class="color-text-a">
                {{$blogDetail->description}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection