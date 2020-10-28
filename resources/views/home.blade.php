@extends('layouts.app')

@section('content')
<div class="container">
  <main class="py-4">
    <!--div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrador</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>


            </div>
        </div>
    </div-->

<section id="services" class="services row justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-add-to-queue"></i></div>
          <h4><a href="{{ route('user.index') }}">Usuarios</a></h4>
          <p>Total de usuarios registrados</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-add-to-queue"></i></div>
          <h4><a href="{{ route('role.index') }}">Roles</a></h4>
          <p>Roles creados por el administrador</p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
</div>

@endsection
