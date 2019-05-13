<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TutoNet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Poppins:300,400,600')}}">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{url('vendor/lightbox2/css/lightbox.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{url('css/fontastic.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('img/logo.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="img/logo.svg" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="/" class="nav-link active">Accueil</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/commentcamarche" class="nav-link">Comment ça marche</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/contact" class="nav-link">Contact</a></li>
                  <!-- Link-->
                <div class="dropdown-menu"><a href="/commentcamarche" class="dropdown-item">Comment ça marche</a><a href="contact.html" class="dropdown-item">Contact</a></div>
              </li>
            </ul><a href="/apprenant/login"  class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Login Modal-->

    <!-- Hero Section-->
    </section>
    <section class="hero">
      <div class="container mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="hero-heading mb-0">Votre avenir commence içi</h1>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4">Première plateforme d'E-Learning en Tunisie, dont la quelle vous pouvez choisir votre Rôle.</p>
              </div>
            </div>

              <div class="form-group">
                <a href="/formateur/register"   class="btn btn-primary navbar-btn ml-0 ml-lg-3">Formateur</a>
                <a href="/apprenant/register" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Apprenant</a>
              </div>

          </div>
          <div class="col-lg-6"><img src="{{url('img/aaaaaa.png')}}" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
        </div>
      </div>
    </section>
    <!-- Intro Section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Pourquoi TutoNet </h2>
          <p class="lead text-muted mt-2">avec "TutoNet" vous pouvez choisir votre role: Apprenant & Formateur,
            aussi nous garantissons la qualité des formations et l'accessibilité de communiquer avec tout autre utilisateur
          </p><a href="#" class="btn btn-primary">Learn More</a>
        </div>
        <div class="row">
          <div class="col-lg-7 mx-auto mt-5"><img src="{{url('img/aaaaaaA.png')}}" alt="..." class="intro-image img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <section class="bg-primary text-white">
      <div class="container">
        <div class="text-center">
          <h2>Do great things together</h2>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <p class="lead text-white mt-2">A l'école on apprend le passé simple, Le futur compliquer c'est avec TutoNet</p>
            </div>
          </div><a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </section>
    <!-- Integrations Section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>TutoNet</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">.......................</p>
            </div>
          </div>
        </div>
        <div class="integrations mt-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/monitor.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">Accéder au différent cours</h3>
                <p class="text-small font-weight-light">Trouvez vous le cours que tu besoins</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/target.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">Vos avis son naicessaire pour nsou</h3>
                <p class="text-small font-weight-light">Pour améliorer la qualité des vidéo vous pouvez commenter tous les cours</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/chat.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">Espace de communications</h3>
                <p class="text-small font-weight-light">Communiquer avec vos amis aussi avec les formateurs</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/idea.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">Ajouter des cous Dans votre domaine</h3>
                <p class="text-small font-weight-light">Vous pouver ajouter des cours</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/coffee-cup.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">Email Marketing</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="{{url('img/pen.svg')}}" alt="..." class="img-fluid"></div>
                <h3 class="h4">UX &amp; UI</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- How it works Section-->
    <section class="bg-gray">
      <div class="container text-center text-lg-left">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 class="divider-heading">Curious how Appton <br>works for large</h2>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead divider-subtitle mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing. Vitae animi mollitia cumque sunt soluta. consectetur adipisicing.</p>
              </div>
            </div><a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-5 mt-5 mt-lg-0"><img src="img/illustration-2.svg" alt="" class="divider-image img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section-->
    <section class="pb-0">
      <div class="container">
        <div class="text-center">
          <h2>Portfolio</h2>
          <p class="lead text-muted mt-2">You can make also a portfolio or image gallery.</p>
        </div>
        <div class="portfolio mt-5">
          <div class="row">
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-1.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-1.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-2.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-2.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-3.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-3.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-4.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-4.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-5.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-5.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="{{url('img/portfolio-6.jpg')}}" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="img/portfolio-6.jpg" alt="image" class="img-fluid"></a></div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved Safouene Raddaoui. Design by <a href="https://www.cdcp-tn.com" class="external footer-link">CDCP</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="https://www.facebook.com/Forum.Elearning.Tunisie/" class="social-link"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/CDCP_tn" class="social-link"><i class="fa fa-twitter"></i></a><a href="https://www.youtube.com/user/elearningwebtv" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="https://www.instagram.com/cdcp.digital.learning/" class="social-link"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{url('js/front.js')}}"></script>
  </body>
</html>
