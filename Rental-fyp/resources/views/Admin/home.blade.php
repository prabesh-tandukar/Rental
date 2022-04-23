@extends('layouts/adminLayout')

@section('content')



  <x-admin-sidebar/>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12 ">
          <div class="row">

            <!-- Property Card -->
            <div class="col-xxl-6 col-md-6 col-xl-6">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Total Properties <span>| Active</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house-door"></i>             
                    </div>
                    <div class="ps-5">
                      <h6>{{ $numOfProperty }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->



            <!-- Customers Card -->
            <div class="col-xxl-6 col-md-6 col-xl-6">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Total Users <span>| Registred</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-5">
                      <h6>{{ $numOfUser }}</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <!-- Recent Prop -->
            {{-- <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Recent Properties</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>Kamalpokhari Apartment</td>
                        <td>Prabesh Tandukar</td>
                        <td>Rs. 20000 per month</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div> --}}
          </div>
        </div>


      </div>
    </section>

  </main><!-- End #main -->


@endsection