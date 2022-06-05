<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RentGhar | Admin Panel</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("Admin/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/quill/quill.snow.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("Admin/vendor/simple-datatables/style.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ("Admin/css/style.css") }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="container d-flex justify-content-between">
      <div class="row">
            <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.home.index') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">RentGhar | Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
      </div>

      <div class="row pt-2">
        <div class="nav-item">
            <form method="POST" action="/logout">
              @csrf
              <Button type="submit"  class="btn btn-outline-danger"><i class="bi bi-box-arrow-right"></i> Log Out</Button>
            </form>
        </div>
      </div>
    </div>
  
    
   

  </header><!-- End Header -->


  {{-- <x-admin-sidebar/> --}}

 @yield('content')
 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>RentGhar</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset("Admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="<https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js>"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ("Admin/js/main.js") }}"></script>

  <script>
    $(function(){
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 2;
          var showInHome = $(this).prop('checked') == true ? 1 : 2;
          var paymentmode = $(this).prop('checked') == true ? 1 : 0;
          var savemethod = $(this).prop('checked') == true ? 2 : 1;
          var id = $(this).data('id');
          var url = $(this).data('url');
          $.ajax({
              type: "GET",
              dataType: "json",
              url: url,
              data: {'status': status,'mode': paymentmode,'save_method':savemethod,'display':status,'show_in_home':showInHome,'id': id},
               success: function(data){
                console.log(data.success)
              }           
          });
      })
    })
  </script>

</body>

</html>