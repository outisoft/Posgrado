@extends('layouts.app')
@section('content')
<div class="container">
  <!--div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Nueva Solicitud</div>
        <div class="card-body">
          <div class="form-group">
            <label for="sender_id">De: {{ Auth::user()->name }}</label>
          </div>

          <form method="POST" action="{{ route('investigador.store') }}">
            {{ csrf_field() }}
            <div class="panel-body">
              <div class="form-group">Para:
                <select name="recipient_id" class="form-control">
                  <option value="">selecionar usuario</option>
                  @foreach ($users as $user)
                  <option value="{{ $user->id}}">{{ $user->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="documento">Seleccionar Documento(.pdf)</label>
              <input name="documento" type="file"></input>
            </div>
            <button class="btn btn-primary">Enviar Solicitud...</button>
          </form>

        </div>
      </div>
    </div>
  </div-->

  <!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Subir Solicitud</h6>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="sender_id">De: {{ Auth::user()->name }}</label>
      </div>
      <form method="POST" action="{{ route('investigador.store') }}">
        {{ csrf_field() }}
        <div class="panel-body">
          <div class="form-group">Para:
            <select name="recipient_id" class="form-control">
              <option value="">selecionar usuario</option>
              @foreach ($users as $user)
              <option value="{{ $user->id}}">{{ $user->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="documento">Seleccionar Documento(.pdf)</label>
          <input name="documento" type="file"></input>
        </div>

        <button class="btn btn-primary">Enviar Solicitud...</button>
      </form>
    </div>
  </div>

</div>
@endsection
