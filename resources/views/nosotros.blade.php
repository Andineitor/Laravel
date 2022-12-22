@extends('layout.main')


@section('title','Nosotros')
    
@section('content')
<h1 class="text-center">Nosotros</h1>
<hr>

<style>
    body {
    
    }
    h1{
      text-align:center;
    }
  </style></head>


<body>

<p class="text-center">Bienvenido - {{$name}}</p>
<hr>
<br>
    <p>Somos estudiantes de la Escuela Politécnica Nacional  </p>
  
  <p>El objetivo del proyecto es mostrar las destrezas y habilidades que se han adquirido a lo largo de la carrera. La información está separada y detallada por secciones.  <p>
    <br>

  <p>El equipo esta conformado por Andy Loor e Ismael Ballesteros, estudiantes de cuarto semestree de la ESFOT<p>
    <br>
     
  
</form>
@endsection()