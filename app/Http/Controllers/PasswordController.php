<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth, Mail, Str;
use App\Mail\UserSendRecover, App\Mail\UserSendNewPassword;
use App\User;

class PasswordController extends Controller
{
    public function getRecover()
    {
        return view('auth.passwords.email');
    }

    public function postRecover(Request $request)
    {
        $rules = [
            'email' => 'required|email'
        ];
        $user =  User::where('email', $request->input('email'))->count();
        if($user == '1'):
          $user = User::where('email', $request->input('email'))->first();
          $code = rand(100000, 999999);
          $data = ['name' => $user->name, 'email' => $user->email, 'code' => $code];
          $u = User::find($user->id);
          $u->password_code = $code;
          if($u->save()):
            Mail::to($user->email)->send(new UserSendRecover($data));
            return redirect('/reset?email='.$user->email)->with('status_success', 'Se ha enviado un link a su correo electronico.')->with('typealert', 'danger');
          endif;
          //return view('emails.user_password_recover', $data);

        else:
          return back()->with('status_error', 'Correo electronico no existe')->with('typealert', 'danger');
        endif;
    }
    public function getReset(Request $request)
    {
        $data = ['email' => $request->get('email')];
        return view('auth.passwords.code', $data);
    }

    public function postReset(Request $request)
    {
      $rules = [
          'email' => 'required|email',
          'code'  => 'required'
      ];
      $user =  User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->count();
      if($user == '1'):
        $user =  User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->first();
        $new_password = Str::random(8);
        $user->password = Hash::make($new_password);
        $user->password_code = null;
        if($user->save()):
          $data = ['name' => $user->name, 'password' => $new_password];
          Mail::to($user->email)->send(new UserSendNewPassword($data));
          return redirect('/login')->with('status_success', 'Contraseña restablecida, le hemos enviado la nueva contraseña a su correo electronico.')->with('typealert', 'success');
        endif;
      else:
        return back()->with('status_error', 'Correo o codigo no validos')->with('typealert', 'danger');
      endif;
    }
}
