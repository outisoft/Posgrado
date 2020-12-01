@extends('layouts.app')
@section('content')

<div class="card-body">
@include('custom.message')
  <form action="{{ route('perfil.update', $user->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="container">
     <main class="py-4">
       <div class="container marketing">
         <div class="text-center mb-4 justify-content-center">
           <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($user->avatar) }}" alt="" width="160" height="160" focusable="false" role="img" aria-label="Placeholder: 140x140">

           <div class="form-group">
             <input name="avatar" type="file"></input>
           </div>

           <h2><label for="name"> Name:
             <input class="form-control" type="text" name="name" value="{{ old('name', $user->name)}}">
           <p>

             <label for="email"> Correo:
             <input class="form-control" type="text" name="email" value="{{ old('email', $user->email)}}">
            </p>
            <p>Role: {{ $user->rol}}</p>
            <p>
              <input class="btn btn-primary" type="submit" value="Guardar &raquo;">
            </p>
           </div><!-- /.col-lg-4 -->
         </div>
       </main>
     </div>
   </form>
  </div>
<hr class="featurette-divider">

@endsection
