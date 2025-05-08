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
        <title>Campaña Phishing</title>
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/arqexpl.css">

        <!-- Link favicon -->
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

        <!-- Link para que funcionen los FA FA -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />        
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
<section>
    <div class="info_coaching">
            <!-- ARQUITECTURA DEL SISTEMA -->
            <div class="Centrar_info_coaching">
                <div class="col-lg-12 text-center">
                <hr class="highlight"/> <!-- SEPARADOR-->
                    <h2 class="ApartadoCoachingTit">Arquitectura del sistema</h2>
                    <h3 class="textoinicioCoaching" >A continuación, encontrarás la configuración del proyecto que hemos realizado.</h3>
                </div>
            </div>

            <hr class="highlight"/> <!-- SEPARADOR-->

            <div class="imagenarq">
                    <img src="../img/arqesquema.png" alt="teclado">
            </div>

            <!-- PÁGINAS WEBS -->
            <div class="Centrar_info_coaching">
                <div class="col-lg-12 text-center">
                <hr class="highlight"/> <!-- SEPARADOR-->
                    <h2 class="ApartadoCoachingTit">Páginas webs</h2>
                    <h3 class="textoinicioCoaching" >A continuación, encontrarás un poco más detallado las herramientas utilizadas en la creación de las páginas.</h3>
                </div>
            </div>

            <hr class="highlight"/> <!-- SEPARADOR-->

            <div class="imagenarq">
                    <img src="../img/esquemabf.png" alt="teclado">
            </div>

            <hr class="highlight"/> <!-- SEPARADOR-->

        </div> <!-- info_coaching -->

</main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>
