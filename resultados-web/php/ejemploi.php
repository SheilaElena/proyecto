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
        <title>Ejemplo - Imagen</title>
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/ejemplo.css">

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
                        echo "<li><a href='imagen.php'><i class='fa-regular fa-image'></i> <span data-translate='imagen'>Imagen</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

        <main>
    <!-- SOBRE EL TRABAJO -->
    <section id="SobreNosotras">
        <div class="globalnosotras">
            <div class="subapartados">
                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="primero">
                    <h2 class="SobreNosotrosTit">Imagen</h2>
                    <h3 class="textoinicio">¿Cómo se implementaria? A continuación, un ejemplo sobre el método de ataque</h3>
                </div>
            </div>
        </div>
    </section>
        <hr class="highlight"/> <!-- SEPARADOR-->

    <!-- DIRECCIÓN -->
            <section class="apartados" id="apartados">
                    <div class="info_ubi_grande">
                        <div class="info_ubi">
                            <h3 class="titulo_apartados">Ubicación</h3>
                            <p class="calle"> Carrer de Llança, 51<br /> L'Eixample, 08015, Barcelona</p>
                            <p class="calle"> Calle de Alcalá, 472<br /> San Blas-Canillejas, 28027 Madrid</p>
                            <p class="RRSS">INSTAGRAM</p>
                            <p class="correo">contacto: coachingslsants@gmail.com </p>
                        </div>
                        <div class="horarios">
                            <h3 class="titulo_apartados">Horario</h3>
                            <p class="entre-semana"> Lunes a Viernes <br/> 8:00 - 13:00 <br/> 15:00 - 21:00 </p>
                            <p class="fin-semana"> Sabados y Domingos <br/> Cerrado </p>
                        </div>
                    </div>
                </section>

        <hr class="highlight"/> <!-- SEPARADOR-->
</main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>