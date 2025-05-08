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

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opciones a escoger</title>
            <!-- Link hacia el archivo de estilos css -->
            <link rel="stylesheet" href="../css/opciones.css">

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
                        echo "<li><a href='../index.php'><i class='fa fa-home'></i> <span data-translate='inicio'>Salir</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

    <main>
        <!--Cajas de opciones -->
        <div id="management-section">
            <h1><?php echo "¡Bienvenida " . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "!"; ?></h1>
            <div class="options">

                <!-- Card 1 -->
                <div class="card">
                    <i class='fa-solid fa-sitemap'></i>
                    <h3>Arquitectura del sistema</h3>
                    <p>¿Cómo es la configuración del servidor?</p>
                    <a href="arqsistema.php">Más información</a>
                </div>

            </div>
            <div class="options second-row">
                <!-- Card 2 -->
                <div class="card">
                    <i class="fa-solid fa-fish"></i>
                    <h3>Phishing</h3>
                    <p>Campaña de phishing para ejecutar un keylogger desde código HTML</p>
                    <a href="phishing.php">Más información</a>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <i class="fa-regular fa-image"></i>
                    <h3>Imagen</h3>
                    <p>A partir de una imagen, ejecutar el keylogger en la víctima sin que se de cuenta.</p>
                    <a href="imagen.php">Más información</a>
                </div>
               
                <!-- Card 4 -->
                <div class="card">
                    <i class="fa-brands fa-usb"></i>
                    <h3>Bash bunny</h3>
                    <p>A partir del USB, ejecutar el script automáticamente en el ordenador víctima.</p>
                    <a href="bashbunny.php">Más información</a>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <i class="fa-regular fa-thumbs-up"></i>
                    <h3>Real</h3>
                    <p>¿Cómo sería un keylogger con ilimitado con persistencia?</p>
                    <a href="real.php">Más información</a>
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
