@extends('layouts/header-footer')
@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Your Searched Properties</h1>
              <span class="color-text-a">View the properties that meets your search</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('user.home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Search
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <div class="container">
        @if(session()->has('success_message'))
          <div class="alert alert-success"> 
              {{ session()->get('success_message') }}
          </div>
        @endif

        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    </div>

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              <x-search />
            </div>
          </div>

          <h1>Seach Results</h1>
          <p> {{ $properties->count() }} result(s) for '{{ request()->input('query') }}'</p>

         
          
          @foreach ($properties as $property)
            <div class="col-md-4 mt-5">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('uploads/cover_images/'.$property->cover_image) }}" alt="coverImgae">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#">{{ $property->property_title }}
                          <br /> {{ $property->address }}</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">rent | Rs.{{ $property->price }}</span>
                      </div>
                      <a href="{{ route('user.property.detail', [$property->property_title]) }}" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Living</h4>
                          <span>{{ $property->livingroom }}</span>
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
                          <h4 class="card-info-title">Parking</h4>
                          <span>{{ $property->parking }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

          <div class="row">
            <div class="col-sm-12">
              <nav class="pagination-a">
                  {!! $properties->links() !!}
              </nav>
            </div>
          </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

    
@endsection