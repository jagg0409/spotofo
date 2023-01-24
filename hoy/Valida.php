<html>
    <?php
    $Nombre = $_POST['Nom'];
    $Contraseña = $_POST['Pass'];
    $conn = new mysqli("localhost","root","","redes_sociales");
    if ($conn -> connect_error){
        die ("no se ha establecido conexion con el servidor: " . $conn -> connect_error);
    }
    $registro = mysqli_query($conn, "SELECT * FROM red WHERE Nombre = '$Nombre' AND Contraseña = '$Contraseña' ");
    if ($reg = mysqli_fetch_array($registro)){
        echo "El pedido esta registrado." . $Nombre . " " . $Contraseña . " espere una pronta respuesta." 
    ?>

     <p>
   
     <a href="http://localhost/hoy/red.html"><input type="button" Value="Ordenar mas productos"></a>
    </p>
    <?php
    }
    else {
        echo "<script> alert ('Informacion incorrecta') </script>";
        echo "Pedido no encontrado";
        echo "Volver a intentar";
    ?>
    <p>
        <br>
        <a href="http://localhost/nuevo/pagina/Validacion.html"><input type="button" Value="Volver a Intentar"></a>
    </p>
    <?php
    }
    ?>
    
</html>