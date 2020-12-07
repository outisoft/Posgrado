@extends('layouts.app')
@section('content')

<div class="container">
<main class="py-4">

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Documentos Rechazados</h1>
    <div class="card shadow mb-4">
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
              @if (Auth::user()->rol == 'DEFOINVE')
              @foreach ($doc as $documento)
              @foreach ($validar as $val)
              @if ($documento->id == $val->id_document && $documento->descripcion != null)
                <tr>
                  <td>{{ $documento->name}}</td>
                  <td>{{ $documento->created_at->day}}-{{ $documento->created_at->month}}-{{ $documento->created_at->year}} </td>
                  <td><a class="btn btn-info" href="{{ route('defoinve.show', $documento->id)}}">Ver</a></td>
                </tr>
              @endif
              @endforeach
             @endforeach

             @elseif (Auth::user()->rol == 'DGIP')
             @foreach ($doc as $documento)
             @foreach ($validar as $val)
             @if ($documento->id == $val->id_document && $val->val_di == 1 && $documento->descripcion != null)
               <tr>
                 <td>{{ $documento->name}}</td>
                 <td>{{ $documento->created_at->day}}-{{ $documento->created_at->month}}-{{ $documento->created_at->year}} </td>
                 <td><a class="btn btn-info" href="{{ route('dgip.show', $documento->id)}}">Ver</a></td>
               </tr>
             @endif
             @endforeach
             @endforeach

             @elseif (Auth::user()->rol == 'DI')
             @foreach ($doc as $documento)
             @foreach ($validar as $val)
             @if ($documento->id == $val->id_document && $val->val_defoinve == 1 && $documento->descripcion != null)
              <tr>
               <td>{{ $documento->name}}</td>
               <td>{{ $documento->created_at->day}}-{{ $documento->created_at->month}}-{{ $documento->created_at->year}} </td>
               <td><a class="btn btn-info" href="{{ route('di.show', $documento->id)}}">Ver</a></td>
              </tr>
             @endif
             @endforeach
             @endforeach
             @endif

           </tbody>
         </table>
         {{ $doc->links() }}
       </div>
     </div>
   </div>


 </div>
</main>
</div>

@endsection
