@extends('plantilla2')
@section('contenido1')
@include('puestos/tablahtml')
@endsection

@section('contenido2')
<form action="{{route('puestos.store')}}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="idPuesto" class="col-sm-2 col-form-label">Id Puesto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="idPuesto" name="idPuesto">
    </div>
  </div>
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
    </div>
    
      <div class="form-group row">
        <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tipo" name="tipo">
        </div>
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
@endsection