<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creer Compte Formateur</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Play:400,700')}}" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{url('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
    <main class="content-error">
        @include('formateur.alert')
    </main>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Creer Votre Compte</h3>
				<p>Developper Vos Competences Maintenant</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form id="RegisterForm"role="form" method="POST" action="{{ url ('/formateur/register') }}"> {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-lg-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>Nom & Prénom</label>
                                        <input id="name" class="form-control" name="name" placeholder="Votre Nom & Prénom" value="{{ old('name') }}">
                                        @if ($errors->has('name'))

                                            <span class="text-danger">{{ $errors->first('name') }}</span>

                                        @endif
                                </div>

                                <div class="form-group col-lg-6 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label>Telephone</label>
                                        <input type="tel" class="form-control" placeholder="Votre Téléphone" name="phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))

                                            <span class="text-danger">{{ $errors->first('phone') }}</span>

                                        @endif
                                </div>

                                <div class="form-group col-lg-6 {{ $errors->has('specialite') ? ' has-error' : '' }}">
                                        <label>Specialite</label >
                                        <input id="specialite" type="text" class="form-control" placeholder="Votre Specialite" name="specialite" value="{{ old('specialite') }}">
                                        @if ($errors->has('specialite'))

                                            <span class="text-danger">{{ $errors->first('specialite') }}</span>

                                        @endif
                                </div>

                                <div class="form-group col-lg-6 {{ $errors->has('diplome') ? ' has-error' : '' }}">
                                        <label>Diplome</label>
                                        <input type="text" class="form-control" name="diplome" placeholder="Votre Diplome" value="{{ old('diplome') }}">
                                        @if ($errors->has('diplome'))

                                            <span class="text-danger">{{ $errors->first('diplome') }}</span>

                                        @endif
                                </div>

                                <div class="form-group col-lg-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label>Email</label >
                                        <input id="email" type="email" class="form-control" placeholder="Votre Email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))

                                            <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif
                                </div>

                                <div class="form-group col-lg-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>Mot de Passe</label>
                                        <input id="password" type="password" class="form-control" placeholder="Votre Mot de Passe" name="password" value="{{ old('password') }}">
                                        @if ($errors->has('password'))

                                            <span class="text-danger">{{ $errors->first('password') }}</span>

                                        @endif
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Creer</button>
                                <button type ="reset" class="btn btn-default">Annuler</button>
                                <a class="btn btn-success btn-block loginbtn" href="/formateur/login">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
                <p>Copyright © 2019. All rights reserved.<a href="https://www.cdcp-tn.com/">CDCP</a></p>
			</div>
		</div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{url('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{url('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{url('js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{url('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{url('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{url('js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{url('js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{url('js/icheck/icheck.min.js')}}"></script>
    <script src="{{url('js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{url('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{url('js/tawk-chat.js')}}"></script>
</body>

</html>
