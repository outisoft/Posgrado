@extends('layouts.app')

@section('content')
<div class="container">
  <main class="py-4">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Documentos</h1>
    <!--p class="mb-4">Documentos oficiales para realizar la solicitud de elaboracion de cartas de postulacion instuticional a profesores-investigadores de la <a target="_blank" href="https://unach.com">universidad autonoma de Chiapas</a>.</p-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <!--div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Documentos</h6>
      </div-->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ver</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ver</th>
              </tr>
            </tfoot>
            <tbody>
              <!--The Current User Can Update The Post -->
              @foreach ($validacion as $validations)
                @if($validations->val_defoinve == 1)
                @foreach ($documento as $documentos)
                 @if($documentos->id == $validations->id_document)
                    <tr>
                      <td>{{ $documentos->name}}</td>
                      <td>{{ $documentos->created_at->day}}-{{ $documentos->created_at->month}}-{{ $documentos->created_at->year}} </td>
                      <td><a class="btn btn-info" href="{{ route('di.show', $documentos->id)}}">Ver</a></td>
                    </tr>
                    @endif
                  @endforeach
                  @endif
               @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </main>
</div>
@endsection
