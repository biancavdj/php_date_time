<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Data 3</title>
   
  </head>
  <body>


<?php
 
   date_default_timezone_set('America/Sao_Paulo');
 
 
 
 $dia=date("d");
 $mes=date("m");
 $ano=date("Y");


$diaSemana=date("d");
$hora=date("H");
$minutos=date("i");
$segundos=date("s");
 
 
 echo "Data de hoje: $dia/$mes/$ano";
 echo "<br/>";
 echo "Dia da semana: $diaSemana";
 echo "<br/>";
 echo "Hora atual: $hora:$minutos:$segundos";
 
?>
</body>
</html>