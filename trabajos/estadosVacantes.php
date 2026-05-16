<html>
    <head>
        <title>Alta de Usuario</title>
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
        <h1>Administrar vacante</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombreVacante">Nombre de la vacante</label>
        <input type="text" id="nombreVac" name="nombreVac" placeholder="Ej. Desarrollador FullStack" required>

        <input type="radio" name="estadoVac" value="0">Aceptado<br>
        <input type="radio" name="estadoVac" value="1">En espera<br>
        <input type="radio" name="estadoVac" value="2">Rechazado<br>
        <input type="submit" name="Enviar">
    </form>
    
        


    <?php
        include("config.php");
        if(isset($_POST['nombre']) && isset($_POST['rfc']) && isset($_POST['correo'])) {
            echo "{$_POST['nombre']}<br>";
            echo "{$_POST['rfc']}<br>";
            echo "{$_POST['correo']}<br>";

            $conexion = mysqli_connect("localhost","u964075885_SantiagoH","T3rr4%PrSM!") or die("Problemas con la conexión");
            if($conexion){
                echo "Conexión exitosa<br>";
                mysqli_select_db($conexion,"u964075885_ActsSantiago") or die("Problemas con la selección de la base de datos");
                echo "Base de datos seleccionada<br>";
                $query = "INSERT INTO clientes (rfc,nombre,mail) VALUES ('{$_POST['rfc']}','{$_POST['nombre']}','{$_POST['correo']}')";
                echo "Consulta: $query<br>";
                if(mysqli_query($conexion,$query)) echo "<br> Datos guardados<br>";
                mysqli_close($conexion);
            }
        }else{
            if(isset($_POST['enviar'])){
                if(isset($_POST['nombre'])==false || $_POST['nombre']==""){
                    echo "El campo nombre es obligatorio<br>";
                }
                if(isset($_POST['rfc'])==false || $_POST['rfc']==""){
                    echo "El campo RFC es obligatorio<br>";
                }
                if(isset($_POST['correo'])==false || $_POST['correo']==""){
                    echo "El campo email es obligatorio<br>";
                }
            }
        }
    ?>
</html>