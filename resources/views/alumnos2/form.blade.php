@extends('plantilla2')
@section('contenido1')
@include('alumnos2/tablahtml')
@endsection

@section('contenido2')

@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
  </li>
@endforeach
@if($accion=='C')
<form action="{{route('alumnos.store')}}" method="POST">
  <h1>Insertando en el Form</h1>
@elseif($accion=='E')
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
  <h1>EDITANDO EL FORM</h1>
  @elseif($accion=='D')
  <form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
    <h1>ELIMINAR EN EL FORM</h1>

@endif
 
  @csrf
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}"{{$des}}>
        @error("nombre")
        <p class="text-danger">Error en:{{$message}}</p>
        @enderror
      </div>
    </div>
    <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop',$alumno->apellidop)}}"{{$des}}>
          @error("apellidop")
          <p class="text-danger">Error en:{{$message}}</p>
        @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" value="{{old('email',$alumno->email)}}"{{$des}}>
          @error("email")
          <p class="text-danger">Error en:{{$message}}</p>
        @enderror
        </div>
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
      </div>
    </div>
  </form>
@endsection