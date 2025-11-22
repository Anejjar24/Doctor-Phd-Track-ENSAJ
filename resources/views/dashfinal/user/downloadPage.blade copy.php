<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashfinal.initial.csslink')
</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">
        @include('dashfinal.initial.nav-header')
        @include('dashfinal.initial.header')
        @include('dashfinal.user.sidebar')

        <!-- Content body start -->
        <div class="content-body">
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
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Télécharger le fichier ZIP ici</h5>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{ route('user.zipdownload') }}" class="btn btn-primary btn-lg">Télécharger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content body end -->
    </div>
    <!-- Main wrapper end -->

    <!-- Footer -->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">ENSAJ</a> 2024</p>
        </div>
    </div>
    <!-- Footer end -->

    <!-- Scripts -->
    @include('dashfinal.initial.jslinks')
</body>
</html>
