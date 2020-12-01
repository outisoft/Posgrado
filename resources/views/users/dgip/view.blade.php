@extends('layouts.app')

@section('content')

<div class="container">
  <main class="py-4">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Documento</h6>
    </div>
    <div class="card-body">
      @include('custom.message')
       <form action="{{ route('dgip.update', $dgip->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>{{ $dgip->name }}</th>
            </tr>
          </thead>
          <tbody>
            <td>
              <iframe src="{{ Storage::url($dgip->documento)}}" width="1042" height="1222" style="border: none;">
              </iframe>
            </td>
          </tbody>
        </table>
        <div class="row py-3">
          <div class="col-md-4 mb-2">
            <!--button type="button" class="btn btn-success btn-lg btn-block">Validar</button-->
            <input class="btn btn-success btn-lg btn-block" type="submit" value="Validar">
          </div>

          <div class="my-2"></div>
          <hr>
            <div class="col-md-4 mb-2">
  						<button type="button" class="btn btn-danger btn-lg btn-block">Denegar</button>
  					</div>
            <div class="my-2"></div>
              <hr>
          </div>
      </div>
    </form>
    </div>
  </div>
  </main>
</div>

@endsection
