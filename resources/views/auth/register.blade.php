<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>UNACH - Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/sigin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" form method="POST" action="{{ route('register') }}">
      @csrf
      <img class="mb-4" src="icons/unach.ico" alt="" width="210" height="210">
      <h1 class="h3 mb-3 font-weight-normal">{{ __('Register') }}</h1>

      <div class="form-group row">
          <label for="name" class="sr-only">{{ __('Full Name') }}</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus></input>

          <div class="col-md-6">


              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="name" class="sr-only">{{ __('Adscripción') }}</label>
          <input id="adscripción" type="text" class="form-control @error('adscripción') is-invalid @enderror" placeholder="Adscripción" name="adscripción" value="{{ old('adscripción') }}" required autocomplete="adscripción" autofocus>
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
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

          <div class="col-md-6">


              @error('email')
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
              <option value='Coordinador'>Coordinador</option>
              <option value='DEFOINVE'>DEFOINVE</option>
              <option value='DI'>DI</option>
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
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

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

        <button type="submit" class="btn btn-lg btn-primary btn-block">
          {{ __('Registrarse') }}
        </button>

        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
  </body>
</html>
