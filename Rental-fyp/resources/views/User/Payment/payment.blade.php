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
      <h1>Payment</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        @if(session()->has('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div>
        @endif
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <button type="button" class="btn btn-success" id="payment-button">Pay with Khalti</button>

  
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  
  <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

  <script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_96ce96ef35ae417d8b76651875fe8929",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "paymentPreference": [
            "KHALTI",
            "EBANKING",
            "MOBILE_BANKING",
            "CONNECT_IPS",
            "SCT",
            ],
        "eventHandler": {
            onSuccess (payload) {
                // hit merchant api for initiating verfication
                console.log(payload);
                if (payload.idx){
                  $.ajaxSetup({
                    headers:{
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                  });

                  $.ajax({
                    method: 'post',
                    url: "{{ route('user.ajax.khalti.verify_payment') }}",
                    data: payload,

                    success: function(response) {
                      if(response.success == 1){
                        window.location = response.redirecto;
                      }else{
                        checkout.hide();
                      }
                    },
                    error: function(data){
                      console.log('Error:', data);
                    }
                  })
                }
            },
            onError (error) {
                console.log(error);
            },
            onClose () {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function () {
        // minimum transaction amount must be 10, i.e 1000 in paisa.
        checkout.show({amount: 1000});
    }
</script>
  @endsection



</body>

</html>