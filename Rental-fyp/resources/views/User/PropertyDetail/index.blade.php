@extends('layouts/header-footer')
@section('content')

<main id="main">




    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $property->property_title }}</h1>
              <span class="color-text-a">{{ $property->address }}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('user.property.catalog') }}">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  {{ $property->property_title }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                @foreach ($images as $image)
                  <div class="carousel-item-b swiper-slide">
                    <img src="/uploads/property_images/{{$image->image}}" alt="">
                  </div>
                @endforeach
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                {{-- <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash"></span>
                      {{-- Rs.{{ $property->price }} {{ $property->price_unit }} --}}
                    {{-- </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="text-xl">Rs.{{ $property->price }}yearly</h5>
                    </div>
                  </div>
                </div> --}}
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                         
                        <h3 class="title-d">Overview</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property Title:</strong>
                        <span>{{ $property->property_title }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{ $property->property_category }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Price:</strong>
                        <span>Rs.{{ $property->price }}-{{ $property->price_unit }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Price Negotiable:</strong>
                        <span>{{ $property->negotiable }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>City:</strong>
                        <span>{{ $property->city }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span>{{ $property->address }}</span>
                      </li>
                      
                  
                      <li class="d-flex justify-content-between">
                        <strong>Distance from Main road:</strong>
                        <span>{{ $property->distance }}{{ $property->distance_unit }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Road Size:</strong>
                        <span>{{ $property->road_size }}{{ $property->road_size_unit }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Road Type:</strong>
                        <span>{{ $property->road_type }}</span>
                      </li> 
                      <li class="d-flex justify-content-between">
                        <strong>Estimated price:</strong>
                        <span>2500</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    {{$property->description}}
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Amenities</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                  @foreach ($property->amenities as $item)
                    <li>{{ $item }}</li>
                  @endforeach
                  </ul>
                </div>

                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Other Details</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <div class="row">
                        <div class="col">
                          <li class="d-flex">
                            <strong class="pr-3">Livingroom:</strong>
                            <span>{{ $property->livingroom }}</span>
                          </li>
                        </div>
                        <div class="col">
                          <li class="d-flex">
                            <strong class="pr-3">Bedroom:</strong>
                            <span>{{ $property->bedroom }}</span>
                          </li>
                        </div>
                        <div class="col">
                          <li class="d-flex">
                            <strong class="pr-3">Kitchen:</strong>
                            <span>{{ $property->kitchen }}</span>
                          </li>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <li class="">
                          <strong class="pr-3">Bathroom:</strong>
                          <span>{{ $property->bathroom }}</span>
                        </li>
                      </div>
                      <div class="col">
                        <li class="d-flex">
                          <strong class="pr-3">Parking:</strong>
                          <span>{{ $property->parking }}</span>
                        </li>
                      </div>
                      <div class="col">
                        <li class="d-flex">
                          <strong class="pr-3">Built in:</strong>
                          <span>{{ $property->built_year }}</span>
                        </li>
                      </div>
                  </div>
                   
                    
                  </ul>
                </div>
                
              </div>

            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Map</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
          
                <div id="map" style="width: 800px; height: 400px;"></div>
                {{-- @php
                    // dd($property->latitude);
                    $latitude = $property->latitude;
                    <input type="hidden" value="<?= htmlspecialchars( $latitude) ?>">
                @endphp --}}
                <input type="hidden" id="latitude" value="{{ $property->latitude }}">
                <input type="hidden" id="longitude" value="{{ $property->longitude }}">
                
              </div>
            
            </div>
          </div>
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Posted by</h3>
                </div>
              </div>
            </div>
            <div class="row">
              {{-- <div class="col-md-6 col-lg-4">
                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
              </div> --}}
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  
                
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Posted by:</strong>
                      <span class="color-text-a">{{ $user->name }}</span>
                    </li>

                    <li class="d-flex justify-content-between">
                      <strong>Phone:</strong>
                      <span class="color-text-a">{{ $user->phone }}</span>
                    </li>
                
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{ $user->email }}</span>
                    </li>

                  </ul>

                </div>
              </div>
              <div class="col-md-12 col-lg-8">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-a">Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

    

  </main><!-- End #main -->
    
  <script>
    //store data of longitude and latitude to the script
    var latitude = document.getElementById("latitude").value;
    var longitude = document.getElementById("longitude").value;
    //convert the string value to float
    var lat = parseFloat(latitude);
    var lon = parseFloat(longitude);

        function initMap() {
            //Map options
            var options = {
                zoom:12,
                center:{lat:lat,lng:lon}
            }

            //new map
            var map = new google.maps.Map(document.getElementById('map'), options);

            //add marker
            var marker = new google.maps.Marker({
                position: {lat:lat,lng:lon} ,
                map:map,
             
            });

            var infoWindow = new google.maps.InfoWindow({
                content:'<h1>Kathmandu</h1>'
            });

            // marker.addListener('click', function() {
            //     infoWindow.open(map, marker);
            // }) 
        }
    </script>

  {{-- <script type="text/javascript" src="{{ asset('js/map.js') }}"></script> --}}

  <script 
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh_VUkJzFhwkfxlR8slOC9bSLOV8mZ9jw&callback=initMap&v=weekly"
  async>

  </script>

@endsection