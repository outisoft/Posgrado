@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <main class="py-4">
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header py-3"><h2>Lista de solicitudes de {{$user->name}}</h2></div>
            <div class="card-body">  <br><br>
              @include('custom.message')
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Ver</th>
                            <th colspan="3">Descargar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($documents as $doc)
                          @if ($user->id == $doc->sender_id)
                            <tr>
                              <th scope="row">{{$doc->id}}</th>
                              <td>{{$doc->name}}</td>
                              <td>
                                @foreach ($validation as $validar)
                                @if ($doc->id == $validar->id_document)
                                  @if ($validar->val_defoinve == 1)
                                   @if ($validar->val_di == 1)
                                    @if ($validar->val_dgip == 1)
                                     <span class="badge px-3 badge-success">DGIP Validado</span>
                                    @else
                                      <span class="badge px-3 badge-info">DI Validado</span>
                                    @endif
                                   @else
                                    <span class="badge px-3 badge-warning">Defoinve Validado</span>
                                  @endif
                                  @else
                                    <span class="badge px-3 badge-danger">Sin Validar</span>
                                  @endif
                                @endif
                                @endforeach
                              </td>
                              <td>{{ $doc->created_at->day}}-{{ $doc->created_at->month}}-{{ $doc->created_at->year}}</td>
                              <td><a class="btn btn-info" href="{{ route('investigador.show', $doc->id)}}">Ver</a></td>
                              <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
                            </tr>
                            @endif
                          @endforeach
                    </tbody>
                  </table>
                  {{ $documents->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

@endsection
