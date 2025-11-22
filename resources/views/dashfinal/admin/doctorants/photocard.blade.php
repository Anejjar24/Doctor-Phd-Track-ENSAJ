<div class="card">
    <div class="card-body">
      <div class="d-flex flex-column align-items-center text-center">
        @if(!empty($user->photo))
        <img src="{{asset($user->photo)}}" alt="photo" class="rounded-circle" width="200" height="200">
        @else
        <img src="{{asset('image anoynyme/image anony.webp')}}" alt="photo" class="rounded-circle" width="200" height="200">
        @endif
        <div class="mt-3">
          
          
            <h4>{{ $user->nom }} {{ $user->prenom }}</h4>
            <h5 class="text-info">Etat de Candidature</h5>
            @if($user->etat == 0)
                    <p class="text-danger">Brouillon</p>
                    @elseif($user->etat == 1)
                    <p class="text-danger">En cours</p>
                    @elseif($user->etat == 2)
                    <p class="text-danger">Accéptée</p>
                    @else
                    <p class="text-danger">Refusée</p>
                    @endif
                   
          

          
        </div>
      </div>
    </div>
  </div>