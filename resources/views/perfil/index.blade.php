@extends('layouts.app')
@section('content')

<div class="container">
  <main class="py-4">
    <div class="container marketing">


        <div class="text-center mb-4 justify-content-center">

          <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($user->avatar) }}" alt="" width="160" height="160" focusable="false" role="img" aria-label="Placeholder: 140x140">

          <h2>{{ $user->name}}</h2>
          <p>Correo: {{ $user->email}}</p>
          <p>Role: {{ $user->rol}}</p>
          <p><a class="btn btn-secondary" href="{{ route('perfil.edit', Auth::user()->id )}}" role="button">Editar &raquo;</a></p>

        </div><!-- /.col-lg-4 -->

      </div>

  </main>
</div>

<hr class="featurette-divider">


@endsection
