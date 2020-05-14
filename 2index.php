<?php
$fichero = "https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/series_de_tiempo/covid19_mex_casos_nuevos.csv";
$nuevo_fichero = "casos_nuevos.csv";
/*if (!copy($fichero, $nuevo_fichero)) {
    echo "Error al copiar $fichero <br/>";
}*/

$arch="";
$linea = 0;
// variable $arc está vacia
$archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/series_de_tiempo/covid19_mex_casos_nuevos.csv", "r");

while (($datos = fgetcsv($archivo, ",")) == true) 
{
    for ($columna = 0; $columna < 2; $columna++) 
    {
      $array[$linea][$columna]=$datos[$columna];
    }
    $linea++;
}
fclose($archivo);
$fp = fopen('casos_nuevos.csv', 'w');
foreach ($array as $campos) {
  fputcsv($fp, $campos);
}

fclose($fp);

?>
<!DOCTYPE html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <!-- http://t.co/dKP3o1e -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script src="jquery.csv.min.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript"> // load the visualisation API
  google.load('visualization', '1', { packages: ['corechart', 'controls'] });
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
            title: 'Casos nuevos a nivel nacional',
            titleTextStyle : {color: 'grey', fontSize: 11},
         }
      });
      crt_ertdlyYY.draw();
   });
}
google.setOnLoadCallback(drawVisualization)
</script>

<div id="nuevos"></div>