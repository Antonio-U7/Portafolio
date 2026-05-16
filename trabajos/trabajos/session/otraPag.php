<?php
session_start(); 
if(!isset($_SESSION['userName']) ){
    header('Location: login.html');
    exit;
} 
?>
<html>
<head><title>Otra Pagina</title>
</head>
<body>
<h1>Otra pagina</h1>
</body> 
</html> 
