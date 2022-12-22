
@extends('layout.main')


@section('title','Home')
    
@section('content')

<h1 class="text-center">Portafolio</h1>

<hr>
<h2>Conocimientos</h2>
<hr>
<hr>
<h3>POO:</h3>
<br>
<ol>
    @forelse($backe as $clave => $materia )
        <li><b> {{$clave}} </b></li>
         <ul>
             <li>{{$materia}}</li>
         </ul>
    @empty
        <p>No Existen autos disponibles</p>
    @endforelse
    </ol>
<hr>

<hr>
<h3>Diseño:</h3>
<br>
<ol>
    @forelse($fron as $claves => $materias )
        <li><b> {{$claves}} </b></li>
         <ul>
             <li>{{$materias}}</li>
         </ul>
    @empty
        <p>No Existen autos disponibles</p>
    @endforelse
    </ol>
<hr>
@endsection()