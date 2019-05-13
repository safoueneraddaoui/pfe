<?php

namespace App\Http\Controllers;
use Session;
use App\Cours;
use Illuminate\Http\Request;
use App\Apprenant;
use App\Comments;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ApprenantController extends Controller
{
    public function index()
    {
        $user= Apprenant::where(['role'=>'apprenant'])->get();
        $cours= Cours::where(['secteur'=>'NULL'])->get();
        return view('/apprenant/dashboard',array('user'=>Auth::user()))->with(compact('cours'));
    }

    public function lirecours($id)
    {

        $user= Apprenant::where(['role'=>'apprenant'])->get();
        $cours= Cours::findOrFail($id);
        $comments= Comments::where(['cours_id'=>"$id"])->get();
        return view('/apprenant/lirecourses',array('user'=>Auth::user()),['comments'=>$comments])->with(compact('cours'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        //Comment::create($input);

        return back();
    }

    public function storecomment(Request $request)
    {
        $request->validate([

            'body' => 'required|min:5|max:255',

        ], [

            'body.required' => 'OoPs !! vérifier votre commentaire ',

        ]);
        //$crs = Cours::select('id')->get();
        $crs = DB::table('cours')->pluck('id');
        $comment= new Comments();

        $comment->user_id=Auth::user()->id;
        $comment->user_name=Auth::user()->name;
        $comment->cours_id= $crs;
        $comment->body= $request->body;


        $comment->save();
        return redirect()->back()->with("success","cours ajoutée avec succés");
    }

    public function logout()
    {
        Session::flush();
        return redirect('/welcome')->with('flash_message_success','Logout successfully');
    }
}
