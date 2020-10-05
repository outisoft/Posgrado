<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Investigador;
use App\User;
use Illuminate\Http\Request;

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
          $document = new Investigador();
          $document->documento = $request->documento;
          $document->sender_id = $user->id;
          $document->recipient_id = $request->recipient_id;
          $document->save();

          return view('users.investigador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function show(Investigador $investigador)
    {
        //
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
