<?php

namespace App\Http\Controllers\Formateur;
use App\Formateur;
use Session;
use Input;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('formateur.login');
    }
    public function login(Request $request)
    {
        //echo "Success";die;
      // Validate the form data
      $request->validate([
        'email.confirmed'  => 'OoPs !! Veuillez vérifier votre @Email ',
        'password.confirmed'  => 'OoPs !! Veuillez vérifier votre Mot de passe',
        'email.required'  => 'OoPs !! vous devez taper votre Email ',
        'password.required'  => 'OoPs !! vous devez taper votre Mot de passe '
    ]);

      if($request->isMethod('post'))
        {
          $data=$request->input();
           if (Auth::attempt (['email'=>$data['email'],'password'=>$data['password'],'role'=>"formateur",]))
            {
                //Session::put('adminSession',$data['email']);
                //echo "Success";die;
                return redirect('formateur/index');

            }

        }
        return redirect('formateur/login')->with('warning','OoOps !! Veuillez vérifier vos informations');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:formateur')->except('logout');
    }
}
