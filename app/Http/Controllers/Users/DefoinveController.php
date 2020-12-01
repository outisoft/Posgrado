<?php

namespace App\Http\Controllers\Users;

use App\Investigador;
use App\Document;
use App\validation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefoinveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        $doc = Document::get();
        $validar = validation::get();
        return view('users.defoinve.aprobados', compact('doc', 'validar'));
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
            //dd($validation);

      //$validation->id_document = $defoinve->id;
      $validation->val_defoinve = '1';
      $validation->update($request->only('val_defoinve'));

      //dd($validation);
      //$validation->val_di = '0';
      //$validation->val_dgip = '0';

      //$validation->update();

      //return redirect()->route("users.defoinve.index");
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
