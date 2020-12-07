<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\validation;
use Illuminate\Support\Facades\Storage;

class LatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('letter.index');
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

    public function denegados()
    {
      $doc = Document::orderBy('id','Desc')->paginate(10);
      $validar = validation::get();
       return view('documents.denegados', compact('doc', 'validar'));
    }

    public function download()
    {
       return Storage::download('file.jpg');
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
    public function show($id)
    {
      //dd($id);
        $dl = Document::find($id);
        return Storage::download($dl->id, $dl->name);
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
    public function update(Request $request, Document $documento)
    {
        //descripcion

        $denegar = Document::find($documento->id);
        $denegar->descripcion = $request->descripcion;
        $denegar->update($request->only('descripcion'));

        //dd($request);

        /*$validation = validation::find($defoinve->id);
        $validation->val_defoinve = '1';
        $validation->update($request->only('val_defoinve'));*/

        return redirect('home')
          ->with('status_success','Documento Denegado');
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
