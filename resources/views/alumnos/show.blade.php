@extends('plantilla2')
@section('contenido1')
@include('alumnos/tablahtml')
@endsection

@section('contenido2')
<h1>Ver Todos los Datos</h1>
<form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
  @csrf
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$alumno->nombre}}" >
      </div>
    </div>
    <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidop" name="apellidop"disabled value="{{$alumno->apellidop}}" >
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" disabled value="{{$alumno->email}}" >
        </div>
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Confirma la eliminación</button>
      </div>
    </div>
    <a href="{{route("alumnos.index")}}" class="btn btn-primary">Regresar</a>
  </form>
@endsection