<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>UNACH - Restablecer Contraseña</title>
    <link href="{{ asset('icons/unach.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sigin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-password-image">
                  <img class="mb-4" src="{{ asset('icons/unach.ico')}}" alt="" width="350" height="350">
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                      <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                    </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                      <div class="form-group">
                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu correo electronico...">
                        <!--input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico..."-->
                      </div>

                      <button type="submit" class="btn btn-primary btn-user btn-block">
                          {{ __('Enviar link') }}
                      </button>
                    </form>

                    <hr>
                    <div class="text-center">
                      <a class="small" href="{{ route('register') }}">Crear una cuenta!</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="{{ route('login') }}">¿Tienes cuenta? Ingresa!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </body>
</html>
