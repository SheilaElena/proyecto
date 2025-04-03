
<?php
    include ("1-conexion.php");

    $sql_usuario = "INSERT INTO usuario(nombre, apellido, contrasena)
                    VALUES ('Sheila','Gómez','03021993sl');";

    $sql_usuario .= "INSERT INTO usuario(nombre, apellido, contrasena)
                        VALUES ('Elena','Dalmau','03021993sl');";

    $Resultado= mysqli_multi_query($conn, $sql_usuario);

    if ($Resultado)
    {
        echo "Se han añadido correctamente los usuarios administradores";
        
    } 
    else 
    {
        echo "Error: " . $sql_usuario . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>





