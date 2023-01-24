<html>
<head>
	<title>BORRAR</title>
</head>

<body background="fondo3.jpg">
	<?php 
	$conexion = new  mysqli("localhost", "root", "", "redes_sociales");
if($conexion -> connect_error){
	die("ERROR  en la conexion con el servidor" . $conexion -> connect_error);
}
$registro = mysqli_query($conexion, "SELECT * FROM red WHERE Nombre= '$_REQUEST[Nom]'")
or die ("Problemas en el select: " . mysqli_error("$conexion"));
		if ($reg = mysqli_fetch_array($registro)) {
			mysqli_query($conexion, "DELETE FROM red WHERE Nombre = '$_REQUEST[Nom]'")
			or die ("Problemas en el select: " . mysqli_error("$conexion"));
			echo "Se efectuo el borrado de usuario.";
		}
		else {
			echo "No exite esta Identificacion";
		}
		mysqli_close($conexion);
	 ?>
	   <p>
        <br>
        <a href="http://localhost/nuevo/pagina/Registro.html"><input type="button" Value="VOLVER A LA PLAGINA PRINCIPAL"></a>
    </p>
</body>
</html>