@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
      <main class="py-4">

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Documentos Oficiales</h1>
        <p class="mb-4">Documentos oficiales para realizar la solicitud de elaboracion de cartas de postulacion instuticional a profesores-investigadores de la <a target="_blank" href="https://unach.com">universidad autonoma de Chiapas</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Documentos</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>PDF</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>PDF</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td><a target="_blank" href="#"><i class="bx bxs-download"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      </main>
    </div>
</div>

@endsection
