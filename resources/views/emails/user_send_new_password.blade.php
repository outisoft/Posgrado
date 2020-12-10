@extends('emails.master')
@section('content')
<p>Hola: <strong>{{ $name }}</strong></p>
<p>Esata es su nueva contraseña para iniciar sesión en nuestra plataforma</p>
<p><h2>{{ $password }}</h2></p>
<p>Para continura haga clic en el siguiente botón e iniciar sesión:</p>
<p><a href="{{ url('/login')}}" style="display: inline-block; background-color: #2caaff; color: #fff; padding: 12px;
  border-radius: 4px; text-decoration: none;">iniciar sesión</a></p>
<p>Si el boton anterior no le funciona, copie y pegue el siguiente enlace en su navegador:</p>
<p>{{ url('/login')}}</p>

@endsection
