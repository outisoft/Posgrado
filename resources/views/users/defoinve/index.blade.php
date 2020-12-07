@extends('layouts.app')

@section('content')
<div class="container">
  <main class="py-4">

  <!-- Begin Page Content -->
  <div class="container-fluid">
    @include('custom.message')
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Documentos</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ver</th>
                <th>Descargar</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ver</th>
                <th>Descargar</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach ($validacion as $val)
              @foreach ($documento as $documentos)
              @if ($documentos->id == $val->id_document && $val->val_defoinve == 0)
              @if ($documentos->descripcion == null)

              <tr>
                <td>{{ $documentos->name}}</td>
                <td>{{ $documentos->created_at->day}}-{{ $documentos->created_at->month}}-{{ $documentos->created_at->year}}</td>
                <td>
                  <a class="btn btn-info" href="{{ route('defoinve.show', $documentos->id)}}">Ver</a>
                </td>
                <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
              </tr>

              @endif
              @endif
              @endforeach
              @endforeach
            </tbody>
          </table>
          {{ $documento->links() }}
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </main>
</div>
@endsection
