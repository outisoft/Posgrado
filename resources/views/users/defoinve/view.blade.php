@extends('layouts.app')

@section('content')
<div class="container">
  <main class="py-4">

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
              <th>Nombre del proyecto</th>
            </tr>
          </thead>
          <tbody>
            <td><iframe src="file:///C:/Users/firej/OneDrive/Documentos/Downloads/SB4.pdf" width="400" height="780" style="border: none;"></iframe></td>
            <!--td><iframe src="Documento.php?Archivo=Documento.Pdf'" width="600" height="780" style="border: none;"></iframe></td-->
          </tbody>
        </table>

      </div>
      <!--div class="row py-3">
        <a href="" class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-check"></i>
          </span>
          <span class="text">Validar</span>
        </a>

        <div class="my-2"></div>
        <hr>
          <a href="" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-info-circle"></i>
            </span>
            <span class="text">Denegar</span>
          </a>
          <div class="my-2"></div>
            <hr>
        </div-->
    </div>
  </div>



  <!--div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Validar solicitud</div>
          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif

            <div class="row py-3">
              <a href="" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">Validar</span>
              </a>

              <div class="my-2"></div>
              <hr>
                <a href="" class="btn btn-danger btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                  </span>
                  <span class="text">Denegar</span>
                </a>
                <div class="my-2"></div>
                  <hr>
              </div>
            </div>
          </div>
        </div>
      </div-->
    </main>
    </div>

@endsection
