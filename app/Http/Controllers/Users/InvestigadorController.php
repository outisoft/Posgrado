<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Document;
use App\validation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$this->authorize('haveaccess','users.investigador.index');
        //return view('users.investigador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usera = auth()->user();
        //dd($usera->rol);
        if($usera->rol == 'Investigador')
        {
            $users = User::where('id', '!=', auth()->id())->get();
            return view('users.investigador.create', ['users' => $users]);
        }
        else
        {
            $this->authorize('haveaccess','users.investigador.index');
        }

    }
    public function documents()
    {
        $usera = auth()->user();
        //dd($usera->rol);
        if($usera->rol == 'Investigador')
        {
            return view('users.investigador.documents');
        }
        else
        {
            $this->authorize('haveaccess','users.investigador.documents');
        }
    }

    public function progreso()
    {
        $document = Document::orderBy('id')->get();
        $validation = validation::orderBy('id')->get();
        return view('users.investigador.progreso', compact('validation', 'document'));
    }

    public function historial()
    {
        $user = auth()->user();
        $documents = Document::orderBy('id')->get();
        $validation = validation::orderBy('id')->get();
        //dd($document);
        return view('users.investigador.historial', compact('user', 'documents', 'validation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
          $user = auth()->user();
          $document = new Document();
          //$path = Storage::putFile('public', $request->file('documento'));

          $document->documento = $request->file('documento')->store('public/documentos');
          if($request->hasFile('anexo'))
          {
            $document->anexos = $request->file('anexo')->store('public/anexos');
          }
          $document->name = $request->name;
          $document->sender_id = $user->id;
          $document->recipient_id = $request->recipient_id;

          //dd($request);

          $document->save();

          $validation = new validation();
          $validation->id_document = $document->id;
          $validation->val_defoinve = '0';
          $validation->val_di = '0';
          $validation->val_dgip = '0';

          $validation->save();

          //return back()->route('users.investigador.index')
            //  ->with('status_success','Solicitud enviada');

          return view('users.investigador.index')->with('status_success','Solicitud enviada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function show(Document $investigador)
    {
      //dd($investigador);
        $documento = Document::orderBy('id','Desc')->get();
        return view('users.investigador.view', compact('documento', 'investigador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigador $investigador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigador $investigador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigador $investigador)
    {
        //
    }
}
