<?php
$linea = 0;
//Abrimos nuestro archivo
$archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/estados_hoy.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
  //$num = count($datos);
  
  //Recorremos las columnas de esa linea
  for ($columna = 0; $columna < 2; $columna++) 
      {
         //echo $datos[$columna]."  | ";
         $conftotales[$linea][$columna]=$datos[$columna];
         
     }
     //echo("<br />");
     $linea++;
}
print_r($conftotales[2]);
//Cerramos el archivo
fclose($archivo);



$archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/last_updated.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
  $num = count($datos);
  
  $linea++;
  //Recorremos las columnas de esa linea
  for ($columna = 0; $columna < $num; $columna++) 
      {
        //echo $datos[$columna]."  | ";
        $data=$datos[$columna];
     }
     //echo("<br />");
}
$data=substr($data, 0, 10);
$lastUpdate= explode("-", $data);
$año=$lastUpdate[0];

//2020-mayo-12
$meses = array(
    "01" => "enero",
    "02" => "febrero",
    "03" => "marzo",
    "04" => "abril",
    "05" => "mayo",
    "06" => "junio",
    "07" => "julio",
    "08" => "agosto",
    "09" => "septiembre",
    "10" => "octubre",
    "11" => "noviembre",
    "12" => "diciembre",
);

$mes=$meses[$lastUpdate[1]];
$dia=$lastUpdate[2];
//Cerramos el archivo
fclose($archivo);


?>