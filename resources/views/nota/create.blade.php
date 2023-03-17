@extends('layouts.platillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action ="/notas" method = "POST">
    @csrf

    <div class ="mb-3">
        <label for ="" class ="form-label">Idnota</label>
        <input id ="idnota" name ="idnota" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Idestudiante</label>
        <input id ="idestudiante" name ="idestudiante" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Idmateria</label>
        <input id ="idmateria" name ="idmateria" type ="text" class ="form-control" tabindex="1" >
    </div>
    
    <div class ="mb-3">
        <label for ="" class ="form-label">Idcurso</label>
        <input id ="idcurso" name ="idcurso" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Idperiodo</label>
        <input id ="idperiodo" name ="idperiodo" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Nota3</label>
        <input id ="nota3" name ="nota3" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Nota2</label>
        <input id ="nota2" name ="nota2" type ="text" class ="form-control" tabindex="1" >
    </div>

    <div class ="mb-3">
        <label for ="" class ="form-label">Nota1</label>
        <input id ="nota1" name ="nota1" type ="text" class ="form-control" tabindex="1" >
    </div>


    <div class ="mb-3">
        <label for ="" class ="form-label">Fecha</label>
        <input id ="fecha" name ="fecha" type ="text" class ="form-control" tabindex="1" >
    </div>


    <a href="/notas" class = "btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class = "btn btn-primary" tabindex="4">Guardar</button>


</form>


@endsection