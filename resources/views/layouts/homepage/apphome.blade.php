<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CSS Files -->
  @include('layouts.homepage.csslink')
  <!-- /#CSS Files -->
</head>

<body>
  @include('sweetalert::alert')
  <!-- ======= Header ======= -->
  @include('layouts.homepage.header')
  <!-- End Header -->






  @yield('content')










  <!-- ======= Footer ======= -->
  
@include('layouts.homepage.footer')
<!-- ======= Footer ======= -->

<!-- ======= Fléche au début ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


   <!-- JS Files -->
 @include('layouts.homepage.jslinks')
 <!-- /#JS Files -->

</body>

</html>

<!--
<a href="#" class="btn-learn-more">Learn More</a>


-->