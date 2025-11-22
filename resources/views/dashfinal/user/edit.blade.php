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
                <div class="row grid">
                    <div class="col-lg-12">
                        <div class="grid-col">
                <section >
        
                </section><!-- End Breadcrumbs Section -->
                <h2 class="text-primary" style="text-align: center;">Modifier les Informations Personneles</h2>
              <section class="inner-page">
                <div class="container">
                  <div class="row justify-content-center"> <!-- Center the form within the container -->
                      <div class="col-md-10">
                        
          
                    <form method="POST" action="{{route('user.update')}}">
                      @csrf
                      @method('PUT')


            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                     <label class="text-muted">Prénom</label>
                  <input type="text" name="prenom" class="form-control" value="{{ $user->prenom }}"  />
                 
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                     <label class="text-muted" for="form6Example2">Nom</label>
                  <input type="text" name="nom" class="form-control"  value="{{ $user->nom }}" />
                 
                </div>
              </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                       <label class="text-muted" for="form6Example1">CIN </label>
                    <input type="text" name="CIN" class="form-control"  value="{{ $user->CIN }}" />
                   
                  </div>
                </div>
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                       <label class="text-muted" for="form6Example2">Date de naissance</label>
                    <input type="date" name="date_de_naissance" class="form-control"  value="{{ $user->date_de_naissance }}" />
                   
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                       <label class="text-muted">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" value="{{ $user->telephone }}"  />
                   
                  </div>
                </div>
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                       <label class="text-muted" for="form6Example2">Adresse</label>
                    <input type="text" name="adresse" class="form-control"  value="{{ $user->adresse }}" />
                   
                  </div>
                </div>
              </div>

             



            
    

       

<br>

        

            
           
            <!-- Submit button -->
           
            <div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg mr-3">Valider</button>
               <a href="{{route('user.home')}}"> <button type="button" class="btn btn-outline-warning btn-lg mr-5">Annuler</button></a>
            </div>
            
            
          
          
          </form>
                    
                    
                    
          </div>	  
                    
          </div>  
                </div>
              </section>
            </div>
        </div>
    </div>
          
            
            <script >
              import { Input, Ripple, initMDB } from "mdb-ui-kit";
              
              initMDB({ Input, Ripple });
              </script>
          
          





                
              

            
        </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
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