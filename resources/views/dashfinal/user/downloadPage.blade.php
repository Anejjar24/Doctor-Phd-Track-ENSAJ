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
                            <h4> Télécharger le dossier</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 text-right">
                        <a href="{{route('user.home')}}"  class="btn btn-outline-light">Retour</a>
                    </div>
                </div>
            
                <div class="row mt-4">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-title text-info">Documents Administratifs pour l'Année Universitaire 2023-2024 à l'ENSA d'El Jadida</h5>
                                        <div>
                                            <br>
                                            <h6>Règlement Administratif</h6>
                                            <p>Année Universitaire 2023-2024</p>
                                            <h6>Calendrier Administratif</h6>
                                            <p>Année Universitaire 2023-2024</p>
                                            <h6>Annonce :</h6>
                                            <p>Procédure d'habilitation universitaire pour l'année universitaire 2023-2024.</p>
                                            <h6>Status d'habilitation universitaire:</h6>
                                            <p>Révision des règles concernant l'organisation de l'habilitation universitaire à l'ENSA d'El Jadida.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Télécharger les documents (fichier ZIP) ici</h5>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ route('user.telecharger') }}" class="btn btn-primary btn-lg">Télécharger</a>
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