<html>
<head><title>HOME</title>
</head>
<body>

<?php
$mensaje="inicio";
$correcto=0;
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
    or die("Problemas en la selec. de BDs");
    $query= "SELECT * FROM users WHERE username = '$user'  AND pin= $pin;";
    //echo "La consulta generada es:<br>" .$query;
    if($registros=mysqli_query($conexion,$query))
    {
      $total_reg=mysqli_num_rows($registros);
      if($total_reg==1){// existe el usurio 
        setcookie('user',1, time()-30);//elimina la cookie 
        setcookie('perfil',1, time()-30);//elimina el perfil
         
        setcookie('user',$user, time()+30);//5 mins 
        setcookie('perfil',2, time()+30);//2 reclutador 

        $correcto=1;
        print_r($_COOKIE);// imprime las cookies activas
        $mensaje="<br>BIENVENIDO $user<br>";
      }  
      else{
        setcookie('user',1, time()-300);//elimina la cookie 
        setcookie('perfil',1, time()-30);//elimina el perfil        
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
            setcookie('user',1, time()-30);//elimina la cookie 
            setcookie('perfil',1, time()-30);//5 mins 
        
            $mensaje= "<br>datos incompletos<br>";         
          }  
        }  
        else{ 
          if(isset($_COOKIE['user']))
             $mensaje = '<br>Bienvenido '.$_COOKIE['user']."<br>"; 
          else $mensaje= "<br>favor de autentificarse<br><a href='login.html'>login</a>";  
        }
 }

echo $mensaje;

if($correcto==1)header("Location: prueba.php");
else{
	header("Refresh: 5; url=login.html");
   	echo "Datos incorrectos. Redirigiendo en 5 segundos...";
}
?>

</body>
</html>
