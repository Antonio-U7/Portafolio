<?php
  if(!isset($_COOKIE['user']))
    {
	header("Refresh: 5; url=login.html");
   	echo "Sesion no Iniciada. Redirigiendo al login en 5 segundos...";
	exit;
    }
?>

<html>
<head><title>HOME</title>
</head>
<body>
Bienvenido
<?php
$user=$_COOKIE['user'];
$mensaje="Perfil de ".$user;
echo $mensaje;
?>
</body>
</html>
