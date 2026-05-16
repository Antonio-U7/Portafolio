<html>
<head><title>MODIFICACIONES DE CLIENTES</title>
     <style>
            body {
        background-color: #1a1d23;
        color: #ffffff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 50px;
        margin: 0;
    }

    h1 {
        font-weight: 300;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 30px;
        color: #f0f0f0;
    }

    /* Contenedor del formulario */
    form {
        background-color: #242933;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        width: 100%;
        max-width: 400px;
    }

    /* Estilo de las etiquetas e inputs */
    label {
        display: block;
        margin-bottom: 8px;
        font-size: 0.9rem;
        color: #b0b3b8;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #3f444d;
        border-radius: 4px;
        background-color: #1a1d23;
        color: white;
        box-sizing: border-box; /* Para que el padding no desborde el ancho */
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
        outline: none;
        border-color: #3498db;
    }

    /* Estilo del botón */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #3498db;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.1s;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    input[type="submit"]:active {
        transform: scale(0.98);
    }


        </style>  
</head>
<body>
<h1>Equipos de futbol</h1>
<form action="futbol_pdf.php" method="post">
Equipo:
<?php

$conexion = mysqli_connect("localhost","root","") or die("error en la conexion");
if($conexion)
{
    mysqli_select_db($conexion,"futbol") or die("ERROR bd");
    $query = "SELECT * FROM equipo;";
    $registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
    echo "<select name='equipo'>";
    while($tupla=mysqli_fetch_array($registros))
    {
        echo "<option value=".$tupla['id'].">".$tupla['nombre']."</option>";
    }
    mysqli_close($conexion);
}
echo "</select>";


?>
<input type="submit" name="enviar">
</form>
</body>
</html>