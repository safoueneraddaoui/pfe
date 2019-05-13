<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appton - Bootstrap 4 Template</title>
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
                  <li class="nav-item"> <a href="/" class="nav-link">Accueil</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/commentcamarche" class="nav-link">Comment ça marche</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/contact" class="nav-link active">Contact</a></li>
                  <!-- Link-->
                <div class="dropdown-menu"><a href="/commentcamarche" class="dropdown-item">FAQ</a><a href="contact.html" class="dropdown-item">Contact</a></div>
              </li>
            </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="#" class="login-form text-left">
              <div class="form-group mb-4">
                <label>Email address</label>
                <input type="email" name="email" placeholder="name@company.com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Password</label>
                <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
      <div class="container text-center">
        <!-- breadcrumb-->

        <h1 class="hero-heading">Contactez nous</h1>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="lead text-muted mt-2">contactez notre societé si vous avez des problemes ou vous voulez s'informer sur quelque chose</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section-->
    <section>
      <div class="container">
        <header class="section-header">
          <h2 class="mb-2">veuillez remplir le formulaire </h2>
          <p class="lead">S'il vous plaît soumettre vos informations et nous ferons un suivi avec vous dès que possible.</p>
        </header>
        <div class="row align-items-center mt-5">
          <div class="col-lg-7">
            <form action="#" class="contact-form text-left">
              <div class="form-group mb-4">
                <label>Nom et Prénom<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="name" placeholder="Safouene Raddaoui" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>adresse Email<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="email" placeholder="safouene.raddaoui.tkd@gmail.com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Sujet<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="subject" placeholder="Briefly describe your question" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>veillez écrire les détailles s'il vous plaît<sup class="text-primary">&#10033;</sup></label>
                <textarea name="message" placeholder="Dites-nous ce que vous avez besoin" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send message" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="col-lg-5 contact-details mt-5 mt-lg-0">
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/placeholder.svg" alt="" class="img-fluid"></div>
              <h5>ADRESSE</h5>
              <p class="text-small font-weight-light">Technopark Elgazala - 2088 Ariana - Tunisie</p>
            </div>
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/technology.svg" alt="" class="img-fluid"></div>
              <h5>TÉLÉPHONE</h5><strong class="text-muted">(+216) 70 038 978</strong>
            </div>
            <div class="box">
              <div class="icon d-flex align-items-end"><img src="img/multimedia.svg" alt="" class="img-fluid"></div>
              <h5>E-MAIL</h5>
              <ul class="text-left">
                <li><a href="contact@cdcp-tn.com" class="text-small">contact@cdcp-tn.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CLients Section-->
    <section class="bg-gray">
      <div class="container">
        <div class="text-center">
          <h2>Trusted by teams everywhere</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt..</p>
            </div>
          </div>
        </div>
        <div class="clients mt-5">
          <div class="row">
            <div class="col-lg-2"><img src="img/client-1.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-2.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-3.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-4.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-5.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="img/client-6.svg" alt="" class="client-image img-fluid"></div>
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
