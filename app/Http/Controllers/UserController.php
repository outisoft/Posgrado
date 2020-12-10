<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission\Models\Role;
use App\User;
use Hash, Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('haveaccess','user.index');
        $users =  User::with('roles')->orderBy('id','Desc')->paginate(10);
        //return $users;

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('auth.passwords.reset');
    }

    public function updatePassword(Request $request)
    {
        $rules = [
            'password' => 'required',
            'newpassword' => 'required|confirmed|min:8',
        ];
        if(Hash::check($request->password, Auth::user()->password))
        {
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                ->update(['password' => bcrypt($request->newpassword)]);
            return redirect('/home')->with('status_success', 'Contraseña actualizada con exito');
        }
        else
        {
            return redirect('/password')->with('status_error', 'Los datos son incorrectos.');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(User $user)
     {
         $this->authorize('view', [$user, ['user.show','userown.show'] ]);
         $roles= Role::orderBy('name')->get();
         //dd($user);

         //return $roles;

         return view('user.view', compact('roles', 'user'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(User $user)
     {
         $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);
         $roles= Role::orderBy('name')->get();

         //return $roles;

         return view('user.edit', compact('roles', 'user'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, User $user)
     {
         $request->validate([
             'name'          => 'required|max:50|unique:users,name,'.$user->id,
             'email'         => 'required|max:50|unique:users,email,'.$user->id
         ]);

         //dd($request->all());

         $user->update($request->all());

         $user->roles()->sync($request->get('roles'));

         return redirect()->route('user.index')
             ->with('status_success','Usuario actualizado correctamente');



     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(User $user)
     {
         $this->authorize('haveaccess','user.destroy');
         $user->delete();

         return redirect()->route('user.index')
             ->with('status_success','Usuario eliminado correctamente');
     }
}
