
@extends('layouts/header-footer')
<style>
      #map-responsive{
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
      }

      #map-responsive #map{
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
      }
</style>
@section('content')


    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Submit your property</h1>
              <span class="color-text-a">Fill the form below</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Submit Property
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    

<div class="container ">
  <section class="submitform ">
    <form action="{{ route('user.property.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    
      <div class="row my-3">
        <div class="col">
          <label class="form-label" for="property_title">Property title:</label>
          <input type="text" class="form-control" name="property_title" id="property_title" value="{{ old('property_tite') }}" placeholder="Enter Property Title">
         @error('property_tile')
            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
         @enderror
        </div>
      </div>
      
        
        <div class="my-3 mt-3">
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
            @error('address')
            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
            @enderror
        </div>
        
      </div>
     
      <div class="my-3">
        <label for="property_category" class="form-label">Property Category:</label>
        <div class="row px-10">
          <div class=" col-md-2 form-check form-check-inline">
            <label class="form-check-label" for="room"><input type="radio" class="form-check-input" name="property_category" id="room" value="Room">Room</label>
          </div>
          <div class="col-md-2 form-check form-check-inline">
            <label class="form-check-label" for="flat"><input type="radio" class="form-check-input" name="property_category" id="flat" value="Flat">Flat</label>
          </div>
          <div class="col-md-2 form-check form-check-inline">
            <label class="form-check-label" for="apartment"> <input type="radio" class="form-check-input" name="property_category" id="apartment" value="Apartment">Apartment</label>
          </div>
          <div class="col-md-2 form-check form-check-inline">
            <label class="form-check-label" for="office_space"><input type="radio" class="form-check-input" name="property_category" id="office_space" value="Office Space">Office Space</label>
          </div>
          <div class="col-md-2 form-check form-check-inline">
            <label class="form-check-label" ><input type="radio" class="form-check-input" name="property_category" id="buisness_space" value="Buisness Space">Buisness Space</label>
          </div>
        </div>
        
        @error('property_category')
            <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
        @enderror
      </div>

      <div class="my-3">
          <label for="road_size" class="form-label">Road Size:</label>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="road_size" id="road_size" value="{{ old('road_size') }}" placeholder="Enter Road Size">
            </div>
            <div class="col">
              <select name="road_size_unit" id="" class="form-select">
                <option value="">--Select Unit--</option>
                <option value="feet">feet</option>
                <option value="meter">meter</option>
              </select>
            </div>
           <div class="col">
              <select name="road_type" id="" class="form-select">
                <option value="">--Select Road Type--</option>
                <option value="Gravelled">Gravelled</option>
                <option value="Soil-stabilized">Soil Stabilized</option>
                <option value="Paved">Paved</option>
                <option value="Blacktopped">Blacktopped</option>
                <option value="Alley">Alley</option>
              </select>
           </div>
           
          </div>
          
          @error('road_size') 
              <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
          @enderror
      </div>
     
      <div class="my-3">
        <label for="distance" class="form-label" >Distance from main road:</label>
        <div class="row">
          <div class="col">
            <input type="text" id="distance" name="distance" class="form-control" placeholder="Enter Distance From Road">
          </div>
          <div class="col">
            <select name="distance_unit" id="" class="form-select">
              <option value="">--Select Unit--</option>
              <option value="feet">feet</option>
              <option value="meter">meter</option>
            </select>
          </div>
        </div>
        
        @error('distance')
          <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
        @enderror
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="my-3">
            <label for="building_detail"  class="form-label">Building Details :</label>
            <input type="text" class="form-control" name="built_year" id="building_detail" placeholder="Enter Built Year">
            @error('built_year')
                <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
            @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="my-3">
            <label for="bedroom"  class="form-label">Bedroom:</label>
            <select name="bedroom" id="bedroom" class="form-select">
              <option value="">--Select No.--</option>
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
            @error('bedroom')
                <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
            @enderror
          </div>

        </div>
      </div>
      
      <div class="row">

        <div class="col-md-6">
          <div class="my-3">
            <label for="kitchen"  class="form-label">Kitchen:</label>
            <select name="kitchen" id="kitchen" class="form-select">
              <option value="">--Select No.--</option>
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
            @error('kitchen')
                <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
            @enderror
          </div>
        </div>

          <div class="col-md-6">
              <div class="my-3">
                <label for="bathroom" class="form-label">Bathroom:</label>
                <select name="bathroom" id="bathroom" class="form-select">
                  <option value="">--Select No.--</option>
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
                  @error('bathroom')
                      <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>    
                  @enderror
              </div>
          </div>
      </div>
      

      <div class="row">
          <div class="col-md-6">
            <div class="my-3">
              <label for="livingroom"  class="form-label">Living Room:</label>
              <select name="livingroom" id="livingroom" class="form-select">
                <option value="">--Select No.--</option>
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
          </div>

          <div class="col-md-6">
            <div class="my-3">
              <label for="parking" class="form-label">Parking:</label>
              <select name="parking" id="parking" class="form-select">
                <option value="">--Select No.--</option>
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
          </div>
      </div>
    
   
   

    <div class="my-3">
      <label for="amenities" class="form-label">Amenitites:</label>
      <div class="row">

        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="wifi"><input type="checkbox" class="" name="amenities[]" id="wifi" value="Wifi" class="pl-3"> Wifi</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="security"><input type="checkbox" class="" name="amenities[]" id="security" value="Security"> Security</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="air_conditioner" ><input type="checkbox" class="" name="amenities[]" id="air_conditioner" value="Air-conditioner"> Air Conditioner</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="water_supply" ><input type="checkbox" class="" name="amenities[]" id="water_supply" value="Water-supply"> Water Supply</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="balcony"> <input type="checkbox" class="" name="amenities[]" id="balcony" value="Balcony"> Balcony</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="gym" ><input type="checkbox" class="" name="amenities[]" id="gym" value="Gym"> Gym</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="swimming_pool" > <input type="checkbox" class="" name="amenities[]" id="swimming_pool" value="Swimming-pool"> Swimming Pool</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="tv_cable" ><input type="checkbox" class="" name="amenities[]" id="tv_cable" value="Tv-cable"> Tv Cable</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="laundry"><input type="checkbox" class="" name="amenities[]" id="laundry" value="Laundry"> Laundry</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="lift"><input type="checkbox" class="" name="amenities[]" id="lift" value="Lift"> Lift</label>
        </div>
        <div class=" col-md-2 form-check form-check-inline">
          <label class="form-check-label" for="solar"><input type="checkbox" class="" name="amenities[]" id="Solar" value="solar"> Solar</label>
        </div>
      </div>
              
      
    @if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
    </div>

    <div class="row my-3">
      <div class="col">
        <label for="name" class="form-label">Description:</label>
        <textarea name="description" class="form-control" id=""  rows="3" placeholder="Enter Description Of Your Property"></textarea>
      </div>
      
      
    @if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
    </div>

<div class="my-3">
  <label for="price" class="form-label">Price:</label>
  <div class="row">
    <div class="col pb-3">
        <input type="text" name="price"   class="form-control" id="price" placeholder="Rs.">
    </div>
      <div class="col">
          <select name="price_unit" id="price" class="form-select">
            <option value="">--Select Unit--</option>
            <option value="Monthly">Per Month</option>
            <option value="Yearly ">Per Annum</option>
          </select>
      </div>
    
    <div class="col-md-6">
            <label for="negotiable" class="form-label pl-2">Negotiable:</label>
            <label for="negotiable" class="form-label"><input type="radio" name="negotiable" id="negotiable" value="Yes"> Yes</label>
            <label for="no" class="form-label"><input type="radio" name="negotiable" id="negotiable" value="No"> No</label>
            
    </div>
</div>
</div>
    
   
 

    {{-- <div class="mb-3">
      <label for="owner">Owner Information</label> 
      <input type="text" name="owner_name" id="ownerName" placeholder="Enter Owner Name">
      <input type="email" name="owner_email" id="ownerEmail" placeholder="Enter Owner Email">
      <input type="text" name="owner_phone" id="ownerPhone" placeholder="Enter Owner Phone">
      <input type="hidden"id="userName"  value="{{ $userName }}">
      <input type="hidden"id="userEmail"  value="{{ $userEmail }}">
      <input type="hidden"id="userPhone"  value="{{ $userPhone }}">
      {{-- <button onclick()="changeContent()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Same Owner as Current User
      </button> --}}


    <div>
      <label for="map" class="form-label">Mark you location:</label>
      <div id="map-responsive" class="my-3">
      
        <input type="hidden" name="latitude" id="lat">
        <input type="hidden" name="longitude" id="lng">
        <div id="map" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></div>
      </div>
    </div>


    <div class="row ">
      <div class="col-md-6">
          <div class=" row my-3 mr-3">
              <label class="form label pb-3" for="images">Choose cover image:<span class="text-xs"> [Upload image for cover]</span></label>
              
              <input type="file" name="cover_image" class="form-control"  id="images">
          </div>
        </div>
        <div class="col-md-6">
          <div class=" row my-3 mr-3">
              <label class="form label pb-3" for="images">Choose other image:<span class="text-xs"> [Upload multiple image]</span></label>
              
              <input type="file" name="images[]" class="form-control" accept="image/*" id="images" multiple>
          </div>
        </div>
    </div>
    
    


    <div class="mt-4">
      <button type="submit" class="btn btn-a" >Submit</button>
    </div>
    </form>
  </section>
</div>
    

    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh_VUkJzFhwkfxlR8slOC9bSLOV8mZ9jw&callback=initMap&v=weekly"
    async>
    </script>

    <script>
      function changeContent() = {
        document.getElementById("userName").value = document.getElementById("ownerName").value;
        document.getElementById("userEmail").value = document.getElementById("ownerEmail").value;
        document.getElementById("userPhone").value = document.getElementById("ownerPhone").value;
      }
    </script>

@endsection

