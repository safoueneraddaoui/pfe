<?php

namespace App\Http\Controllers\Apprenant;
use App\Apprenant;
use Session;
use Input;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('apprenant.register');
    }

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:apprenant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /*protected function validator(Request $request)
    {
        $validation = $request->$validate([
            'name' =>'required |max:5'
        ]);

    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    */
    public function register(Request $request){

        $request->validate([

            'name' => 'required|min:2|max:20',
            'password' => 'required|min:5|max:25',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|numeric',
            'etablissement' => 'required|min:2|max:30',
            'niveau' => 'required|min:2|max:20'

        ], [

            'name.required' => 'OoPs !! vous devez taper votre Nom et Prenom ',
            'phone.required' => 'OoPs !! vous devez taper votre Telephone ',
            'niveau.required'  => 'OoPs !! vous devez taper votre Niveau ',
            'etablissement.required'  => 'OoPs !! vous devez taper votre Etablissement ',
            'email.required'  => 'OoPs !! vous devez taper votre Email ',
            'password.required'  => 'OoPs !! vous devez taper votre Mot de passe '
        ]);

        if ($request->isMethod('post'))
         {
            $data=$request->all();
        //echo "<pre>";print_r($data);die;

            $apprenant= new Apprenant();
            $apprenant->name=$data['name'];
            $apprenant->phone=$data['phone'];
            $apprenant->specialite="NULL";
            $apprenant->diplome="NULL";
            $apprenant->niveau=$data['niveau'];
            $apprenant->etablissement=$data['etablissement'];
            $apprenant->email=$data['email'];
            $apprenant->password=Hash::make($data['password']);
            $apprenant->role="apprenant";

            $apprenant->save();
            //return redirect('/admin/view-cotegory')->with('flash_message_success','Category added  successfully');
           return redirect('/apprenant/register')->with('success','Félicitation !! Votre compte a été créé avec succès');

        }

        return view('/apprenant/register')->with('warning','OoOps !! Veuillez vérifier vos informations');

    }


}
