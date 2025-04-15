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
        <title>PDF</title>
            <!-- Link hacia el archivo de estilos css -->
            <link rel="stylesheet" href="../css/principales.css">

            <!-- Link favicon -->
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
            
            <!-- Fuentes y estilos -->
            <link href="https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <body>
        <!--CABECERA-->
        <div id="header">
            <div class="logo">
                <img src="../img/logo.png" alt="COACHING SL">
            </div>
            <nav>
                <ul>
                    <?php
                        echo "<li><a href='opciones.php'><i class='fa fa-home'></i> <span data-translate='inicio'>Inicio</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

        <!--Cajas de opciones -->
        <div id="management-section">
            <h1>PDF</h1>
            <h2>¿Dónde quieres acceder?</h2>
            <div class="options">

                <!-- Card 1 -->
                <div class="card">
                    <i class="fa-regular fa-circle-question"></i>
                    <h3>¿Cómo se haría?</h3>
                    <p>Cuál sería el proceso a seguir para poder ejecutar un keylogger escondido en un pdf.</p>
                    <a href="ejemplopdf.php" class="btn">Más información</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <i class="fa-solid fa-keyboard"></i>
                    <h3>¿Qué se necesita?</h3>
                    <p>Qué scritps serían necesarios para poder realizarlo.</p>
                    <a href="scriptpdf.php" class="btn">Más información</a>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>
