<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>UNACH - Register</title>
    <link href="{{ asset('icons/unach.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--jQuery-Axas-->
    <script src="{{ asset('/node_modules/jquery/3.1.0/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!--CKEditor Plugin-->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sigin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" form method="POST" action="{{ route('register') }}">
      @csrf
      <img class="mb-4" src="{{ asset('icons/unach.ico')}}" alt="" width="210" height="210">
      <h1 class="h3 mb-3 font-weight-normal">{{ __('Registrarse') }}</h1>

      <div class="form-group row">
          <label for="name" class="sr-only">{{ __('Full Name') }}</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre Completo" value="{{ old('name') }}" required autocomplete="name" autofocus></input>

          <div class="col-md-6">


              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="adscripcion" class="sr-only">{{ __('Adscripción') }}</label>
          <input id="adscripcion" type="text" class="form-control @error('adscripción') is-invalid @enderror" placeholder="Adscripción" name="adscripcion" value="{{ old('adscripción') }}" required autocomplete="adscripción" autofocus>
          <div class="col-md-6">


              @error('adscripción')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email">
          <span id="error_email"></span>
          <div class="col-md-6">


              @error('email')
                <span id="error_email"></span>
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
      </div>

      <div class="form-group row">
          <label for="rol" class="sr-only">{{ __('Rol of User') }}</label>

            <select id="rol" class="btn btn-secondary dropdown-toggle form-control @error('password') is-invalid @enderror" placeholder="Rol" type="rol"  name="rol" value="{{ old('rol') }}">
              <option value='Investigador'>Investigador</option>
              <option value='DEFOINVE'>Defoinve</option>
              <option value='DI'>Direccion de Investigacion</option>
              <option value='DGIP'>DGIP</option>
            </select>
            <div class="col-md-6">
            @error('rol')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
      </div>
      <div class="form-group row">
          <label for="password" class="sr-only">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">

          <div class="col-md-6">


              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
              <input id="password-confirm" type="password" placeholder="Confirmar contraseña"class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>

        <button id="register" name="register" type="submit" class="btn btn-lg btn-primary btn-block">
          {{ __('Registrarse') }}
        </button>

        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>
        <p id ="register" class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>


<script>
$(document).ready(function()
{
  $('#email').blur(function()
  {
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(email))
    {
      $('#error_email').html('<label class="text-danger">No es un correo electronico</label>');
      $('#email').addClass('has-error');
      $('#register').attr('disabled', 'disabled');
    }
    else
    {
      $.ajax({
        url:"{{ route('register.check') }}",
        method:"POST",
        data:{email:email, _token:_token},
        success:function(result)
        {
          if(result == 'unique')
          {
            $('#error_email').html('<label class="text-success">Correo Valido</label>');
            $('#email').removeClass('has-error');
            $('#register').attr('disabled', false);
          }
          else
          {
            $('#error_email').html('<label class="text-danger">El Correo ya esta registrado</label>');
            $('#email').addClass('has-error');
            $('#register').attr('disabled', 'disabled');
          }
        }
      })
    }
  });
});
</script>


  </body>
</html>
