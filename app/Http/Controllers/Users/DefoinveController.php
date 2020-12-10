<?php

namespace App\Http\Controllers\Users;

use App\Investigador;
use App\Document;
use App\validation;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefoinveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function aprobados()
    {
        $doc = Document::orderBy('id','Desc')->paginate(10);
        $validar = validation::get();
        return view('users.defoinve.aprobados', compact('doc', 'validar'));
    }
    public function denegar(Document $defoinve)
    {
      //dd($defoinve);
       $users =  User::get();
       return view('users.defoinve.denegar', compact('defoinve', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $defoinve)
    {
      //return view('users.defoinve.view');
      $documento = Document::orderBy('name')->get();
      //dd($defoinve);
      return view("users.defoinve.view", compact('documento', 'defoinve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $defoinve)
    {
      //$documento = Document::get();

      $validation = validation::find($defoinve->id);
      $validation->val_defoinve = '1';
      $validation->update($request->only('val_defoinve'));

      return redirect('home')
        ->with('status_success','Documento validado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
