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
                <h2 class="text-primary" style="text-align: center;">Modifier les Informations Thèse </h2>
              <section class="inner-page">
                <div class="container">
                  <div class="row justify-content-center"> <!-- Center the form within the container -->
                      <div class="col-md-10">
          
          
                       
                      
          
                    <form method="POST" action="{{route('user.these.update')}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')


            <!-- 2 column grid layout with text inputs for the first and last names -->
           
          
          

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="text-muted"  for="password">Titre de Thèse</label>
             <input  type="text" class="form-control " name="titre"  value="{{$userth->titre }}"/>
            
           </div>

           <div data-mdb-input-init class="form-outline mb-4">
            <label class="text-muted" >Description</label>
            <textarea name="description" class="form-control" rows="4"  value="{{$userth->description }}" ></textarea>

        
        
       </div>


       <div class="row mb-4">
        <div class="col">
          <div data-mdb-input-init class="form-outline">
               <label class="text-muted">Laboratoire</label>
            <input type="text" name="laboratoire" class="form-control"  value="{{$userth->laboratoire }}"/>
           
          </div>
        </div>
        <div class="col">
          <div data-mdb-input-init class="form-outline">
               <label class="text-muted" for="form6Example2">Date d'inscription</label>
               <input type="date" name="date_inscription" class="form-control"  value="{{$userth->date_inscription }}" />
           
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col">
          <div data-mdb-input-init class="form-outline">
               <label class="text-muted">Directeur</label>
            <input type="text" name="directeur" class="form-control"  value="{{$userth->directeur }}"  />
           
          </div>
        </div>
        <div class="col">
          <div data-mdb-input-init class="form-outline">
               <label class="text-muted" for="form6Example2">Codirecteur</label>
            <input type="text" name="codirecteur" class="form-control"  value="{{$userth->codirecteur }}" />
           
          </div>
        </div>


       
      </div>


      <label for="photoInput" class="text-muted">Photo(nom_prenom.jpg/png/jpeg)</label>
      <div class="custom-file">
        
        
        <input type="file" class="custom-file-input" name="photo"  value="{{$userth->photo }}" >
        <label class="custom-file-label" for="photoInput" >Choisir fichier</label>
       
    </div>
    

       

<br>

        

            
           
            <!-- Submit button -->
           
            <div>
                <br>
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