<!DOCTYPE html>
<html lang="en">

<head>


    <link href="{{asset('dashfinal/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('dashfinal/css/style.css" rel="stylesheet')}}">


    @include('dashfinal.initial.csslink')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    


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
         <div class="content-body">
            <!-- row -->


            
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Détails</h4>
                            
                        </div>
                    </div>
                   
                </div>

               

                
                

                <br>
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        
                        @include('dashfinal.admin.doctorants.photocard')
                   
                      <div class="card mt-3">
    
</div>

        
                    </div>


                    <div class="col-md-8">
        
        
        <!-- ZONE 2 -->

        <div class="card mb-3">
          <div class="card-body d-flex justify-content-between align-items-center">
              <h4 class="text-primary mb-0">Informations Personnelles</h4>
             <a href="{{route('doctorants.infopers', ['id' => $user->id])}}" > <button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
              </span>Détails</button> </a>
            
          </div>
      </div>
      
      <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="text-primary mb-0">Informations de Thèse</h4>
            <a href="{{route('doctorants.infothese', ['id' => $user->id])}}" >
            <button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
            </span>Détails</button></a>
        </div>
    </div>
    
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="text-primary mb-0">Télécharger le dossier de condidature</h4>
            <a href="{{route('doctorants.zipdownload',['id' => $user->id])}}" >
                
                <button type="button" class="btn btn-rounded btn-warning"><span class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                </span>Télécharger</button></a>
           
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


                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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