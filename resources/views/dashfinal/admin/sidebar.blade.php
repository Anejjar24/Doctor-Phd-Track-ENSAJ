<div class="quixnav">

    
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            
            
           
            <li class="nav-label"></li>
            
            <li><a  href="{{route('dashboard')}}" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
        
                </li>

                

            <br>


            <li><a  href="{{route('doctorants')}}" aria-expanded="false"><i
                class="icon icon-single-copy-06"></i><span class="nav-text">Doctorants</span></a>

        </li>





        <li><a  href="{{ route('candidature') }}" aria-expanded="false"><i 
            class="ti-pencil-alt"> </i><span class="nav-text">Gestion de condidatures</span></a>

    </li>


   
        <br>
            <li><a  class="has-arrow"  aria-expanded="false"><i
                class="ti-list"></i><span class="nav-text">Candidatures</span></a>
        <ul aria-expanded="false">
            <li><a href="{{ route('candidature.brouillon') }}">Brouillon</a></li>
            <li><a href="{{ route('candidature.encours') }}">En Cours</a></li>
            <li><a href="{{ route('candidature.acceptee') }}">Acceptées</a></li>
            <li><a href="{{ route('candidature.refusee') }}">Refusées</a></li>
           
           
        </ul>
    </li>
<br>
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