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
                  <li class="nav-item"> <a href="/commentcamarche" class="nav-link active">Comment ça marche</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/contact" class="nav-link">Contact</a></li>
                  <!-- Link-->
                <div class="dropdown-menu"><a href="/commentcamarche" class="dropdown-item">Comment ça marche</a><a href="contact.html" class="dropdown-item">Contact</a></div>
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

        <h1 class="hero-heading">Comment Fonctionne notre plate-Forme</h1>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="lead text-muted">Avoir une idée sur notre plate-forme</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ Section-->
    <section>
      <div class="container">
        <!-- wordPress installation-->
        <header class="section header mb-5">
          <h2>Espace Apprenant</h2>
          <p class="lead">Vous êtes éleve & Collégien & lycéen & etudiant</p>
        </header>
        <div class="row">
          <div class="col-lg-8">
            <div id="accordion" class="faq accordion accordion-custom pb-5">
              <!-- question-->
              <div class="card">
                <div id="headingOne" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-flex align-items-center"><i class="icon-light-bulb"></i><span>Créer un compte dans l'espace d'apprenant</span></button>
                  </h4>
                </div>
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                  <div class="card-body">Dans notre page d'acceuil vous allez trouvez un bouton "Apprenant".Remplir correctement le formulair
                    ainsi valider la création de votre compte. tous ça c'est gratuitement.
                  </div>
                </div>
              </div>
              <!-- question        -->
              <div class="card">
                <div id="headingTwo" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-flex align-items-center collapsed"><i class="icon-plug"></i><span>Accéder au cours</span></button>
                  </h4>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                  <div class="card-body">Dés que terminer la creation de votre compte une dashboard sera créer spécéfiquement pour vous
                    vous allez trouvez la liste des cours ainsi vous pouvez accéder au différent cours. </div>
                </div>
              </div>
              <!-- question-->
              <div class="card">
                <div id="headingThree" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-flex align-items-center collapsed"><i class="icon-shield-settings"></i><span>Ajouter votre commentaire</span></button>
                  </h4>
                </div>
                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                  <div class="card-body">Dés que vous terminer le cours vous pouvez ajouter votre commentaires a chaque Cours</div>
                </div>
              </div>
              <!-- question            -->
              <div class="card">
                <div id="headingFour" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-flex align-items-center collapsed"><i class="icon-stack-of-sheets"></i><span>Forum De Communication</span></button>
                  </h4>
                </div>
                <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                  <div class="card-body">Dés que êtes authentifier vous pouvez joindre le forum de TutoNet avec ses differents salon de discussion</div>
                </div>
              </div>
            </div>
            <!-- troubleshooting-->
            <header class="section-header text-left mb-5 mt-5">
              <h2 class="mt-5">Espace Formateur</h2>
              <p class="lead">Vous êtes un diplomé</p>
            </header>
            <div id="accordion2" class="faq accordion accordion-custom">
              <!-- question-->
              <div class="card">
                <div id="headingOneAlt" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseOneAlt" aria-expanded="false" aria-controls="collapseOneAlt" class="d-flex align-items-center"><i class="icon-light-bulb"></i><span>Créer un compte dans l'espace du formateur</span></button>
                  </h4>
                </div>
                <div id="collapseOneAlt" aria-labelledby="headingOneAlt" data-parent="#accordion2" class="collapse">
                  <div class="card-body">Dans notre page d'acceuil vous allez trouvez un bouton "Formateur".Remplir correctement le formulair
                      ainsi valider la création de votre compte. tous ça c'est gratuitement.</div>
                </div>
              </div>
              <!-- question-->
              <div class="card">
                <div id="headingTwoAlt" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseTwoAlt" aria-expanded="true" aria-controls="collapseTwoAlt" class="d-flex align-items-center collapsed"><i class="icon-plug"></i><span>Ajouter Des cours</span></button>
                  </h4>
                </div>
                <div id="collapseTwoAlt" aria-labelledby="headingTwoAlt" data-parent="#accordion2" class="collapse show">
                  <div class="card-body"> Dés que vous êtes authentifier vous pouver ajouter modifier supprimer et lister vos cours.Vous trouvez tous ça dans votre propre dashboard</div>
                </div>
              </div>
              <!-- question-->
              <div class="card">
                <div id="headingThreeAlt" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseThreeAlt" aria-expanded="false" aria-controls="collapseThreeAlt" class="d-flex align-items-center collapsed"><i class="icon-shield-settings"></i><span>Ajouter des apprenants</span></button>
                  </h4>
                </div>
                <div id="collapseThreeAlt" aria-labelledby="headingThreeAlt" data-parent="#accordion2" class="collapse">
                  <div class="card-body">Pas seulement les cours vous pouvez ajouter ajours des apprenants vous pouvez les supprimer ou les modifier.</div>
                </div>
              </div>
              <!-- question-->
              <div class="card">
                <div id="headingFourAlt" class="card-header">
                  <h4 class="mb-0 accordion-heading">
                    <button data-toggle="collapse" data-target="#collapseFourAlt" aria-expanded="false" aria-controls="collapseFourAlt" class="d-flex align-items-center collapsed"><i class="icon-stack-of-sheets"></i><span>Forum De Communication</span></button>
                  </h4>
                </div>
                <div id="collapseFourAlt" aria-labelledby="headingFourAlt" data-parent="#accordion2" class="collapse">
                  <div class="card-body">Dés que êtes authentifier vous pouvez joindre le forum de TutoNet avec ses differents salon de discussion</div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar-->
          <aside class="sidebar col-lg-4 mt-5 mt-lg-0">

            <div class="sidebar-widget mb-4">
              <h4 class="sidebar-widget-heading">A qui est destiné notre plate-forme TuToNet</h4>
              <ul class="list-unstyled pl-0 mt-4">
                <p>tout les éleves</p>
                <p>tout les Collegien</p>
                <p>tout des Lycéens</p>
                <P>tout des Etudiants</P>
              </ul>
            </div>
            <div class="sidebar-widget">
              <h4 class="sidebar-widget-heading">New Tags</h4>
              <ul class="list-inline pl-0 mt-4">
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Design</a></li>
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Window</a></li>
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Science</a></li>
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Mobile App</a></li>
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Ios</a></li>
                <li class="list-inline-item mr-0"><a href="#" class="tag-link">Super charge</a></li>
              </ul>
            </div>
          </aside>
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
