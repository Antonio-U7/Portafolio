<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capcha Test</title>
</head>
<body>
    Captcha: <br>
    <img src="creaCptcha.php" border=1>
    <form method="POST" action="verifica.php">
        <input type="text" name="codigo" width="25" /> 
        <input type="submit" name="enviar" value="verifica"/>
</form>
</body>
</html>