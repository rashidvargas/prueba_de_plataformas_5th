@extends('layouts.platillabase');

@section('contenido')
<h2>EDITAR REGISTROS </h2>

<form action ="/estudiantes/{{$estudiante->id}}" method = "POST">
    @csrf
    @method('PUT')
    <div class ="mb-3">
        <label for ="" class ="form-label">Idcurso</label>
        <input id ="idcurso" name ="idcurso" type ="text" class ="form-control" value ="{{$estudiante->idCurso}}" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Name</label>
        <input id ="name" name ="name" type ="text" class ="form-control" value ="{{$estudiante->name}}" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Estado</label>
        <input id ="estado" name ="estado" type ="text" class ="form-control" value ="{{$estudiante->estado}}" >
    </div>
    
    <div class ="mb-3">
        <label for ="" class ="form-label">Fecha</label>
        <input id ="fecha" name ="fecha" type ="text" class ="form-control" value ="{{$estudiante->fecha}}" >
    </div>
    <a href="/estudiantes" class = "btn btn-secondary" >Cancelar</a>
    <button type="submit" class = "btn btn-primary"tabindex="4" >Guardar</button>


</form>




@endsection 