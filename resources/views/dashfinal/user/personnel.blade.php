<!DOCTYPE html>
<html lang="en">

<head>
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
        @include('dashfinal.initial.nav-header')
       

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
        @include('dashfinal.user.sidebar')


        <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		
		
		
		
		
		
		
		

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->


            
            <div class="container-fluid">
                
               
                  <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Informations Personnelles</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 text-right">
                        <a href="{{route('user.home')}}" class="btn btn-outline-light">Retour</a>
                    </div>
                </div>
                       
                    

               

                
              
            
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        
                      @include('dashfinal.user.photocard')
                   
                      <div class="card mt-3">
    
</div>

        
        
                     
        
        
        
        
                    </div>


                    

                    
        
        
        
        
        
        
        
        
                    <div class="col-md-8">
        
        
        <!-- ZONE 2 -->
        
                      <div class="card mb-3">
                        <div class="card-body">
                    
                          <div class="row">
                            
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nom</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->nom }}
                            </div>
                          </div>
        
                          <hr>
        
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Prenom</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->prenom }}
                            </div>
                          </div>
        
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">CIN</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->CIN }}
                            </div>
                          </div>
        
                          <hr>
        
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Date de naissance</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->date_de_naissance }}
                            </div>
                          </div>
        
                          <hr>
        
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->email }}
                            </div>
                          </div>
        
        
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Téléphone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->telephone }}
                            </div>
                          </div>
        
                          <hr>
                          
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Adresse</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{ Auth::user()->adresse }}
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
        
        
        
        
        
        
        
        <!-- ZONE 4 -->
        
        
        
        
        
        
        

























                      
        
        
                    </div>
        
        
        
        
        
                  </div>
        

                 


                </div>


               
                



            </div>
        
                    
           
        
        
        
        
        
        
        
        
        
        
        
        
        
        

            
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <br>
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
    @include('dashfinal.initial.jslinks')

</body>

</html>