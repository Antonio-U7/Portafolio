<?php
  session_start();
  function texto($tam)
  {
    $cadena = "123456789ABCDEFGHIJKLMNÑOPQRSTVXYZ";
    $cad2="-----";
    for($i = 0; $i<$tam;$i++)
      $cad2[$i]=$cadena[rand(0,32)];
    return $cad2;
  }
  $ancho=100; //Ancho de la imagen
  $alto=30; //Alto de la imagen
  $mensaje=texto(5);
  $imagen=imageCreate($ancho,$alto);
  $colfondo=ImageColorAllocate($imagen,155,155,155); //Color de fondo gris para el recuadro
  ImageFill($imagen,0,0,$colfondo);
  $coltexto=ImageColorAllocate($imagen,100,100,100); //Color de las letras
  $_SESSION['code']=md5($mensaje); 
  
  ImageString($imagen,5,25,5,$mensaje,$coltexto);
  for($c=0;$c<6;$c++) //Cantidad de lineas dentro de la imagen
  {
      $x1=rand(0,$ancho);
      $y1=rand(0,$alto);
      $x2=rand(0,$ancho);
      $y2=rand(0,$alto);
      ImageLine($imagen,$x1,$y1,$x2,$y2,$coltexto);
  }
  Header ("Content-type: image/jpeg"); //Mostrar la imagen en el navegador
  ImageJPEG ($imagen);
  ImageDestroy($imagen);
?>