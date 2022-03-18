
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
      <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-form">
          <div class="form-group">
            <label class="form-label" for="property_title">Property title:</label>
            <input type="text" class="form-control" name="property_title" id="property_tile" value="{{ old('property_tite') }}" placeholder="Enter Property Title">
          @if ($errors->has('property_title'))
          <div class="alert alert-danger">{{ $errors->first('property_title') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" placeholder="Enter Address">
          @if ($errors->has('address'))
          <div class="alert alert-danger">{{ $errors->first('address') }}</div>
          @endif
        </div>
        </div>
       
        <div class="form-group">
          <label for="Property Category">Property Category:</label>
          <label for="name">Room:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Flat:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Apartment:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Office Space:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Business Sapce:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
        @if ($errors->has('name'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
        @endif
      </div>
        <div class="form-group">
            <label for="road_size">Road Size:</label>
            <input type="text" class="form-control" name="road_size" id="road_size" value="{{ old('road_size') }}" placeholder="Enter Road Size">
          @if ($errors->has('road_size'))
          <div class="alert alert-danger">{{ $errors->first('road_size') }}</div>
          @endif
        </div>
       
        <div class="form-group">
            <label for="name">Building Details :</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label for="name">Total Area:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div><div class="form-group">
            <label for="name">Build Up Area:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label for="name">Property Face:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label for="name">Property title:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="form-group">
            <label for="name">Bedroom:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="form-group">
          <label for="name">Kitchen:</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
        @if ($errors->has('name'))
        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="name">Bathroom:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
      @if ($errors->has('name'))
      <div class="alert alert-danger">{{ $errors->first('name') }}</div>
      @endif
    </div>
    <div class="form-group">
      <label for="name">Living Room:</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
    @if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="name">Parking:</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
  @if ($errors->has('name'))
  <div class="alert alert-danger">{{ $errors->first('name') }}</div>
  @endif
</div>

<div class="form-group">
  <label for="name">Amenitites:</label>
  <label for="Property Category">Property Category:</label>
          <label for="name">Room:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Flat:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Apartment:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Office Space:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
          <label for="name">Business Sapce:</label>
          <input type="radio" class="form-control" name="property_category" id="property_category">
  
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
  <button>Submit</button>
</div>
    </form>
    </section>

  

@endsection

