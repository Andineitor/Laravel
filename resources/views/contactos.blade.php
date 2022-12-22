
@extends('layout.main')


@section('title','contactos')
    
@section('content')

<style>
    body {
      background:#00e5ff;
    }
    h1{
      text-align:center;
    }
  </style></head>


<body>

<h1>Contacto y Recomendaciones</h1>
<br>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <label> Ingrese su nombre y apellido:
        <input type="text" name="nombre">
    </label>
    <br>
    <br>
    <label> Ingresa su edad:
        <input type="number" name="edad">
    </label>
    <br>
    <br>
    <label> Direccion Domiciliaria:
        <input type="text" name="direccion">
    </label>
    <br>
    <br>
    <label> Correo Electronico:
        <input type="text" name="correo">
    </label>
    <br>
    <br>
    <label> Elige tu genero:
    </label>
    <br>
    <label> Masculino:
        <input type="radio" name="genero" value="mÃ¡sculino">
    </label>
    <label> Femenino:
        <input type="radio" name="genero" value="femenino">
    </label>
    <label> Otro(Especifique):
        <input type="text" name="otro">
    </label>
    <br>
    <p>Rol que desempeña: </p>
    <select name="nacionalidad">
        <option value="ecu">Estudiante</option>
        <option value="col" selected="">Maestro</option>
        <option value="chi" selected="">Persona jurídica</option>
        <option value="arg" selected="">Uso personal</option>
    </select>
    <br>
    <p>Rango de edad</p>
    <label>
        De 12 a 18 años
        <input type="checkbox" name="roles[]" value="12 a 18">
        De 18 a 25 años
        <input type="checkbox" name="roles[]" value="18 a 25">
        de 25 a 35 años
        <input type="checkbox" name="roles[]" value="25 a 35">
        40 años o más
        <input type="checkbox" name="roles[]" value="40+">
      
    </label>
    <br>
    <br>
    <label>Seleccione un archivo 
        <br>
        <br>
        <input type="file" name="archivo">
    </label>
    <br>
   
    <br>
    <p>Recomendaciones: </p>
    <textarea name="mensaje" cols="50" rows="5"></textarea>
    <br>
    <button type="submit">Enviar Formulario</button>
   <br>

   <p>Información de contacto: </p>

  <p>Andy Loor: 
    <br>
     Correo:andy.loor@epn.edu.ec/Git-Hub:Andineitor <p>
     
  <p>Ismael Ballesteros:
    <br>
    Correo:erik.ballesteros@epn.edu.ec/Git-Hub:IsmaelB13 <p>
        

</form>


@endsection()