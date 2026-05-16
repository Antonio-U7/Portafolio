<?php
session_start();
if(isset($_POST['codigo']) && $_POST['codigo']!="")
    if(md5($_POST['codigo']) != $_SESSION['code'])
        echo "CODIGO INCORRECTO";
    else
        echo "CODIGO CORRECTO";
?>