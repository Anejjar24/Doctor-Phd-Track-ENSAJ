
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{asset('dashfinal/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('dashfinal/css/style.css" rel="stylesheet')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('dashfinal.initial.csslink')


    


</head>

<body>
    @include('sweetalert::alert')

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('dashfinal.admin.nav-header')
       

        <!--**********************************
            Nav header end
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        
        @include('dashfinal.initial.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('dashfinal.admin.sidebar')


        <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		
		
		
		
		
 
 
         <!-- Content body start -->

         @yield('content')
           <!-- Content body end -->

                <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">ENSAJ</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script src="{{asset('dashfinal/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('dashfinal/js/quixnav-init.js')}}"></script>
    <script src="{{asset('dashfinal/js/custom.min.js')}}"></script>


    <script src="{{asset('dashfinal/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>

    
    <script src="{{asset('dashfinal/js/plugins-init/datatables.init.js')}}"></script>

<!--

    
   
   

   
    


  
    

    -->
    @include('dashfinal.initial.jslinks')




    
     <!-- Required vendors -->
    

</body>

</html>



















