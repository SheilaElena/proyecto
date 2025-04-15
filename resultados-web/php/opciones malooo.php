<?php
ob_start();
session_start();

    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";

    // Creamos la conexion y seleccionamos la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

    // Construir la consulta SQL
    $sql = "SELECT * FROM usuario WHERE nombre  = '" . $_SESSION['nombre'] . "';";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $sql);

    // Validar el resultado de la consulta
    if (!$result) {
        die("Error en la consulta SQL: " . mysqli_error($conn));
    }

    // Obtener los datos
    $row = mysqli_fetch_assoc($result);

    // Verificar si se encontraron resultados
    if (!$row) {
        die("Error: No se encontraron datos para el nombre proporcionado.");
    }


  /*

    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";
    
*/

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opciones a escoger</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Link favicon -->
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="../css/opciones.css"> <!-- Archivo CSS externo -->

    </head>
    <body id="gestion-especialistas">
        <!--CABECERA-->
        <div id="header">
            <div class="logo">
                <img src="../img/logo.png" alt="COACHING SL">
            </div>
            <nav>
               <!--
                <ul>
                    <?php

                    if ($_SESSION['Tipo'] == "admin") { // Si es Admin, mostrar opciones adicionales
                        echo "<li><a href='../index.php'><i class='fa fa-home'></i> <span data-translate='inicio'>Inicio</span></a></li>";
                        echo "<li><a href='ComoTrabajamos.php'><i class='fa fa-briefcase'></i> <span data-translate='como_trabajar'>¿Quiénes somos?</span></a></li>";
                        echo "<li><a href='FuncionesAdmin.php'><i class='fa fa-address-book'></i><span data-translate='ADMIN'>Admin</span></a></li>";
                        echo '<br>';
                    }

                    ?>
                   
                </ul>
                -->
            </nav>
        </div>

        <!-- FUNCIONES OPCIONES -->
        <div id="FuncionesOpciones">
            <h2><?php echo "¡Bienvenida " . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "!"; ?></h2>
            
            <div class="opciones">
                <!-- Opción 1 -->
                <div class="opcion-caja">
                    <i class="fa-solid fa-fish"></i>
                    <h3>Phishing</h3>
                    <p>Campaña de phishing para ejecutar un keylogger desde código HTML</p>
                    <a href="phishing.php">Más información</a>
                </div>

                <!-- Opción 2 -->
                <div class="opcion-caja">
                    <i class="fa-brands fa-usb"></i>
                    <h3>Bash bunny</h3>
                    <p>A partir del USB, ejecutar el script automáticamente en el ordenador víctima.</p>
                    <a href="bashbunny.php">Más información</a>
                </div>

                <!-- Opción 3 -->
                <div class="opcion-caja">
                    <i class="fa-regular fa-image"></i>
                    <h3>Imagen</h3>
                    <p>A partir de una imagen, ejecutar el keylogger en la víctima sin que se de cuenta.</p>
                    <a href="imagen.php">Más información</a>
                </div>

                <!-- Opción 4 -->
                <div class="opcion-caja">
                    <i class="fa-solid fa-file-pdf"></i>
                    <h3>PDF</h3>
                    <p>Cómo se podría realizar un aataque con keylogger a partir de un pdf.</p>
                    <a href="pdf.php">Más información</a>
                </div>

                <!-- Opción 5 -->
                <div class="opcion-caja">
                    <i class="fa-regular fa-thumbs-up"></i>
                    <h3>Real</h3>
                    <p>¿Cómo sería un keylogger con persistencia, listo para no ser detectado?</p>
                    <a href="real.php">Más información</a>
                </div>

            </div>
        </div>

        <!-- PIE DE PÁGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

        <!-- Link a JavaScript -->
        <script src="../JS/traducciones.js"></script>
    </body>
</html>
