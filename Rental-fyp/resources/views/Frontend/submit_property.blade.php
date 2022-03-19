
@extends('layouts/header-footer')
@section('content')


<section class="submit_hero">
  <h1 class="herotext">Submit Property</h1>  
</section>
    <header class="heading">
      <h2>Fill in the form</h2>
    </header>
    {{-- {{route('property.create')}} --}}
    <section id="form">
      <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label class="form-label" for="property_title">Property title:</label>
            <input type="text" class="form-control" name="property_title" id="property_title" value="{{ old('property_tite') }}" placeholder="Enter Property Title">
          @if ($errors->has('property_title'))
          <div class="alert alert-danger">{{ $errors->first('property_title') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label class="form-label" for="address">Address:</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" placeholder="Enter Address">
            <select name="city" id="city">
              <option value="">--Select-City--</option>
              <option value="kathmandu">kathmandu</option>
              <option value="lalitpur">lalitpur</option>
              <option value="bhaktapur">bhaktapur</option>
            </select>
          @if ($errors->has('address'))
          <div class="alert alert-danger">{{ $errors->first('address') }}</div>
          @endif
        </div>
       
        <div class="form-group">
          <label for="property_category">Property Category:</label>
            <input type="radio" class="form-control" name="property_category" id="room" value="room">
            <label for="room">Room</label>
            <input type="radio" class="form-control" name="property_category" id="flat" value="flat">
            <label for="flat">Flat</label>
            <input type="radio" class="form-control" name="property_category" id="apartment" value="apartment">
            <label for="apartment">Apartment</label>
            <input type="radio" class="form-control" name="property_category" id="office_space" value="office_space">
            <label for="office_space">Office Space</label>
            <input type="radio" class="form-control" name="property_category" id="buisness_space" value="buisness_space">
            <label for="business_space">Business Sapce</label>
            
            @if ($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="road_size">Road Size:</label>
            <input type="text" class="form-control" name="road_size" id="road_size" value="{{ old('road_size') }}" placeholder="Enter Road Size">
            <select name="road_size_unit" id="">
              <option value="feet">feet</option>
              <option value="meter">meter</option>
            </select>
            <select name="road_type" id="">
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
       
        <div class="form-group">
          <label for="distance">Distance from main road:</label>
          <input type="text" id="distance" name="distance">
          <select name="distance_unit" id="">
            <option value="feet">feet</option>
            <option value="meter">meter</option>
          </select>
        </div>

        <div class="form-group">
            <label for="building_detail">Building Details :</label>
            <input type="text" class="form-control" name="built_year" id="building_detail" placeholder="Enter Built Year">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>

        <div class="form-group">
            <label for="bedroom">Bedroom:</label>
            <select name="bedroom" id="bedroom">
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
        <div class="form-group">
          <label for="kitchen">Kitchen:</label>
          <select name="kitchen" id="kitchen">
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
      <div class="form-group">
        <label for="bathroom">Bathroom:</label>
        <select name="bathroom" id="bathroom">
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
    <div class="form-group">
      <label for="livingroom">Living Room:</label>
      <select name="livingroom" id="livingroom">
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
  <div class="form-group">
    <label for="parking">Parking:</label>
    <select name="parking" id="parking">
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

<div class="form-group">
  <label for="amenities">Amenitites:</label>
          <label for="wifi">Wifi:</label>
          <input type="checkbox" class="form-control" name="wifi" id="wifi" value="wifi">
          <label for="security">Security:</label>
          <input type="checkbox" class="form-control" name="security" id="security" value="security">
          <label for="air_conditioner">Air Conditioner:</label>
          <input type="checkbox" class="form-control" name="air_conditioner" id="air_conditioner" value="air_conditioner">
          <label for="water_supply">Water Supply:</label>
          <input type="checkbox" class="form-control" name="water_supply" id="water_supply" value="water_supply">
          <label for="balcony">Balcony:</label>
          <input type="checkbox" class="form-control" name="balcony" id="balcony" value="balcony">
          <label for="gym">Gym:</label>
          <input type="checkbox" class="form-control" name="gym" id="gym" value="gym">
          <label for="swimming_pool">Swimming Pool:</label>
          <input type="checkbox" class="form-control" name="swimming_pool" id="swimming_pool" value="swimming_pool">
          <label for="tv_cable">Tv Cable:</label>
          <input type="checkbox" class="form-control" name="tv_cable" id="tv_cable" value="tv_cable">
          <label for="laundry">Laundry:</label>
          <input type="checkbox" class="form-control" name="laundry" id="laundry" value="laundry">
          <label for="lift">Lift:</label>
          <input type="checkbox" class="form-control" name="lift" id="lift" value="lift">
          <label for="solar">Solar:</label>
          <input type="checkbox" class="form-control" name="solar" id="solar" value="solar">
  
@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
</div>

<div class="form-group">
  <label for="name">Description:</label>
  <textarea name="description" id="" cols="30" rows="10"></textarea>
  
@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
</div>

<div>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Rs">
    <select name="price_unit" id="price">
      <option value=""></option>
      <option value="per_month">Per Month</option>
      <option value="per_annum">Per Annum</option>
    </select>
</div>

<div>
  <label for="negotiable">Negotiable</label>
    <label for="negotiable">Yes</label>
    <input type="radio" name="negotiable" id="negotiable" value="yes">
    <label for="no">No</label>
    <input type="radio" name="negotiable" id="negotiable" value="yes">

</div>

<div>
  <label for="owner">Owner Information</label>
  <input type="text" name="owner_name" id="owner" placeholder="Enter Owner Name">
  <input type="email" name="owner_email" id="owner" placeholder="Enter Owner Email">
  <input type="text" name="owner_phone" id="owner" placeholder="Enter Owner Phone">
</div>

<div>
  <label for="location">Location</label>
    <label for="yes">Yes</label>
    <input type="radio" name="yes" id="yes">
    <label for="no">No</label>
    <input type="radio" name="no" id="no">
</div>

<div>
  <label for="upload_image">Upload Image</label>
  <input type="file">
</div>
<div>
  <button>Submit</button>
</div>
    </form>
    </section>

  

@endsection

