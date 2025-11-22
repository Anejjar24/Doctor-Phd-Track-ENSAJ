<div class="quixnav">

    
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            
            
           
            <li class="nav-label"></li>
           
            <li><a  href="{{route('user.home')}}" aria-expanded="false"><i
                class="ti-home"></i><span class="nav-text">Dashboard</span></a>
        
                </li>

                <br>

                @if(auth()->check() && auth()->user()->etat == 0)
            <li><a  href="{{route('user.edit')}}" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Données personnelles</span></a>
        
                </li>

           
            

            
              
          

            <li><a href="{{route('user.these.edit')}}" aria-expanded="false"><i
                class="icon icon-form"></i><span class="nav-text">Données de Thèse</span></a>

        </li>

        <br>
        <br>
        <li><a  href="{{route('user.uploadPage')}}" aria-expanded="false"><i
            class="icon icon-app-store"></i><span class="nav-text">Dépôt de Dossier</span></a>

    </li>
    <li><a href="{{route('user.downlaodPage')}}" aria-expanded="false"><i  
        class="icon icon-app-store"></i><span class="nav-text">Télécharger Dosssier</span></a>

</li>


       
            <br>
            @endif

            <li><a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" aria-expanded="false"><i
                        class="icon icon-plug"></i><span class="nav-text">Déconnexion</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </li>



           
            <li class="nav-label"><!--titre puis li --></li>
            
           

           
        </ul>
    </div>


</div>