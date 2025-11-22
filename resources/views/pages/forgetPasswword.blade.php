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
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3 style="text-align: center">Réinitialiser le mot de passe</h3>
              </div>
            </div>
          </div>
          < <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row gy-3 overflow-hidden">
              <div class="col-12">
                <div class="form-floating mb-3">
                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  <label for="email" class="form-label">Email</label>
                </div>
              </div>
              
              
              <div class="col-12">
                <div class="d-grid">
                  <button class="custom-button" type="submit">Envoyer le lien de réinitialisation</button>
                </div>
              </div>
            </div>
          </form>
          
          
            
            
            
            
        </div>
      </div>
    </div>
  </div>
</div>


        
        
        
        
        
        
    </div>
  </section>
    
    
    
@endsection