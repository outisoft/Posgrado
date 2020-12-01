@extends('layouts.app')
@section('content')


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="heading-section mb-4">Progreso de Solicitud <br>
          <!--div class="form-group row">
            <div class="col-md-9">
  						<h2 class="heading-section">
  							<small>Seleccione su sulicitud</small>
  						</h2>
  					</div>
              <label for="rol" class="sr-only">{{ __('Solicitudes') }}</label>

                <select id="rol" class="btn btn-secondary dropdown-toggle form-control @error('password') is-invalid @enderror" placeholder="Rol" type="rol"  name="rol" value="{{ old('rol') }}">
                  @foreach ($document as $documentos)
                    @if (Auth::user()->id == $documentos->sender_id)
                      <option value='{{ $documentos->id }}'>{{ $documentos->name }}</option>
                    @endif
                  @endforeach
                </select>
                <div class="col-md-6">
                @error('rol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
          </div-->
          <label for="rol" class="sr-only">{{ __('Solicitudes') }}</label>

          <!--div class="progress mb-4" style="height: 30px; width: 1100px;">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              <span>75% Complete</span>
            </div>
          </div-->
          @foreach ($document as $doc)
          @foreach ($validation as $validar)
          @if ($doc->id == $validar->id_document)
            @if ($validar->val_defoinve == 1)
             @if ($validar->val_di == 1)
              @if ($validar->val_dgip == 1)
              {{ $doc->name}}
              <div class="progress mb-4" style="height: 30px; width: 1100px;">
              <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                <span>75% Complete</span>
              </div>
              </div>
              @else
              {{ $doc->name}}
              <div class="progress mb-4" style="height: 30px; width: 1100px;">
              <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                <span>50% Complete</span>
              </div>
              </div>
              @endif
             @else
             {{ $doc->name}}
             <div class="progress mb-4" style="height: 30px; width: 1100px;">
             <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
               <span>25% Complete</span>
             </div>
             </div>
            @endif
            @else
            {{ $doc->name}}
            <div class="progress mb-4" style="height: 30px; width: 1100px;">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              <span>0% Complete</span>
            </div>
            </div>
            @endif
          @endif
          @endforeach
          @endforeach
          <small></small>
        </h2>
      </div>
    </div>
  </div>
</section>

@endsection
