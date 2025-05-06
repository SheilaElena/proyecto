<?php
    ob_start(); // Habilita el buffer de salida
session_start();

$servername = "mysql-db";
$username = "sea";
$password = "proyectose@";
$database = "bd_keyloggers";

// Conexión
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}   
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phishing</title>
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
    
    <main>
        <!--Cajas de opciones -->
        <div id="management-section">
            <h1>Arquitectura del sistema</h2>
            <h2>¿Dónde quieres acceder?</h2>
            <div class="options">

                <!-- Card 1 -->
                <div class="card">
                    <i class="fa-solid fa-chart-pie"></i>
                    <h3>Explicación del servidor</h3>
                    <p>¿Que configuraciones tiene nuestro servidor?</p>
                    <a href="arqexpl.php" class="btn">Más información</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <i class="fa-solid fa-info"></i>
                    <h3>Configuración necesaria</h3>
                    <p>¿Que archivos han sido necesarios configurar para poder realizar este proyecto?</p>
                    <a href="arqconf.php" class="btn">Más información</a>
                </div>

            </div>
        </div>
</main>

        <!-- Footer -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>
