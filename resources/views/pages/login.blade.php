@extends('layouts.homepage.apphome')

@section('content')

<section >
        
</section><!-- End Breadcrumbs Section -->

<section class="inner-page" style="background-color:#3498db">
    <div class="container">
      
       <!-- Login 6 - Bootstrap Brain Component -->

<div class="container" >
  <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3>Connexion</h3>
              </div>
            </div>
          </div>
          <form action="#!">
            <div class="row gy-3 overflow-hidden">
              <div class="col-12">
                <div class="form-floating mb-3">
                    
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                  <label for="email" class="form-label">Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                  <label for="password" class="form-label">MOt de passe</label>
                </div>
              </div>
              
              <div class="col-12">
                <div class="d-grid">
                  <button class="custom-button" type="submit">S'identifier</button>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                <a href="#!" class="link-secondary text-decoration-none">Créer un compte</a>
                <a href="#!" class="link-secondary text-decoration-none">Mot de passe oublié</a>
              </div>
            </div>
          </div>
          
            
            
            
            
        </div>
      </div>
    </div>
  </div>
</div>


        
        
        
        
        
        
    </div>
  </section>
    
    
    
@endsection