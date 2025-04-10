
<?php
    include ("1-conexion.php");

    $sql_prueba = "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('1','2025-02-24','192.168.1.1','v','B');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('2','2025-02-24','192.168.1.1','a','B');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('3','2025-02-24','192.168.1.4','s','B');";

    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('4','2025-02-24','192.168.1.2','r','I');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('5','2025-02-24','192.168.1.2','s','I');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('6','2025-02-24','192.168.1.8','t','I');";

    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('7','2025-02-24','192.168.1.10','f','P');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('8','2025-02-24','192.168.1.10','d','P');";
    $sql_prueba .= "INSERT INTO `keylogger`(`id`, `fecha`, `ip`, `tecla`, `tipo`) VALUES ('9','2025-02-24','192.168.1.12','h','P');";

    $sql_prueba .= "INSERT INTO `phishing`(`id`, `fecha`, `ip`, `nombreapellido`, `email`, `provincia`, `telefono`) VALUES ('1','2025-03-25 18:54:12','192.168.5.3','Alicia Martinez','amartinez@gmail.com','Barcelona','654654654')";
    $sql_prueba .= "INSERT INTO `phishing`(`id`, `fecha`, `ip`, `nombreapellido`, `email`, `provincia`, `telefono`) VALUES ('2','2025-03-28 11:12:12','192.168.8.4','Natalia Medina','nmedina@gmail.com','Burgos','632132121')";
    $sql_prueba .= "INSERT INTO `phishing`(`id`, `fecha`, `ip`, `nombreapellido`, `email`, `provincia`, `telefono`) VALUES ('3','2025-03-28 11:12:12','192.168.8.4','Paco Alvarez','palvarez@gmail.com','Málaga','987654321')";

    $Resultado= mysqli_multi_query($conn, $sql_prueba);

    if ($Resultado)
    {
        echo "Se han añadido correctamente los datos de prueba";
        
    } 
    else 
    {
        echo "Error: " . $sql_prueba . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>



