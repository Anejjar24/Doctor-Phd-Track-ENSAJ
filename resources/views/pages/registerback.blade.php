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




		  <form method="POST" action="{{ route('register') }}">
            @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control" />
       
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example2">Nom</label>
        <input type="text" name="nom" class="form-control" />
       
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example1">CIN</label>
        <input type="text" name="CIN" class="form-control" />
       
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
		   <label class="form-label" for="form6Example2">Date de naissance</label>
        <input type="date" name="date_de_naissance" class="form-control" />
       
      </div>
    </div>
  </div>

  

  

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
	  <label class="form-label" for="email">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  </div>

  
  

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
	   <label class="form-label"  for="password">Mot de Passe</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
   
  </div>


  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="password-confirm">Confirmer Mot de Passe</label>
 <input type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password" />

</div>

  
 
  <!-- Submit button -->
  <button type="submit" class="custom-button">Valider</button>



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