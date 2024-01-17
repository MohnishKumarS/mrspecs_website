<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Admin</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
   <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
   <!-- endinject -->
   <!-- plugin css for this page -->
   <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
   <!-- endinject -->
   <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   @livewireStyles
</head>
<body>
  


  <div class="container-scroller">

    {{-- ---------- navbar ------- --}}
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

      {{-- --------- sidebar -------- --}}
      @include('admin.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
        @yield('content')
        </div>
      </div>

    </div>

  </div>









  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/data-table.js')}}"></script>
    <script src="{{asset('admin/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->
  
    <script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     {{-- ---- alert message -- --}}
 @if (session('status'))
 <script>
   Swal.fire("{{ session('status') }}")
 </script>
@endif

   
@livewireScripts
    @stack('script')
</body>
</html>