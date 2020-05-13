<?php 

include_once("pruebas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>COVID-19 EN MÉXICO</h1>
  <p>Actualizado por última vez el <?php echo($dia." de ".$mes." del ".$año);?></p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>¿Qué es el coronavirus?</h2>
      <h5>Agrega imagen</h5>
      <div class="fakeimg">Fake Image</div>
      <p>No te pases de lanza, cambiale aqui el texto. Va la descripcion del coronavirus</p>
      <h3>Datos generales a nivel nacional</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Gráfico 1</h2>
      <div class="fakeimg">Fake Image</div>
      <p></p>
      <p>Descripción del gráfico - anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Gráfico 2</h2>
      <div class="fakeimg">Fake Image</div>
      <p></p>
      <p>Descripción del gráfico - anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Sistema de información del coronavirus en el país de México, Actualizado diariamente</p>
</div>

</body>
</html>
