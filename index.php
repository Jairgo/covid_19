<?php 

include_once("pruebas.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema de información</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script src="jquery.csv.min.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript"> // load the visualisation API
  google.load('visualization', '1', { packages: ['corechart', 'controls'] });
</script>

<script type="text/javascript">
function drawVisualization() {
   $.get("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos_abiertos/formato_especial/pruebas_casos_acumulados.csv", function(csvString) {
      // transform the CSV string into a 2-dimensional array
      var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

      // this new DataTable object holds all the data
      var data = new google.visualization.arrayToDataTable(arrayData);
      // CAPACITY - En-route ATFM delay - YY - CHART
      var crt_ertdlyYY = new google.visualization.ChartWrapper({
         chartType: 'LineChart',
         containerId: 'pruebas',
         dataTable: data,
         options:{
            width: 750, height: 250,
            titleTextStyle : {color: 'grey', fontSize: 11},
         }
      });
      crt_ertdlyYY.draw();
   });
}
google.setOnLoadCallback(drawVisualization)
</script>

<script type="text/javascript">
function drawVisualization() {
   $.get("casos_nuevos.csv", function(csvString) {
      // transform the CSV string into a 2-dimensional array
      var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});

      // this new DataTable object holds all the data
      var data = new google.visualization.arrayToDataTable(arrayData);
      // CAPACITY - En-route ATFM delay - YY - CHART
      var crt_ertdlyYY = new google.visualization.ChartWrapper({
         chartType: 'LineChart',
         containerId: 'nuevos',
         dataTable: data,
         options:{
            width: 750, height: 450,
            titleTextStyle : {color: 'grey', fontSize: 11},
         }
      });
      crt_ertdlyYY.draw();
   });
}
google.setOnLoadCallback(drawVisualization)
</script>

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
      <div class="fakeimg">
        
        <img src="corona.jpeg" alt="COVID_19"  height="200px" >
      </div>
      <p>Va la descripcion del coronavirus</p>
      <h3>Datos generales a nivel nacional</h3>
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Total confirmados
            <span class="badge badge-danger badge-pill"><?php echo($sumaTConf); ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Total sospechosos
            <span class="badge badge-warning badge-pill"><?php echo($sumaTSosp); ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Total defunciones
            <span class="badge badge-dark badge-pill"><?php echo($sumaTDef); ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Total negativos
            <span class="badge badge-success badge-pill"><?php echo($sumaTNeg); ?></span>
        </li>
        </ul>
      <hr>
      <h3>Mantente informado en los medios oficiales:<h3>
        <div class="container">
          <a class="twitter-timeline" href="https://twitter.com/SSalud_mx?ref_src=twsrc%5Etfw" height="950">Tweets by SSalud_mx</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <div class="col-sm-8">
      <h2>MAPA CON INFO</h2>
        <div class="container">
            <script src="https://gist.github.com/MemoRT22/09f536088f30ccb4eaff829336aa5ff3.js"></script>
        </div>
      <p></p>
      <p>Descripción del gráfico -  sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>NUMERO DE PRUEBAS AL PASO DEL TIEMPO</h2>
      <div class="container">
           <div id="pruebas"></div>
        </div>
      <p></p>
      <p>Descripción del gráfico -  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>CASOS NUEVOS A NIVEL NACIONAL</h2>
      <div class="container">
           <div id="nuevos"></div>
        </div>
      <p></p>
      <p>Descripción del gráfico -  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Sistema de información del coronavirus en el país de México, Actualizado diariamente</p>
</div>

</body>
</html>
