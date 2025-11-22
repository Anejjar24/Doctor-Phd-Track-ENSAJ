@extends('layouts.homepage.apphome')

@section('content')

<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Plateforme de Gestion de Doctorants</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">une plateforme Web pour la gestion du service doctorat , habilitation universitaire et coopération .</h2>
        <div data-aos="fade-up" data-aos-delay="800">
          <a href="{{ route('register') }}" class="btn btn-get-started scrollto mr-4">Création de compte</a>
          <a href="{{ route('login') }}" class="btn btn-get-started  scrollto">Connexion </a>
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="{{asset('homepage/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section><!-- End Hero -->





<main id="main">

 

  

 
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Pour déposer votre dossier d'habilitation au cycle Doctorat à l'Ensa d'El jadida<br>merci de suivre les étapes suivantes </h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Etape 1</a></h4>
            <p class="description">Inscription à la plateforme et la création de votre espace condidat.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Etape 2</a></h4>
            <p class="description">Remplir les formulaire de données personnelles et de thése.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Etape 3</a></h4>
           
            <p class="description"> Télécharger les documents proposées par l’établissement .</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Etape 4</a></h4>
            <p class="description">Déposer votre dossier condidature .</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

 
 
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contactez-nous</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>ENSAJ</h3>
            <p>L'Ecole Nationale des Sciences Appliquées d'El Jadida ENSAJ, est un établissement public qui a pour vocation la formation d’ingénieurs d’état, la formation continue et la recherche scientifique.</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Route d'Azemmour, Nationale N°1, ELHAOUZIA<br>BP : 5096 El Jadida, <br>24002 Maroc</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>Email: hdr.ensaj@ucd.ac.ma</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>tel: (+212) 5 23 34 48 22</p>
            </div>
            <div>
              <i class="ri-phone-line"></i>
              <p>fax: (+212) 5 23 39 49 15</p>
            </div>

          </div>
        </div>
        
        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.5902974061264!2d-8.436300284588105!3d33.25103528083154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda91dc4c0413d23%3A0xc8dbb36f4b2d2cbc!2sENSA%20-%20El%20Jadida!5e0!3m2!1sfr!2sma!4v1680393763141!5m2!1sfr!2sma" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection