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
        <link rel="stylesheet" href="../css/campana.css">

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
                        echo "<li><a href='phishing.php'><i class='fa-solid fa-fish'></i> <span data-translate='phishing'>Phishing</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

        <main>
<section>
        <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                    <hr class="highlight"/> <!-- SEPARADOR-->
                        <h2 class="ApartadoCoachingTit">Campaña de phishing</h2>
                        <h3 class="textoinicioCoaching" >A continuación, mostraremos información sobre la campaña de phishing que realizamos.</h3>
                    </div>
                </div>

                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="coaching_columnas">
                    <div class="cajatiposcoaching">
                    <div class="fafa">
                            <i class="fa-solid fa-globe lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Dominio: informacionifp.org</h4>
                        <p class="expl_tiposcoaching">La página web que utilizamos para realizar la campaña de phishing fue una réplica del apartado de "ASIR con perfil en Ciberseguridad en Barcelona".
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                    <div class="imagenes">
                        <img src="../img/informacionifp.png" alt="teclado">
                        </div>
                    </div>


                    <div class="cajatiposcoaching">
                        <div class="imagenes">
                        <img src="../img/asir.png" alt="teclado">
                        </div>
                    </div>

                    <div class="cajatiposcoaching">
                    <div class="fafa">
                        <i class="fa-solid fa-users lock-icon_2"></i>
                    </div>
                        <h4 class="coaching">Usuarios víctimas: ASIR con perfil en ciberseguridad de primer año</h4>
                        <p class="expl_tiposcoaching"> Para la obtención de los diversos correos de nuestras víctimas, tuvimos que realizar OSINT de cada uno de ellos.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="fafa">
                        <i class="fa-regular fa-envelope lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Distribución de ataque: renovaciones.ifp@gmail.com</h4>
                        <p class="expl_tiposcoaching">El correo que enviamos a las víctimas fue un correo haciéndonos pasar cómo coordinación,
                            los cuales enviaban este correo para informar que se abrían las inscripciones para el acceso del curso ASIR 2, año 2025 - 2026.
                            En este recordaban que cualquier usuario se debía inscribir en el formulario que aparecía a continuación en el correo.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                    <div class="imagenes">
                        <img src="../img/correo.png" alt="teclado">
                        </div>
                    </div>

                </div> <!-- coaching_columnas -->
            </div> <!-- info_coaching -->

        <hr class="highlight"/> <!-- SEPARADOR-->

</main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>