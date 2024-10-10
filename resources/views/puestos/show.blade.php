@extends('plantilla2')
@section('contenido1')
@include('puestos/tablahtml')
@endsection

@section('contenido2')
<h1>Ver Todos los Datos</h1>
<form action="{{route('puestos.destroy', $puesto)}}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="id[uesto]" class="col-sm-2 col-form-label">Id Puesto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="idPuesto" name="idPuesto"disabled value="{{$puesto->idPuesto}}" >
    </div>
  </div>

    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$puesto->nombre}}" >
      </div>
    </div>
  
      <div class="form-group row">
        <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tipo" name="tipo" disabled value="{{$puesto->tipo}}" >
        </div>
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Confirma la eliminación</button>
      </div>
    </div>
    <a href="{{route("puestos.index")}}" class="btn btn-primary">Regresar</a>
  </form>
@endsection