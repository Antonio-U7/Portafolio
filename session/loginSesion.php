<html>
<head><title>HOME</title>
</head>
<body>
<?php
session_start();
$mensaje="accediendo";
if(isset($_POST['user']) && $_POST['user']!="" && 
  isset($_POST['pin']) && $_POST['pin']!="" ) 
  
{   
  $user=$_POST['user'];
  $pin=$_POST['pin'];
  $conexion = mysqli_connect("localhost","root","") 
   or  die("Problemas en la conexion");
  if($conexion)
  { 
    mysqli_select_db($conexion,"proyecto") 
    or  die("Problemas en la selec. de BDs");
    $query= "SELECT * FROM users WHERE 
    username = '$user' AND pin= '$pin';";
    echo "La consulta generada es:<br>" .$query;
    if($registros=mysqli_query($conexion,$query))
    {
      $total_reg=mysqli_num_rows($registros);
      if($total_reg==1){// existe el usuario 
        $_SESSION['userName'] = $user;
        /*$_SESSION['perfil'] = $tupla['perfil'];
        $_SESSION['ultima'] = time();*/
        $mensaje="<br>BIENVENIDO $user<br>";
      }  
      else{
        unset($_SESSION['userName']);
        $mensaje= "<br>USUARIO NO ENCONTRADO<br>";     
      }
    } 
    mysqli_close($conexion);
  }
 }
 else{
      if(isset($_POST['enviar'])){                 
          if(isset($_POST['user'])==false || $_POST['user']=="" 
           || isset($_POST['pin'])==false || $_POST['pin']=="" )
          {
            unset($_SESSION['userName']);
            $mensaje= "<br>datos incompletos<br>";         
          }  
      }  
      else{ 
          if(isset($_SESSION['userName']))
             $mensaje = '<br>Bienvenido '.$_SESSION['userName']."<br>".
           "<a href='logout.php'>Cerrar Sesion</a>"; 

          else $mensaje= "<br>favor de autentificarse<br>";  
      }
 }
echo $mensaje;
?>
</body>
</html>
