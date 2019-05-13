<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index(){
        return view('FrontEnd.index');
    }
    public function commentcamarche(){
        return view('FrontEnd.commentcamarche');
    }
    public function contact(){
        return view('FrontEnd.contact');
    }

}
