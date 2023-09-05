<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Data 2</title>
  
  </head>
  
  
  
  
  
  
<body>
<?php
   
   
   date_default_timezone_set('America/Sao_Paulo');
   
   
   
  $dia=35;
  $mes=11;
  $ano=2017;
  
  $resp=checkdate($mes,$dia,$ano);
  if($resp==true)
	  echo "A data $dia/$mes/$ano é válida";
  else 
	  echo "A data $dia/$mes/$ano é inválida";
 
?>
</body>
</html>