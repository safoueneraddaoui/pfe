<?php
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* FrontEnd */

Route::get('/', 'FrontController@index');
Route::get('/commentcamarche', 'FrontController@commentcamarche');
Route::get('/contact', 'FrontController@contact');



//Route::get('/', function () {
  //  return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['guest:formateur']],function(){

    Route::post('/forums', 'ChatterController@index');

    Route::prefix('formateur')->group(function() {
        Route::get('/register', 'Formateur\RegisterController@showRegistrationForm')->name('formateur.register');
        Route::post('/register', 'Formateur\RegisterController@register');
        Route::get('/login', 'Formateur\LoginController@showLoginForm');
        Route::post('/login', 'Formateur\LoginController@login');
        Route::get('/index', 'FormateurController@index');
        Route::get('/changepassword', 'FormateurController@changepassword');
        Route::post('/changepassword', 'FormateurController@changepasswordpost');
        Route::get('/erreur','FormateurController@erreur');
        Route::get('/listapprenant','FormateurController@listapprenant');
        Route::get('/addapprenant','FormateurController@addapprenant');
        Route::post('/storeapprenant',"FormateurController@storeapprenant");
        Route::get('/monCompte','FormateurController@monCompte');
        Route::get('/listCours','FormateurController@listCours');


        Route::get('/addCours',"FormateurController@addCours");
        Route::post('/createCours',"FormateurController@createCours");

        Route::get('/logout','FormateurController@logout');
});
});

Route::group(['middleware'=>['guest:apprenant']],function(){
    Route::prefix('apprenant')->group(function() {
        Route::get('/register', 'Apprenant\RegisterController@showRegistrationForm')->name('apprenant.register');
        Route::post('/register', 'Apprenant\RegisterController@register');
        Route::get('/login', 'Apprenant\LoginController@showLoginForm');
        Route::post('/login', 'Apprenant\LoginController@login');
        Route::get('lirecours/{id}', 'ApprenantController@lirecours');

        Route::get('/index', 'ApprenantController@index');
        Route::get('/logout','ApprenantController@logout');


        Route::post('lirecours/{id}', 'ApprenantController@storecomment');
        Route::get('lirecours/{id}', 'ApprenantController@lirecours');

    });
});



Route::group(['middleware'=>['guest:admin']],function(){

    //Route::post('/forums', 'ChatterController@index');

    Route::prefix('admin')->group(function() {
        Route::get('/login', 'AdminController@showLoginForm');
        Route::post('/login', 'AdminController@login');
        Route::get('/index', 'AdminController@index');
        //Route::get('/index', 'AdminController@listformateur');
        Route::get('/logout','AdminController@logout');
        Route::get('/addformateur','AdminController@addformateur');
        Route::post('/storeformateur',"AdminController@storeformateur");
        Route::get('/listformateur','AdminController@listformateur');
        Route::get('/editformateur','AdminController@editformateur');
        Route::get('/editformateur/{id}','AdminController@editformateurpage');
        Route::put('/editformateur/{id}','AdminController@editformateurpost');//lazem ta3mel page kima add ama feha donne w ba3ed //ey fhmtk ama l fonction !!.
        Route::delete('/editformateur/{id}','AdminController@deleteformateur')->name('deleteformateur'); //lol

        Route::post('/updateF',"AdminController@updateF");

        Route::get('/editapprenant','AdminController@editapprenant');
        Route::get('/editapprenant/{id}','AdminController@editapprenantpage');
        Route::put('/editapprenant/{id}','AdminController@editapprenantpost');//lazem ta3mel page kima add ama feha donne w ba3ed //ey fhmtk ama l fonction !!.
        Route::delete('/editapprenant/{id}','AdminController@deleteapprenant')->name('deleteapprenant'); //lol


        Route::get('/editcours','AdminController@editcours');
        Route::get('/editcours/{id}','AdminController@editcourspage');
        Route::put('/editcours/{id}','AdminController@editcourspost');//lazem ta3mel page kima add ama feha donne w ba3ed //ey fhmtk ama l fonction !!.
        Route::delete('/editcours/{id}','AdminController@deletecours')->name('deletecours'); //lol

        Route::get('/listCours','AdminController@listCours');
        Route::get('/profile','AdminController@profile');

        //Route::match(['get','post'],'/editformateur','AdminController@updateformateur');
        //Route::get('/delete/{id}','AdminController@delete');

        Route::get('/changepassword', 'AdminController@changepassword');
        Route::post('/changepassword', 'AdminController@changepasswordpost');

        //apprenant//
        Route::get('/addapprenant','AdminController@addapprenant');
        Route::post('/storeapprenant',"AdminController@storeapprenant");
        Route::get('/listapprenant','AdminController@listapprenant');

});

});
