@extends('dashfinal.admin.candidatures.layoutcand')
@section('content')
<div class="content-body">
    <!-- row -->

    @include('sweetalert::alert')
    
    <div class="container-fluid">
        <div class="row grid">
            <div class="col-lg-12">
                <div class="grid-col">
        <section >

        </section><!-- End Breadcrumbs Section -->
        <h2 class="text-primary" style="text-align: center;"> le motif de refus </h2>
      <section class="inner-page">
        <div class="container">
          <div class="row justify-content-center"> <!-- Center the form within the container -->
              <div class="col-md-10">
                
  
            <form id="submitForm" method="POST" action="{{route('updateMotif',['id' => $user->id])}}">
              @csrf
              @method('PUT')


    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="text-muted" >Saisissez votre motif pour le refus de ce dossier ?</label>
        <textarea name="motif_de_refus" class="form-control" rows="4"  >{{$user->motif_de_refus}}</textarea>

    
    
   </div>

    
<br>

    <!-- Submit button -->
   
    <div>
        <br>
        <button onclick="showConfirmation()" type="button" class="btn btn-primary btn-lg mr-5">Valider</button>
        
    </div>
    
    
  
  
  </form>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function showConfirmation() {
        // Afficher la SweetAlert de confirmation
        Swal.fire({
            title: 'Attention! <br>Êtes-vous sûr de vouloir soumettre la candidature? ?',
            text: 'Il est important de vérifier le contenu de vos données personnelles et de votre thèse, ainsi que la vérification du dépôt de votre dossier et de son contenu, avant de soumettre votre candidature. Une fois la candidature soumise, vous ne pourrez plus mettre à jour ni modifier ces informations.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmer'
            
        }).then((result) => {
            // Si l'utilisateur clique sur "Confirmer"
            if (result.isConfirmed) {
                // Soumettre le formulaire
                document.getElementById('submitForm').submit();
            }
        });
    }
</script>


            
            
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
</div>
@endsection