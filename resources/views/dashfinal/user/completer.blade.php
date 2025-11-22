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
                            <h4> Pour compléter la candidature:</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 text-right">
                        <a href="{{route('user.home')}}"  class="btn btn-outline-light">Retour</a>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body w-85">
                                <h5 class="card-title">Veuillez suivre les étapes suivantes:</h5>
                                <ul class="list-icons ml-4 text-muted">
                                    <br>
                                    <li class="d-flex align-items-start"><span class="align-middle"><i class="fa fa-check text-info mt-1 mr-2"></i></span> <span>Vérifiez tout d’abord les données personnelles que vous avez déjà saisies, afin de les modifier au cas où vous auriez commis une erreur quelque part.</span></li>
                                    <br><li class="d-flex align-items-start"><span class="align-middle"><i class="fa fa-check text-info mt-1 mr-2"></i></span> <span>Remplissez les données de thèse nécessaires.</span></li>
                                    <br><li class="d-flex align-items-start"><span class="align-middle"><i class="fa fa-check text-info mt-1 mr-2"></i></span> <span>Veuillez télécharger les fiches proposées par l’établissement, dans le but d'obtenir plus d'informations détaillées sur les procédures administratives en cours.</span></li>
                                    <br><li class="d-flex align-items-start"><span class="align-middle"><i class="fa fa-check text-info mt-1 mr-2"></i></span> <span>Veuillez déposer un dossier au format zip, en respectant les documents mentionnés dans le champ spécifié au dépôt.</span></li>
                                    <br><li class="d-flex align-items-start"><span class="align-middle"><i class="fa fa-check text-info mt-1 mr-2"></i></span> <span>Enfin, avant de soumettre votre candidature, veuillez bien vérifier toutes les données que vous avez remplies, ainsi que les documents que vous avez déposés.<span class="text-danger"> Car il y aura plus de possibilités de modification après la soumission de votre candidature.</span></span></li>
                                </ul>
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