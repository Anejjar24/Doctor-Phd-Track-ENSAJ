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
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Doctorants</h4>
                           
                        </div>
                    </div>
                   
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>CIN</th>
                                                <th>Status</th>
                                                <th>Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr class="text-muted">
                                                @php
                                                if($user->etat == 0)
                                                    $status = "Brouillon";
                                                elseif($user->etat == 1)
                                                    $status = "En cours";
                                                elseif($user->etat == 2)
                                                    $status = "Accéptée";
                                                else
                                                    $status = "Refusée";
                                            @endphp


                                                <td>{{$user->id}}</td>
                                               
                                                <td>{{$user->nom}}</td>
                                                <td>{{$user->prenom}}</td>
                                                <td>{{$user->CIN}}</td>
                                                <td><a href="#"><span class="badge badge-light">  {{$status}}</span></a></td>
                                                <td><a href={{route('doctorants.details',['id' => $user->id])}}><span class="badge badge-info"> Détails</span></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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



















