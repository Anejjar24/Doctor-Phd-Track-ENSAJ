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

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="text-muted" for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email"  value="{{ $user->email }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            



            
    

       

           
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="text-muted"  for="password">Titre de Thèse</label>
            <input  type="text" class="form-control " name="titre"  value="{{$user->titre }}"/>

            </div>

            <div data-mdb-input-init class="form-outline mb-4">
            <label class="text-muted" >Description</label>
            <textarea name="description" class="form-control" rows="4"  value="{{$user->description }}" ></textarea>



            </div>


            <div class="row mb-4">
            <div class="col">
            <div data-mdb-input-init class="form-outline">
            <label class="text-muted">Laboratoire</label>
            <input type="text" name="laboratoire" class="form-control"  value="{{$user->laboratoire }}"/>

            </div>
            </div>
            <div class="col">
            <div data-mdb-input-init class="form-outline">
            <label class="text-muted" for="form6Example2">Date d'inscription</label>
            <input type="date" name="date_inscription" class="form-control"  value="{{$user->date_inscription }}" />

            </div>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col">
            <div data-mdb-input-init class="form-outline">
            <label class="text-muted">Directeur</label>
            <input type="text" name="directeur" class="form-control"  value="{{$user->directeur }}"  />

            </div>
            </div>
            <div class="col">
            <div data-mdb-input-init class="form-outline">
            <label class="text-muted" for="form6Example2">Codirecteur</label>
            <input type="text" name="codirecteur" class="form-control"  value="{{$user->codirecteur }}" />

            </div>
            </div>



            </div>


            <label for="photoInput" class="text-muted">Photo(nom_prenom.jpg/png/jpeg)</label>
            <div class="custom-file">


            <input type="file" class="custom-file-input" name="photo"  value="{{$user->photo }}" >
            <label class="custom-file-label" for="photoInput" >Choose file</label>

            </div>




<br>





        

            
           
            <!-- Submit button -->
           
            <div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg mr-5">Valider</button>
                <button type="button" class="btn btn-outline-secondary btn-lg">Dossier de candidature</button>
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