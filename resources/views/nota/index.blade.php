@extends('layouts.platillabase');

@section('contenido')
<a href="notas/create" class="btn btn-primary">CREAR </a>

<a href="estudiantes" class="btn btn-primary"> notas</a>


<table class ="table table-dark table-striped mt-4">

    <thead>
        <tr>
           
            <th scope ="col"> ID</th>
            <th scope ="col"> IDNOTA</th>
            <th scope ="col"> IDMATERIA</th>
            <th scope ="col"> IDESTUDIANTE</th>
            <th scope ="col"> IDCURSO</th>
            <th scope ="col"> IDPERIODO</th>
            <th scope ="col"> NOTA3</th>
            <th scope ="col"> NOTA2</th>
            <th scope ="col"> NOTA1</th>
            <th scope ="col"> FECHA</th>
            <th scope ="col"> Actiones</th>
        </tr>


    </thead>
    <tbody>
        @foreach ($notas as $nota)
        <tr>
           
        
            <td>{{$nota->id}}</td>
            <td>{{$nota->idnota}}</td>
            <td>{{$nota->idmateria}}</td>
            <td>{{$nota->idestudiante}}</td>
            <td>{{$nota->idCurso}}</td>
            <td>{{$nota->idperiodo}}</td>
            <td>{{$nota->nota3}}</td>
            <td>{{$nota->nota2}}</td>
            <td>{{$nota->nota1}}</td>
            <td>{{$nota->fecha}}</td>

            <td>
                <form action="{{ route ('notas.destroy',$nota->id)}}" method="POST">
                    <a href ="/notas/{{$nota->id}}/edit" class = "btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type ="submit" class = "btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection