@extends('emails.master')
@section('content')
<p>Hola: <strong>{{ $name }}</strong></p>
<p>Este es un correo que le ayudara a restablecer su contraseña en nuestra plataforma</p>
<p>Para continura haga clic en el siguiente botón e ingrese el siguiente código: <h2>{{ $code }}</h2></p>
<p><a href="{{ url('/reset?='.$email)}}" style="display: inline-block; background-color: #2caaff; color: #fff; padding: 12px;
  border-radius: 4px; text-decoration: none;">Resetear mi contraseña</a></p>
<p>Si el boton anterior no le funciona, copie y pegue el siguiente enlace en su navegador:</p>
<p>{{ url('/reset?='.$email)}}</p>

@endsection
