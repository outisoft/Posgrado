@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                        <i class="fas fa-plus"></i>
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
    </div>
</div>
@endsection
