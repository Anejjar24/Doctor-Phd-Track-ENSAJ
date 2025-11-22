<!DOCTYPE html>
<html lang="en">

<head>
    
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
                            <h4> Dépôt de dossier</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 text-right">
                        <a href="{{route('user.home')}}"  class="btn btn-outline-light">Retour</a>
                    </div>
                </div>
               
            
                <div class="row">
                    <!-- Card pour les pièces à fournir -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pièces à fournir</h5>
                                <ul type="disc"class="text-muted pl-3 list-icons" style="list-style-type: disc; padding-left: 0;">
                                    <br>
                                    <li style="list-style-type: disc;">Demande de soutenance</li>
                                    <br>
                                    <li style="list-style-type: disc;">Fiche discriptif de thèse</li>
                                    <br>
                                   <li style="list-style-type: disc;">Copie de carte d'identité nationale</li>
                                   <br>
                                    <li style="list-style-type: disc;">Photo d'identité</li>
                                    <!-- Ajoutez ici d'autres pièces à fournir si nécessaire -->
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <!-- Card pour le formulaire de téléchargement -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Saisir Votre Dossier</h5>
                                <br>
                                <form method="POST" action="{{ route('user.zipUpload') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
            
                                    <label for="fileInput" class="text-muted">Veuillez sélectionner le fichier zip :</label>
                                    


                                    <div class="custom-file">
        
        
                                        <input type="file" class="custom-file-input" name="zip_file"  >
                                        <label class="custom-file-label" for="photoInput" >Choisir fichier</label>
                                       
                                    </div>
                                    
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg mt-3">Valider</button>
                                    
                                </form>
                            </div>
                        </div>
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
    @include('dashfinal.initial.jslinks')

</body>

</html>