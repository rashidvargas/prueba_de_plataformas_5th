@extends('layouts.platillabase');

@section('contenido')
<a href="estudiantes/create" class="btn btn-primary">CREAR </a>

<a href="notas" class="btn btn-primary"> notas</a>




<table class ="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope ="col"> ID</th>
            <th scope ="col"> IDCURSO</th>
            <th scope ="col"> NAME</th>
            <th scope ="col"> ESTADO</th>
            <th scope ="col"> FECHA</th>
            <th scope ="col"> Actiones</th>
        </tr>


    </thead>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->idCurso}}</td>
            <td>{{$estudiante->name}}</td>
            <td>{{$estudiante->estado}}</td>
            <td>{{$estudiante->fecha}}</td>
            <td>
                <form action="{{ route ('estudiantes.destroy',$estudiante->id)}}" method="POST">
                    <a href ="/estudiantes/{{$estudiante->id}}/edit" class = "btn btn-info">Editar</a>
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

