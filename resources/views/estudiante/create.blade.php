@extends('layouts.platillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action ="/estudiantes" method = "POST">
    @csrf
    
    <div class ="mb-3">
        <label for ="" class ="form-label">Idcurso</label>
        <input id ="idcurso" name ="idcurso" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Name</label>
        <input id ="name" name ="name" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Estado</label>
        <input id ="estado" name ="estado" type ="text" class ="form-control" tabindex="1" >
    </div>
    
    <div class ="mb-3">
        <label for ="" class ="form-label">Fecha</label>
        <input id ="fecha" name ="fecha" type ="text" class ="form-control" tabindex="1" >
    </div>
    <a href="/estudiantes" class = "btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class = "btn btn-primary" tabindex="4">Guardar</button>


</form>


@endsection