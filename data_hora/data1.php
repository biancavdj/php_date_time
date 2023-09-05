<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Data 1</title>
   
  </head>

  <body>


<?php
  
  $dia=10;
  $mes=02;
  $ano=2018;
  
  $resp=checkdate($mes, $dia, $ano);
  if($resp==true)
	  echo " A data $dia/$mes/$ano é válida";
  else 
	  echo "A data $dia/$mes/$ano";
  
  
  
   
?>
</body>
</html>