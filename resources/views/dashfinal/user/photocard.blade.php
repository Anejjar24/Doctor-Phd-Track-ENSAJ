<div class="card">
    <div class="card-body">
      <div class="d-flex flex-column align-items-center text-center">
        @if(!empty(Auth::user()->photo))
        <img src="{{asset(Auth::user()->photo)}}" alt="photo" class="rounded-circle" width="200" height="200">
        @else
        <img src="{{asset('image anoynyme/image anony.webp')}}" alt="photo" class="rounded-circle" width="200" height="200">
        @endif
        <div class="mt-3">
          
          
            <h4>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h4>
            <h5 class="text-info">Etat de Candidature</h5>
            @if(auth()->check())
                @if(auth()->user()->etat == 0)
                    <p class="text-danger">Brouillon</p>
                @elseif(auth()->user()->etat == 1)
                    <p class="text-danger">En cours</p>
                @elseif(auth()->user()->etat == 2)
                    <p class="text-danger">Accéptée</p>
                @else
                    <p class="text-danger">Refusée</p>
                @endif
            @endif
          

          
        </div>
      </div>
    </div>
  </div>