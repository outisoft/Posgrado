<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\validation;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $user = Auth::user();
      if($user->rol == "Investigador")
      {
          return view("users.investigador.index");
      }
      if($user->rol == "Coordinador")
      {
          //$documento = Document::get();
          //$users =  User::with('documents')->orderBy('id','Desc')->paginate(10);
          $documento = Document::orderBy('id','Desc')->paginate(10);

          //return $documento;

          return view("users.coordinador.index", ['documento'=>$documento]);
          //return view("users.coordinador.index");
      }
      if($user->rol == "DEFOINVE")
      {
          $documento = Document::orderBy('id','Desc')->paginate(10);
          $validacion = validation::orderBy('id','Desc')->paginate(10);
          return view("users.defoinve.index", ['documento'=>$documento], ['validacion'=>$validacion]);
      }
      if($user->rol == "DI")
      {
          $documento = Document::orderBy('id','Desc')->paginate(10);
          $validacion = validation::orderBy('id','Desc')->paginate(10);

          return view("users.di.index", ['documento'=>$documento], ['validacion'=>$validacion]);

      }
      if($user->rol == "DGIP")
      {
          $documento = Document::orderBy('id','Desc')->paginate(10);
          $validacion = validation::orderBy('id','Desc')->paginate(10);
          return view("users.dgip.index", ['documento'=>$documento], ['validacion'=>$validacion]);
      }
      else
      {
          return view('home');
      }
        //return view('home');
    }
}
