<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{asset('dashfinal/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('dashfinal/css/style.css" rel="stylesheet')}}">


    @include('dashfinal.initial.csslink')


    


</head>

<body>

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
         <div class="content-body">
            <!-- row -->
        
        
            
            <div class="container-fluid">
              <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Informations de Thèse</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 text-right">
                    <a href="{{route('doctorants.details',['id' => $user->id])}}" class="btn btn-outline-light">Retour</a>
                </div>
            </div>
                   
               
        
               
        
                
        
              
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        
                        @include('dashfinal.admin.doctorants.photocard')
                   
                      <div class="card mt-3">
        
        </div>
        
        
        
                     
        
        
        
        
                    </div>
        
        
                    
        
                    
        
        
        
        
        
        
        
        
                    <div class="col-md-8">
        
        
        <!-- ZONE 2 -->
        
        
        
        
        
        
        <!-- ZONE 4 -->
        <div class="card mb-3">
          <div class="card-body">
            
        
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Titre </h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->titre }}
              </div>
            </div>
        
            <hr>
        
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Description</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                
                {{ $user->description }}
              </div>
            </div>
        
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Laboratoire</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{ $user->laboratoire }}
                </div>
              </div>
          
              <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Directeur</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->directeur }}              </div>
            </div>
        
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Codirecteur</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{$user->codirecteur }}
                </div>
              </div>
          
              <hr>
        
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Date d'inscription</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->date_inscription }}
              </div>
            </div>
        
           
        
            
        
            <!--nice boutton
            <hr>
        
        
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
              </div>
            </div>
        
          -->
        
        
          </div>
        </div>
        
        
        
        
        
        
        
        
                      
        
        
                    </div>
        
        
        
        
        
                  </div>
        
                </div>
                 
        
        
                </div>


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