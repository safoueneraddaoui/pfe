<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Formateur;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Apprenant;
use App\Cours;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\storage;
use App\Notifications\RepliedToThread;
use App\Notifications\CreateCours;


class FormateurController extends Controller
{


    public function index()
    {
        $ser= Apprenant::where(['role'=>'apprenant'])->get();
        return view('formateur.dashboard',array('user'=>Auth::user()),['ser'=>$ser]);


        //return view('/admin/dashboard',array('user' => Auth::user()));
        //dd($user);
        //return view('admin.dashboard')->with(compact('user'));

        //return view('admin.dashboard')->with(compact('user'));

    }

    public function changepassword(){
        return view('formateur.editpassword');
      }

      public function changepasswordpost(Request $request){
        $request->validate([
          'oldpassword' => 'required|min:6',
          'newpassword' => 'required|min:6',
        ]);

        if (Hash::check($request->oldpassword, \Auth::user()->password)) {
          $request->user()->fill([
            'password' => Hash::make($request->newpassword)
          ])->save();
          //echo "true";die;
          return back()->with('status', 'Saved');
        }
        //echo "false";die;
        return view('changepass');
      }

      public function addapprenant()
    {
        $user= Formateur::where(['role'=>'formateur'])->get();
        return view('formateur.addapprenant',array('user'=>Auth::user()));
    }

    public function storeapprenant(Request $request)
    {
        $request->validate([

            'name' => 'required|min:2|max:20',
            'password' => 'required|min:5|max:25',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|numeric',
            'etablissement' => 'required|min:2|max:30',
            'niveau' => 'required|min:2|max:30'

        ], [

            'name.required' => 'OoPs !! vous devez taper un Nom et un Prenom ',
            'phone.required' => 'OoPs !! vous devez taper un Telephone ',
            'niveau.required'  => 'OoPs !! vous devez taper un Diplome ',
            'etablissement.required'  => 'OoPs !! vous devez taper une Specialite ',
            'email.required'  => 'OoPs !! vous devez taper un Email ',
            'password.required'  => 'OoPs !! vous devez taper une Mot de passe '
        ]);
    //creation d'une instance de class
        $user= new Apprenant();

        $user->name= $request->name;
        $user->phone= $request->phone;
        $user->niveau= $request->niveau;
        $user->etablissement= $request->etablissement;
        $user->specialite= "Null";
        $user->diplome= "Null";
        $user->email= $request->email;
        $user->password=Hash::make($request['password']);
        $user->role="apprenant";;

        $user->save();

        return redirect('formateur/addapprenant') -> with("success","apprenant ajoutée avec succés");
  }

    public function listapprenant()
    {
        $usr= Formateur::where(['role'=>'formateur'])->get();
        $user= Apprenant::where(['role'=>'apprenant'])->get();
        return view('formateur.listapprenant',array('usr'=>Auth::user()))->with(compact('user'));
    }

    public function monCompte(Formateur $formateur)
    {
        //$ser = Auth::user();
        $id = Auth::user()->id;
        $user= Formateur::where(['role'=>'formateur'])->get();
        //return view('formateur.profile',array('user'=>Auth::user()));
        $cours= Cours::where(['secteur'=>'NULL'])->get();
        $courses=Cours::where(['formateur_id'=> $id])->get();
        return view('formateur.profile',array('user'=>Auth::user()),['cours'=>$cours,'courses'=>$courses ]);
    }

    public function addCours(Formateur $formateur)
    {
        $user= Formateur::where(['role'=>'formateur'])->get();
        return view('formateur.addcours',array('user'=>Auth::user()));
    }


    public function createCours(Request $request)
    {
        $request->validate([

            'name_cours' => 'required|min:3|max:20',
            'specialite_cours' => 'required|min:3|max:25',
            'date_cours' => 'required',
            //'content_cours' => 'required|min:8|numeric',
            'description_cours' => 'required|min:2|max:30'

        ], [

            'name_cours.required' => 'OoPs !! vous devez taper un Nom et un Prenom ',
            'specialite_cours.required' => 'OoPs !! vous devez taper un Telephone ',
            'date_cours.required'  => 'OoPs !! vous devez taper un Diplome ',
            //'content_cours.required'  => 'OoPs !! vous devez taper une Specialite ',
            'description_cours.required'  => 'OoPs !! vous devez taper un Email '
        ]);

        $cours = new Cours;

        $cours->formateur_id=Auth::user()->id;
        $cours->formateur_name= Auth::user()->name;
        $cours->name_cours= $request->input('name_cours');
        $cours->specialite_cours= $request->input('specialite_cours');
        $cours->description_cours= $request->input('description_cours');
        $cours->date_cours= $request->input('date_cours');
        $cours->secteur = "Null";
        $cours->content_cours= $request->input('content_cours');

        if($request->hasFile('content_cours')){

            $video_temp=Input::file('content_cours');

               if($video_temp->isValid()){
                   //echo "test";die;
               //$extension=$video_temp->getClientOriginalExtension();
               //$filename=rand(111,99999).'.'.$extension;//where are u


              $filename = storage::disk('public')->put('cours',$video_temp);
               $cours->content_cours=$filename;
          }}

        $cours->save();
        //auth()->Formateurs()->notify(new CreateCours());
        return redirect()->back()->with("success","cours ajoutée avec succés");
    }

    public function listCours(Formateur $formateur)
    {
        //$courses = Cours::select('name_cours')

        //        ->where('formateur_id', '=',Auth::user()->id)

        //        ->get();
        $id = Auth::user()->id;
        $user= Formateur::where(['role'=>'formateur'])->get();
        $cours= Cours::where(['secteur'=>'NULL'])->get();
        $courses=Cours::where(['formateur_id'=> $id])->get();
        return view('formateur.allCours',array('user'=>Auth::user()),['cours'=>$cours, 'courses'=>$courses ]);
    }




    public function logout()
    {
        Session::flush();
        return redirect('/welcome')->with('flash_message_success','Logout successfully');
    }
}
