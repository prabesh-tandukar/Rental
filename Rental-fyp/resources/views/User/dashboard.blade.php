

@extends('layouts/header-footer')

<link rel="stylesheet" href="{{ asset('User/css/dashboard.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
@section('content')



   {{-- <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top"> --}}
    <div class="container">
      
      <a class="navbar-brand text-brand" href="{{ route('homepage') }}">Rent<span class="color-b">Ghar</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.about') }}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.property.create') }}">Submit Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Catelog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.map') }}">Map</a>
          </li>

          <li class="nav-item"> 
            <a class="nav-link " href="{{ route('user.contact') }}">Contact</a>
          </li>

          
        </ul>
      </div>

      <div id="navbarDefault">
        <ul  class="navbar-nav">
          @auth
          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.dashboard') }}">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="/logout" class="nav-item">
              @csrf
              <Button type="submit">Log Out</Button>
          </form>
          </li>
          @else 
          <li class="nav-item">
            <a class="nav-link " href="{{ route('login') }}">LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('register') }}">Register</a>
          </li>
          @endguest
        </ul>
        
      </div>
    </div>


  <x-sidebar/>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Active Property</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-house-fill"></i>
                    </div>
                    <div class="ps-2">
                      <h6>{{ $activeProperty }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Pending Property</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-house-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $pendingProperty }}</h6>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>

              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Rejected Property</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-house-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $rejectProperty }}</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

     
    </section>

  </main><!-- End #main -->




  @endsection

</body>

</html>