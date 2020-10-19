<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>UNACH - Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/sigin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" form method="POST" action="{{ route('login') }}">
      @csrf
      <img class="mb-4" src="icons/unach.ico" alt="" width="210" height="210">
      <h1 class="h3 mb-3 font-weight-normal">{{ __('Login') }}</h1>

        <div class="form-group row">
          <label for="Email" class="sr-only">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          <div class="col-md-6">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="Password" class="sr-only">{{ __('Password') }}</label>
          <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          <div class="col-md-6">


              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>

        <!--div class="checkbox mb-3">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
          </label>
        </div-->

        <button type="submit" class="btn btn-lg btn-primary btn-block">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        <a class="btn btn-link" href="{{ route('register') }}">
            {{ __('Crear una cuenta') }}
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
  </body>
</html>
