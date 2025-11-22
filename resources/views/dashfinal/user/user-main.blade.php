<!DOCTYPE html>
<html lang="en">

<head>
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
                            <h4>Dossier de candidature</h4>
                            
                        </div>
                    </div>
                   
                </div>

               

                
                

                <br>
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        
                        @include('dashfinal.user.photocard')
                   
                      <div class="card mt-3">
    
</div>

        
        
                     
        
        
        
        
                    </div>


                    

                    
        
        
        
        
        
        
        
        
                    <div class="col-md-8">
        
        
        <!-- ZONE 2 -->
        @if(auth()->check() && auth()->user()->etat == 0)
        <div class="card-body d-flex justify-content-between align-items-center">

            <form id="submitForm" action="{{ route('user.mettreEtat') }}" method="POST">
                @csrf
                @method('POST')
       
           <button onclick="showConfirmation()" type="button"   class="btn btn-primary btn-lg " >Soumettre la candidature</button></a>
            </form>



          <a href="{{route('user.completer')}}"  ><button type="button" class="btn btn-outline-secondary btn-lg" >Compléter la candidature</button></a>
        </div>

        <br>
        <br>
        @endif
        <div class="card mb-3">
          <div class="card-body d-flex justify-content-between align-items-center">
              <h4 class="text-primary mb-0">Informations Personnelles</h4>
             <a href="{{route('user.profile')}}" > <button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
              </span>Détails</button> </a>
            
          </div>
      </div>
      
      <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="text-primary mb-0">Informations de Thèse</h4>
            <a href="{{route('user.infothese')}}" >
            <button type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
            </span>Détails</button></a>
        </div>
    </div>
    @if(auth()->check() && auth()->user()->etat != 0)
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="text-primary mb-0">Télécharger votre dossier de condidature</h4>
            <a href="{{route('user.infothese')}}" >
                <a href="{{route('user.zipdownload')}}" >
                <button type="button" class="btn btn-rounded btn-warning"><span class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                </span>Télécharger</button></a>
           
        </div>
    </div>
    @endif
   
    
      

    
        
        
        
        
        
        
       


          
     
          
        
        
          
        
            
        
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
    <script>
        function showConfirmation() {
            // Afficher la SweetAlert de confirmation
            Swal.fire({
                title: 'Attention! <br>Êtes-vous sûr de vouloir soumettre la candidature? ?',
                text: 'Il est important de vérifier le contenu de vos données personnelles et de votre thèse, ainsi que la vérification du dépôt de votre dossier et de son contenu, avant de soumettre votre candidature. Une fois la candidature soumise, vous ne pourrez plus mettre à jour ni modifier ces informations.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmer'
                
            }).then((result) => {
                // Si l'utilisateur clique sur "Confirmer"
                if (result.isConfirmed) {
                    // Soumettre le formulaire
                    document.getElementById('submitForm').submit();
                }
            });
        }
    </script>

   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    @include('dashfinal.initial.jslinks')

</body>

</html>