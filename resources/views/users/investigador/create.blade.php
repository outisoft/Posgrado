@extends('layouts.app')
@section('content')
<div class="container">
  <main class="py-4">

<!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Subir Solicitud</h6>
    </div>
    <div class="card-body">
      @include('custom.message')
      <div class="form-group">
        <label for="sender_id">De: {{ Auth::user()->name }}</label>
      </div>
      <form method="POST" action="{{ route('investigador.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- Receptor (Start) -->
        <div class="panel-body">
          <div class="form-group">Para:
            <select name="recipient_id" class="form-control">
              @foreach ($users as $user)
              @if($user->rol == "DEFOINVE" || $user->rol == "Defoinve")

                  <option value="{{ $user->id}}">{{ $user->name}}</option>
              @endif
              @endforeach
              </select>
          </div>
        </div>
        <!-- Receptor (Start)-->

        <!-- Name (Start)-->
        <div class="panel-body">
          <div class="form-group">Nombre de la solicitud:
            <input name="name" type="text" class="form-control form-control-user" value="{{ old('name')}}" placeholder="Nombre de la solicitud...">
          </div>
        </div>
        <!-- Name (Finish) -->

        <!-- Documento (Start)-->
        <div class="form-group">
          <label for="documento">Seleccionar Solicitud(.pdf)</label>
          <input name="documento" type="file" value="{{ old('documento')}}"></input>
        </div>
        <!-- Documento (Finish)-->
        <!-- Anexos (Start)-->
        <div class="form-group">
          <label for="anexo">Seleccionar Anexos(.pdf)</label>
          <input name="anexo" type="file" value="{{ old('anexo')}}"></input>
        </div>
        <!-- Anexos (Finish)-->

        <button class="btn btn-primary">Enviar Solicitud</button>
      </form>
    </div>
  </div>
</main>
</div>
@endsection
