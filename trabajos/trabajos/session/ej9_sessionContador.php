<html>
    <head><title>HOME</title>
</head>
<body>
    <h1>contador con sesiones</h1>
    <?php
    session_start();
    if(!isset($_SESSION['contador']))
        {
            $_SESSION['contador']=0;
            
        }
        else
            {
                $_SESSION['contador']++;

            }
            echo "Visitas: ".$_SESSION['contador'];
    ?>
    <br><a href="reiniciaCont.php">Contador sesiones</a>
</body>    