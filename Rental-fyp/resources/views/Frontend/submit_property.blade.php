
@extends('layouts/header-footer')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="herotext">Submit Property</h1>
    </div>
  </div>
</div>
    

    {{-- {{route('property.create')}} --}}

    <section class="submitform section-t8">
      <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      
          <div class="mb-3">
            <label class="form-label" for="property_title">Property title:</label>
            <input type="text" class="form-control" name="property_title" id="property_title" value="{{ old('property_tite') }}" placeholder="Enter Property Title">
            @if ($errors->has('property_title'))
            <div class="alert alert-danger">{{ $errors->first('property_title') }}</div>
            @endif
          </div>
          
          <div class="mb-3">
            <div class="row">
              <label class="form-label" for="address">Address:</label>
              <div class="col">
                <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" placeholder="Enter Address">
              </div>
              <div class="col">
                <select name="city" id="city" class="form-select">
                  <option value="">--Select-City--</option>
                  <option value="kathmandu">kathmandu</option>
                  <option value="lalitpur">lalitpur</option>
                  <option value="bhaktapur">bhaktapur</option>
                </select>
              </div>
          </div>
        
            
          @if ($errors->has('address'))
          <div class="alert alert-danger">{{ $errors->first('address') }}</div>
          @endif
        </div>
       
        <div class="mb-3">
          <label for="property_category" class="form-label">Property Category:</label>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="property_category" id="room" value="room">
            <label class="form-check-label" for="room">Room</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="property_category" id="flat" value="flat">
            <label class="form-check-label" for="flat">Flat</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="property_category" id="apartment" value="apartment">
            <label class="form-check-label" for="apartment">Apartment</label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label" for="office_space">Office Space</label>
            <input type="radio" class="form-check-input" name="property_category" id="office_space" value="office_space">
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="property_category" id="buisness_space" value="buisness_space">
            <label class="form-check-label" for="business_space" >Business Sapce</label>
          </div>
            @if ($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="road_size" class="form-label">Road Size:</label>
            <input type="text" class="form-control" name="road_size" id="road_size" value="{{ old('road_size') }}" placeholder="Enter Road Size">
            <select name="road_size_unit" id="" class="form-select">
              <option value="feet">feet</option>
              <option value="meter">meter</option>
            </select>
            <select name="road_type" id="" class="form-select">
              <option value="gravelled">Gravelled</option>
              <option value="soil-stabilized">Soil Stabilized</option>
              <option value="paved">Paved</option>
              <option value="blacktopped">Blacktopped</option>
              <option value="alley">Alley</option>
            </select>
            @if ($errors->has('road_size'))
            <div class="alert alert-danger">{{ $errors->first('road_size') }}</div>
            @endif
        </div>
       
        <div class="mb-3">
          <label for="distance" class="form-label">Distance from main road:</label>
          <input type="text" id="distance" name="distance" class="form-control">
          <select name="distance_unit" id="" class="form-select">
            <option value="feet">feet</option>
            <option value="meter">meter</option>
          </select>
        </div>

        <div class="mb-3">
            <label for="building_detail">Building Details :</label>
            <input type="text" class="form-control" name="built_year" id="building_detail" placeholder="Enter Built Year">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>

        <div class="mb-3">
            <label for="bedroom">Bedroom:</label>
            <select name="bedroom" id="bedroom" class="form-select">
              <option value="">--Select No.---</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="mb-3">
          <label for="kitchen">Kitchen:</label>
          <select name="kitchen" id="kitchen" class="form-select">
            <option value="">--Select No.---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        @if ($errors->has('name'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
        @endif
      </div>
      <div class="mb-3">
        <label for="bathroom">Bathroom:</label>
        <select name="bathroom" id="bathroom" class="form-select">
          <option value="">--Select No.---</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      @if ($errors->has('name'))
      <div class="alert alert-danger">{{ $errors->first('name') }}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="livingroom">Living Room:</label>
      <select name="livingroom" id="livingroom" class="form-select">
        <option value="">--Select No.---</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    @if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
  </div>
  <div class="mb-3">
    <label for="parking">Parking:</label>
    <select name="parking" id="parking" class="form-select">
      <option value="">--Select No.---</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  @if ($errors->has('name'))
  <div class="alert alert-danger">{{ $errors->first('name') }}</div>
  @endif
</div>

<div class="mb-3">
  <label for="amenities">Amenitites:</label>
          <label for="wifi">Wifi:</label>
          <input type="checkbox" class="" name="amenities[]" id="wifi" value="wifi">
          <label for="security">Security:</label>
          <input type="checkbox" class="" name="amenities[]" id="security" value="security">
          <label for="air_conditioner">Air Conditioner:</label>
          <input type="checkbox" class="" name="amenities[]" id="air_conditioner" value="air_conditioner">
          <label for="water_supply">Water Supply:</label>
          <input type="checkbox" class="" name="amenities[]" id="water_supply" value="water_supply">
          <label for="balcony">Balcony:</label>
          <input type="checkbox" class="" name="amenities[]" id="balcony" value="balcony">
          <label for="gym">Gym:</label>
          <input type="checkbox" class="" name="amenities[]" id="gym" value="gym">
          <label for="swimming_pool">Swimming Pool:</label>
          <input type="checkbox" class="" name="amenities[]" id="swimming_pool" value="swimming_pool">
          <label for="tv_cable">Tv Cable:</label>
          <input type="checkbox" class="" name="amenities[]" id="tv_cable" value="tv_cable">
          <label for="laundry">Laundry:</label>
          <input type="checkbox" class="" name="amenities[]" id="laundry" value="laundry">
          <label for="lift">Lift:</label>
          <input type="checkbox" class="" name="amenities[]" id="lift" value="lift">
          <label for="solar">Solar:</label>
          <input type="checkbox" class="" name="amenities[]" id="solar" value="solar">
  
@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
</div>

<div class="mb-3">
  <label for="name">Description:</label>
  <textarea name="description" class="form-control" id=""  rows="3"></textarea>
  
@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
</div>

<div class="mb-3">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Rs">
    <select name="price_unit" id="price" class="form-select">
      <option value=""></option>
      <option value="per_month">Per Month</option>
      <option value="per_annum">Per Annum</option>
    </select>
</div>

<div class="mb-3">
  <label for="negotiable">Negotiable</label>
    <label for="negotiable">Yes</label>
    <input type="radio" name="negotiable" id="negotiable" value="yes">
    <label for="no">No</label>
    <input type="radio" name="negotiable" id="negotiable" value="yes">

</div>

<div class="mb-3">
  <label for="owner">Owner Information</label>
  <input type="text" name="owner_name" id="owner" placeholder="Enter Owner Name">
  <input type="email" name="owner_email" id="owner" placeholder="Enter Owner Email">
  <input type="text" name="owner_phone" id="owner" placeholder="Enter Owner Phone">
</div>

<div class="mb-3">
  <label for="location">Location</label>
    <label for="locatiopn">Yes</label>
    <input type="radio" name="location" id="location" value="yes">
    <label for="location">No</label>
    <input type="radio" name="location" id="location" value="no">
    <input type="hidden" name="latitude" id="lat">
    <input type="hidden" name="longitude" id="lng">
    <div id="map" style="width: 400px; height: 400px;"></div>
</div>

<div class="mb-3">
  <label class="form label" for="images">Choose image</label>
  <input type="file" name="upload_image[]" class="form-control" id="images" multiple>
</div>
<div>
  <button>Submit</button>
</div>
    </form>
    </section>

    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh_VUkJzFhwkfxlR8slOC9bSLOV8mZ9jw&callback=initMap&v=weekly"
    async>

    </script>

@endsection

