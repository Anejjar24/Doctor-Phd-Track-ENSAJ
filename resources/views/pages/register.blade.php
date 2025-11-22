@extends('layouts.homepage.apphome')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section >
        
      </section><!-- End Breadcrumbs Section -->
      <h2 style="text-align: center;">Inscription</h2>
    <section class="inner-page">
      <div class="container">
        <div class="row justify-content-center"> <!-- Center the form within the container -->
            <div class="col-md-10">
		  <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example1">Prénom</label>
        <input type="text" id="form6Example1" class="form-control" />
       
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example2">Nom</label>
        <input type="text" id="form6Example2" class="form-control" />
       
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example1">CIN</label>
        <input type="text" id="form6Example1" class="form-control" />
       
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example2">Date de naissance</label>
        <input type="date" id="form6Example2" class="form-control" />
       
      </div>
    </div>
  </div>

  

  

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
	  <label class="form-label" for="form6Example5">Email</label>
    <input type="email" id="form6Example5" class="form-control" />
    
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
	  <label class="form-label" for="form6Example5">Confirmer votre adresse Email</label>
    <input type="email" id="form6Example5" class="form-control" />
    
  </div>
  

  <!-- Number input -->
  <div data-mdb-input-init class="form-outline mb-4">
	   <label class="form-label" for="form6Example6">Mot de Passe</label>
    <input type="password" id="form6Example6" class="form-control" />
   
  </div>

  
 
  <!-- Submit button -->
  <button class="custom-button">Cliquez-moi</button>



</form>
		  
		  
		  
</div>	  
		  
</div>  
      </div>
    </section>

  </main><!-- End #main -->
  <script >
    import { Input, Ripple, initMDB } from "mdb-ui-kit";
    
    initMDB({ Input, Ripple });
    </script>


@endsection