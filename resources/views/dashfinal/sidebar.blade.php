<div class="quixnav">

    
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            
            
           
            <li class="nav-label"></li>
            <li><a  href="javascript:void()" aria-expanded="false"><i
                class="icon icon-layout-25"></i><span class="nav-text">Dashboard</span></a>
        
                </li>

                <li><a  href="javascript:void()" aria-expanded="false"><i
                    class="icon icon-single-04"></i><span class="nav-text">Profil Admin</span></a>

            </li>

            <li><a  href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-copy-06"></i><span class="nav-text">Doctorants</span></a>

        </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-form"></i><span class="nav-text">Condidatures</span></a>
        <ul aria-expanded="false">
            <li><a href="./ui-accordion.html">Brouillon</a></li>
            <li><a href="./ui-alert.html">En Cours</a></li>
            <li><a href="./ui-badge.html">Acceptées</a></li>
            <li><a href="./ui-button.html">Refusées</a></li>
           
           
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