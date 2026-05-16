<?php

if(isset($_COOKIE['ejemusuario']))
  { 
    // Caduca en un 2 mins
    setcookie('ejemusuario', $_COOKIE['ejemusuario'] + 1, time() +60); 
    $mensaje = 'Numero de visitas: ' . $_COOKIE['ejemusuario']; 
  } 
  else 
  { 
    // Caduca en un año 60*60*24*365
    // Caduca en 2 mins
    setcookie('ejemusuario', 1, time() +60); 
    $mensaje = 'Bienvenido a nuestra pagina web'; 

  } 
  print_r ($_COOKIE);
echo $mensaje;
echo "<br>contadores...";
?> 
<html> 
<head> 
   <title>Ejemplo de PHP</title> 
</head> 
<body> 
<H1>Ejemplo de uso de cookie...</H1> 
<?php
$datos=$_GET['nombre'];
echo $datos;
echo "<br>...Se ha establecido una cookie de nombre <b>ejemusuario</b> con el valor: <b>";
echo $_GET['nombre']; 
echo "</b> que sera valida durante 2 min"; 
?> 
</body> 
</html> 