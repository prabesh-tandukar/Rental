@extends('layouts/header-footer')
@section('content')

<section class="section-about">
    <div class="container">
      <div class="row">

        <div class="col-md-12 section-t8 position-relative">
          <div class="row">
            <div class="col-md-8 col-lg-8 section-md-t3">
              <div class="title-box-d">
                <h1 class="title-d">Your Property Submission Was Successful.</h1>
                {{-- <h4 class="title-d">Your property will be viewed for approval and you will receive feedback as soon as possible.</h4> --}}
                
              </div>
              <p class="color-text-a">
                <h4 class="">Your property will be viewed for approval and you will receive feedback as soon as possible.</h4>
                <div class="row mt-7">
                    <div class="col-md-4 mt-4">
                        <button type="button" class="btn btn-outline-info"><a href="{{ route('user.home') }}">Go to Home Page</a> </button>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button type="button" class="btn btn-outline-success"><a href="{{ route('user.property.create') }}">Submit Another Property</a> </button>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button type="button" class="btn btn-outline-secondary"><a href="{{ route('user.dashboard') }}">View Dashboard</a> </button> 
                    </div>
                </div>
      
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection