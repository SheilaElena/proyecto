<!-- CONEXION -->
<?php

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


/*       session_start();

    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";
    
    // Creamos la conexion y seleccionamos la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }   */
      
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opciones de Gestión</title>
            <!-- Link hacia el archivo de estilos css -->
            <link rel="stylesheet" href="../css/estilo2.css">

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
            <h1>Phishing</h2>
            <h2>¿Dónde quieres acceder?</h2>
            <div class="options">

                <!-- Card 1 -->
                <div class="card">
                    <i class="fa-solid fa-chart-pie"></i>
                    <i class="fa-solid fa-chart-line"></i>
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    <i class="fa-solid fa-chart-column"></i>
                    <h3>Resultados base de datos</h3>
                    <p>Mostrar por pantalla todos los registros de la base de datos de la campaña de phishing.</p>
                    <a href="bbddp.php" class="btn">HTML</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <i class="fa-solid fa-info"></i>
                    <h3>Campaña</h3>
                    <p>¿Cómo se ha hecho la campaña?</p>
                    <a href="campana.php" class="btn">USB</a>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <i class="fa-solid fa-file-lines"></i>
                    <i class="fa-solid fa-keyboard"></i>
                    <i class="fa-regular fa-file-lines"></i>
                    <h3>Keylogger</h3>
                    <p>¿Qué script de keylogger utilizamos para poder "robar" los datos?</p>
                    <a href="scriptp.php" class="btn">No sé que poner</a>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

        <!-- Link a JavaScript -->
        <script src="../JS/traducciones.js"></script>
    </body>
</html>
