<?php
if(isset($_COOKIE[$_GET['nombre']]))
    {
        //Caduca en 2 minutos
        setcookie($_GET['nombre'], $_COOKIE[$_GET['nombre']] + 1, time() + 120 );
        $mensaje = 'Numero de visitas: ' . $_COOKIE[$_GET['nombre']];
    }
    else 
        {
            //Caduca en un año 60*60*24*365
            //Caduca en 2 mins
            setcookie($_GET['nombre'], 1, time() + 120);
            $mensaje = 'Bienvenido a nuestra pagina web';
        }
        echo $mensaje;
        echo "<br>Contadores...";
?>
<html>
<head>
        <title>Ejwemplo de PHP</title>
</head>
<body>
    <h1>Ejemplo de uso de cookie</h1>
    <?php
    $datos=$_GET['nombre'];
    echo $datos;
    echo "<br>...Se ha establecido una cookie de nombre <b>ejemusuario</b> con el valor: ";
    echo $_GET['nombre'];
    echo "</b> que sera valida durante 2 min";
    ?>
</body>    