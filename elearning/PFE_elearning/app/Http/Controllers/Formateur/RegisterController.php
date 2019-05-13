<?php

namespace App\Http\Controllers\Formateur;
use App\Formateur;
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
        return view('formateur.register');
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
        $this->middleware('guest:formateur');
    }



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
            'specialite' => 'required|min:2|max:30',
            'diplome' => 'required|min:2|max:30'

        ], [

            'name.required' => 'OoPs !! vous devez taper votre Nom et Prenom ',
            'phone.required' => 'OoPs !! vous devez taper votre Telephone ',
            'diplome.required'  => 'OoPs !! vous devez taper votre Diplome ',
            'specialite.required'  => 'OoPs !! vous devez taper votre Specialite ',
            'email.required'  => 'OoPs !! vous devez taper votre Email ',
            'password.required'  => 'OoPs !! vous devez taper votre Mot de passe '
        ]);

        if ($request->isMethod('post'))
         {
            $data=$request->all();
        //echo "<pre>";print_r($data);die;

            $formateur= new Formateur;
            $formateur->name=$data['name'];
            $formateur->phone=$data['phone'];
            $formateur->specialite=$data['specialite'];
            $formateur->diplome=$data['diplome'];
            $formateur->niveau="NULL";
            $formateur->etablissement="NULL";
            $formateur->email=$data['email'];
            $formateur->password=Hash::make($data['password']);
            $formateur->role="formateur";

            $formateur->save();
            //return redirect('/admin/view-cotegory')->with('flash_message_success','Category added  successfully');
           return redirect('/formateur/register')->with('success','Félicitation !! Votre compte a été créé avec succès');




        }
        return view('/formateur/register')->with('warning','OoOps !! Veuillez vérifier vos informations');

    }


}
