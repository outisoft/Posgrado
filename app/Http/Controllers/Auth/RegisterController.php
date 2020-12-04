<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol' => ['required'],
            'adscripcion' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

      /*
       $role = $data['rol'];

       $user = new User();

       $user->name = $data['name'];
       $user->email = $data['email'];
       $user->rol = $data['rol'];
       $user->adscripcion = $data['adscripcion'];
       $user->password = Hash::make($data['password']);
       $user->save();*/

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'adscripcion' => $data['adscripcion'],
            'password' => Hash::make($data['password']),
        ]);

        /*if($role == 'Investigador')
        {
          $role = 2;
        }
        elseif ($role == 'DEFOINVE') {
          $role = 3;
        }
        elseif ($role == 'DI') {
          $role = 4;
        }
        elseif ($role == 'DGIP') {
          $role = 5;
        }


        $user = auth()->user();
        dd($user);

        $role_user = DB::table('role_user');
        $role_user->role_id = $role;
        $role_user->$role_user = $user->id;

        $role_user->save();

        return view('/home');*/
    }

    function check(Request $request)
    {
      if($request->get('email'))
      {
        $email = $request->get('email');
        $data = DB::table("users")->where('email', $email)->count();
        if($data > 0)
        {
          echo 'not_unique';
        }
        else
        {
          echo 'unique';
        }
      }
    }
}
