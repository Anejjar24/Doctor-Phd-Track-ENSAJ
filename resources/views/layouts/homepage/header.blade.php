<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/"> <a href="/" class="brand-logo">
          <img class="logo-abbr" src="{{asset('dashfinal/my-img/images (1).png')}}" alt="">
       
      </a>ENSAJ</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
         


          @if (Route::has('login'))
          @auth

          <li>
          <a
                                        href="{{ route('dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
            </li>



           @else


           <li><a class="nav-link scrollto active" href="/">Accueil</a></li>

          <li><a class="nav-link scrollto active" href="{{ route('register') }}">Création de compte</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('login') }}">Connexion</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contactez-nous</a></li>
            @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>