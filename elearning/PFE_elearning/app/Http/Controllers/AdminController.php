<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Formateur;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Support\Facades\DB;
use App\Apprenant;
use App\Cours;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email.confirmed'  => 'OoPs !! Veuillez vérifier votre @Email ',
            'password.confirmed'  => 'OoPs !! Veuillez vérifier votre Mot de passe',
            'email.required'  => 'OoPs !! vous devez taper votre Email ',
            'password.required'  => 'OoPs !! vous devez taper votre Mot de passe '
        ]);
    	if($request->isMethod('post'))
        {
    		$data=$request->input();
    		if (Auth::attempt (['email'=>$data['email'],'password'=>$data['password'],'role'=>'admin']))
            {
            //Session::put('adminSession',$data['email']);
    	    //echo "Success";die;
            // return redirect('/admin/dashboard');
            // return view('admin.dashboard');
                return redirect('/admin/index');

    		}
    	}

        return redirect('admin/login')->with('warning','OoOps !! Veuillez vérifier vos informations');
    }

    public function index()
    {

        $ser= Formateur::where(['role'=>'formateur'])->get();
        $nbr = DB::table('users')->count();
        $nb = DB::table('cours')->count();
        return view('admin.dashboard',array('user'=>Auth::user()),['nbr'=> $nbr, 'nb'=> $nb, 'ser'=>$ser]);


        //return view('/admin/dashboard',array('user' => Auth::user()));
        //dd($user);
        //return view('admin.dashboard')->with(compact('user'));

        //return view('admin.dashboard')->with(compact('user'));

    }



    public function logout()
    {
        Session::flush();
        return redirect('/welcome')->with('flash_message_success','Logout successfully');
    }
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function addformateur(Request $request)
    {

        return view('/admin/addformateur',array('user'=>Auth::user()));


    }

    //ajouter formateur //
    public function storeformateur(Request $request)
    {
        $request->validate([

            'name' => 'required|min:2|max:20',
            'password' => 'required|min:5|max:25',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|numeric',
            'specialite' => 'required|min:2|max:30',
            'diplome' => 'required|min:2|max:30'

        ], [

            'name.required' => 'OoPs !! vous devez taper un Nom et un Prenom ',
            'phone.required' => 'OoPs !! vous devez taper un Telephone ',
            'diplome.required'  => 'OoPs !! vous devez taper un Diplome ',
            'specialite.required'  => 'OoPs !! vous devez taper une Specialite ',
            'email.required'  => 'OoPs !! vous devez taper un Email ',
            'password.required'  => 'OoPs !! vous devez taper une Mot de passe '
        ]);

    //creation d'une instance de class
        $user= new Formateur();

        $user->name= $request->name;
        $user->phone= $request->phone;
        $user->specialite= $request->specialite;
        $user->diplome= $request->diplome;
        $user->email= $request->email;
        $user->password=Hash::make($request['password']);
        $user->role="formateur";;

        $user->save();

        return redirect('admin/addformateur') -> with("success","Formateur ajoutée avec succés");
  }

    public function listformateur()
    {
        //$user= Formateur::where(['role'=>'formateur'])->get();
        //return view('admin.listformateur')->with(compact('user'));

        //$ser= Formateur::where(['role'=>'formateur'])->get();
        //$cours= Cours::where(['secteur'=>'NULL'])->get();
        //return view('admin.listformateur',array('user'=>Auth::user()))->with(compact('user'));


        $ser= Formateur::where(['role'=>'formateur'])->get();
        return view('admin.listformateur',array('user'=>Auth::user()),['ser'=>$ser]);//->with(compact('user'));
    }


    public function editformateur()
    {
        $ser= Formateur::where(['role'=>'formateur'])->get();
        return view('admin.editformateur',array('user'=>Auth::user()),['ser'=>$ser]);
    }


    public function updateF (Request $request,$id=null)
        {

            $request->validate([
                'email' => 'required|email|unuque:businesses,email, '. auth()->user()->id . ',id'
                ]);
                    //$user = Formateur::find($id);
                if ($request->isMethod('post'))
                    {
                        /*$data=$request->all();
                        $user = Formateur::find($request->id);
                        $user=Auth::user();
                        $user->name = $request->name;
                        $user->phone = $request->phone;
                        $user->specialite = $request->specialite;
                        $user->diplome = $request->diplome;
                        $user->email = $request->email;
                        $user->save();
                        $user=Formateur::where(['role'=>'formateur'])->first();
                        return redirect()->back()->with('flash_message_success','Modification effectué avec succés');*/
                        auth()->user()->update($request->all());
                        return redirect()->back()->with('flash_message_success','Modification effectué avec succés');

                    }
                return view('admin.editformateur')->with(compact('user'));
        }



        public function destroy($id)
    {
        $ser= Formateur::find($id);
        $ser->delete();

        return view('admin.editformateur');
    }
    //apprenant //

    public function addapprenant()
    {
        $ser= Apprenant::where(['role'=>'apprenant'])->get();
        return view('admin.addapprenant',array('user'=>Auth::user()),['ser'=>$ser]);
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

        return redirect('admin/addapprenant') -> with("success","apprenant ajoutée avec succés");
  }

    public function listapprenant()
    {
        $ser= Apprenant::where(['role'=>'apprenant'])->get();
        return view('admin.listapprenant',array('user'=>Auth::user()),['ser'=>$ser]);
    }

    public function delete($id=null){
        Formateur::where(['id'=>$id])->delete();

        return redirect()->back()->with('flash_message_success',' Passager est supprimé avec succés');

    }

    public function listCours(Formateur $formateur)
    {
        $user= Formateur::where(['role'=>'formateur'])->get();
        $cours= Cours::where(['secteur'=>'NULL'])->get();
        return view('admin.allCours',array('user'=>Auth::user()))->with(compact('cours'));
    }

    public function profile()
    {
        $ser= Formateur::where(['role'=>'formateur'])->get();;
        return view('admin.listapprenant',array('user'=>Auth::user()),['ser'=>$ser]);
    }
    public function changepassword(){
        return view('admin.editpassword');
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

      public function deleteformateur(Request $request ,$id){
       $form=   Formateur::find($id);

       $form->delete();

       return back()->with('status', 'deleted');


      }

      public function editapprenant()
    {
        $ser= Apprenant::where(['role'=>'apprenant'])->get();
        return view('admin.editapprenant',array('user'=>Auth::user()),['ser'=>$ser]);
    }

      public function deleteapprenant(Request $request ,$id){
        $form= Apprenant::find($id);

        $form->delete();

        return back()->with('status', 'deleted');


       }

    public function editcours()
    {
        $cours= Cours::where(['secteur'=>'Null'])->get();

        return view('admin.editcours',array('user'=>Auth::user()),['cours'=>$cours]);
    }

    public function deletecours(Request $request ,$id){
        $form= Cours::find($id);

        $form->delete();

        return back()->with('status', 'deleted');


       }


 public function update(Request $request ,$id)
{
    $user=   Formateur::find($id);

    $user->name= $request->name;
    $user->phone= $request->phone;
    $user->specialite= $request->specialite;
    $user->diplome= $request->diplome;
    $user->email= $request->email;
    $user->password=Hash::make($request['password']);
    $user->role="formateur";;

    $user->save();

    return redirect('admin/addformateur') -> with("success","apprenant ajoutée avec succés");
}

//c tout
// merci bcp just faza s8ira enta sraft sraft ? hhh ok fisa3 lol hhh ok
//n7eb kif yeckliqui 3la lire ihezzou lel cours adheka li 7eb 3lih xd :p

}
