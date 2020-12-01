@extends('layouts.app')
@section('content')

<div class="container">
  <main class="py-4">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      @include('custom.message')
      <h6 class="m-0 font-weight-bold text-primary">Documento</h6>
    </div>
    <div class="card-body">

       <form action="{{ route('di.update', $investigador->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>{{ $investigador->name }}</th>
            </tr>
          </thead>
          <tbody>
            <td>
              <iframe src="{{ Storage::url($investigador->documento)}}" width="1042" height="1222" style="border: none;">
              </iframe>
            </td>
          </tbody>
        </table>
      </div>
    </form>
    </div>
  </div>
  </main>
</div>

@endsection
