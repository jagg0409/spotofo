<html>
<?php
    $Nombre = $_POST['Nom'];
    $Contraseña = $_POST['Pass'];
   
    $conn = new mysqli("Localhost","root","","redes_sociales");
    if ($conn-> connect_error){
        die("no se ha establecido conexion con el servidor:" . $conn -> connect_error);
    }
    $registro = mysqli_query($conn, "SELECT * FROM red WHERE Nombre = '$Nombre' AND Contraseña = '$Contraseña' ");
        if ($reg = mysqli_fetch_array($registro)){
            echo "Usuario encotrado" . $Nombre . " " . $Contraseña . "Se ha permitido el cambio"; 
        mysqli_query($conn, "UPDATE red SET Contraseña='$_REQUEST[new]' WHERE Contraseña ='$Contraseña' AND Nombre='$Nombre' ") or die ("Problemas en el SELECT:" . mysql_error($conn));
            echo "La contraseña fue modificada correctamente";
         }  
    else { "<script> alert(' El cambio no se realizo con exito'; </script> )"; 
         
        
?>
    <a href="http://localhost/hoy/cambio.html"><input type="button" value="VOLVER A INTENTAR"></a>
<?php
        
  }  
    
?>  
    
    
    
    
    
</html>