<?php
$linea = 0;
//Total confirmados
$archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/estados_hoy.csv", "r");
    //Lo recorremos
    while (($datos = fgetcsv($archivo, ",")) == true) 
    {
        for ($columna = 0; $columna < 2; $columna++) 
        {
            $conftotales[$linea][$columna]=$datos[$columna];
        }
        $linea++;
    }
    
    $sumaTConf=0;
    for ($i=0; $i < 33; $i++) { 
        (int)$temp=(int)$conftotales[$i][1];
        //echo($conftotales[$i][0]."<br/>");
        $sumaTConf+=$temp;
    }
    //echo("total: ".(int)$sumaTConf);
    //Cerramos el archivo
fclose($archivo);
//
//Total sospechosos
    $linea = 0;
    //Abrimos nuestro archivo
    $archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/estados_hoy.csv", "r");
    //Lo recorremos
    while (($datos = fgetcsv($archivo, ",")) == true) 
    {
    //Recorremos las columnas de esa linea
        for ($columna = 5; $columna < 6; $columna++) 
        {
            $sospTotales[$linea][$columna]=$datos[$columna];
        }
        $linea++;
    }
    $sumaTSosp=0;
    //print_r($sospTotales);
    for ($i=1; $i < 33; $i++) { 
        (int)$temp=(int)$sospTotales[$i][5];
        $sumaTSosp+=$temp;
    }
    //Cerramos el archivo
    fclose($archivo);
//Total defunciones
    $linea = 0;
    //Abrimos nuestro archivo
    $archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/estados_hoy.csv", "r");
    //Lo recorremos
    while (($datos = fgetcsv($archivo, ",")) == true) 
    {
    //Recorremos las columnas de esa linea
        for ($columna = 3; $columna < 4; $columna++) 
        {
            $defTotales[$linea][$columna]=$datos[$columna];
        }
        $linea++;
    }
    $sumaTDef=0;
    for ($i=1; $i < 33; $i++) { 
        (int)$temp=(int)$defTotales[$i][3];
        $sumaTDef+=$temp;
    }
    //Cerramos el archivo
    fclose($archivo);
//Total negativos
$linea = 0;
//Abrimos nuestro archivo
$archivo = fopen("https://raw.githubusercontent.com/mexicovid19/Mexico-datos/master/datos/estados_hoy.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
//Recorremos las columnas de esa linea
    for ($columna = 6; $columna <= 6; $columna++) 
    {
        $negTotales[$linea][$columna]=$datos[$columna];
    }
    $linea++;
}
$sumaTNeg=0;
for ($i=1; $i < 33; $i++) { 
    (int)$temp=(int)$negTotales[$i][6];
    $sumaTNeg+=$temp;
}
//Cerramos el archivo
fclose($archivo);

    //ultima actz
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