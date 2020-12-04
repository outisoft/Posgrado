@extends('layouts.app')
@section('content')

<!-- ================ contact section start ================= -->
<div class="container">
  <main class="py-4">
<section class="section-margin">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Denegar Solicitud</h2>
      </div>
      <div class="col-lg-8 mb-4 mb-lg-0">
          <form action="{{ route('documento.update', $defoinve->id)}}" method="POST">
           @csrf
           @method('PUT')
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                  <textarea class="form-control w-100" name="descripcion" id="descripcion" cols="30" rows="9" placeholder="Indica el Motivo por el cual se esta denegado la solicitud"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group mt-lg-3">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Enviar</button>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>{{ $defoinve->name}}</h3>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            @foreach ($users as $user)
            @if ($user->id == $defoinve->sender_id)
            <h3><a href="#">{{ $user->name }}</a></h3>
            <p>{{ $defoinve->created_at->year }}-{{ $defoinve->created_at->month }}-{{ $defoinve->created_at->day }}</p>
            @endif
            @endforeach

          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            @foreach ($users as $user)
            @if ($user->id == $defoinve->sender_id)
            <h3><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></h3>
            <p>Send us your query anytime!</p>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
</div>
<!-- ================ contact section end ================= -->

@endsection
