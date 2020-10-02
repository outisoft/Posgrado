@extends('layouts.app')

@section('content')
<!-- ======= Services Section ======= -->
<section id="services" class="services row justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>{{ Auth::user()->name }}</h2>
    </div>

    <div class="row">
     <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-add-to-queue"></i></div>
          <h4><a href="{{ route('investigador.create') }}">Nueva Solicitud</a></h4>
          <p>Realizara una nueva solicitud de carta de postulacion</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-calendar"></i></div>
          <h4><a href="#">Progreso</a></h4>
          <p>Puede ver el progreso de aceptacion de su proyecto solicitado</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-history"></i></div>
          <h4><a href="#">Historial</a></h4>
          <p>Puede ver su historial de proyectos solicitados anteriormente</p>
        </div>
      </div>

     <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-download"></i></div>
          <h4><a href="{{ route('investigador.create') }}">Descarga de documentos</a></h4>
          <p>Podra descargar el documento oficial para solicitar una carta postulacion</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->
@endsection
