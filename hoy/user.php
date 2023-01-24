<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css"  href="xampp\htdocs\hoy/red.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$conn = new mysqli("localhost", "root", "", "redes_sociales");
if ($conn->connect_error){
    die ("Error no se puede conectar con el servidor" . $conn->connect_error);
}
$query = "INSERT INTO red (Nombre, Contraseña) VALUES('$_REQUEST[Nom]', '$_REQUEST[Pass]')";
$result = $conn -> query ($query);
if (!$result) die ("Falla al acceder a la base de datos");
echo "Su pedido fue realizado con exito.";
$conn -> close();  
?>
</body>
</html>