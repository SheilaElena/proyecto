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
                        echo "<li><a href='arqsistema.php'><i class='fa-solid fa-sitemap'></i><span data-translate='phishing'>Arquitectura del sistema</span></a></li>";
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
                    <h2 class="ApartadoCoachingTit">Scripts necesarios</h2>
                </div>
            </div>

            <hr class="highlight"/> <!-- SEPARADOR-->

<!-- DOCKER-COMPOSE.YML -->
            <div class="coaching_columnas">
                <div class="cajatiposcoaching">
                    <div class="fafa">
                        <i class="fa-solid fa-globe lock-icon_2"></i>
                    </div>
                    <h4 class="coaching">docker-compose.yml</h4>
                    <p class="expl_tiposcoaching">
                    </p>

                </div>

<!-- INITDB -->
                <div class="cajatiposcoaching">
                <div class="fafa">
                    <i class="fa-solid fa-users lock-icon_2"></i>
                </div>
                    <h4 class="coaching">Initdb</h4>
                    <p class="expl_tiposcoaching"> Esta carpeta contiene el script SQL que se encarga de crear a la base de datos bd_keyloggers. Después hemos creado un usuario llamado sea, con la contraseña proyectose@, que tiene todos los permisos sobre esta base de datos. 
                        <br><br>
                        Así nos aseguramos de que nuestros programas puedan acceder y modificar los datos sin necesidad de usar el usuario root, que sería menos seguro, porque sería predecible ese usuario por defecto.
                        <br><br>
                        Aquí también se definen las siguientes tablas:<br>
                        - keylogger (registra tecla, IP, fecha y tipo: B/I/P/R).<br>
                        - phishing (datos de la campaña de phishing).<br>
                        - usuario (acceso a la página de resultados).<br>
                    </p>
                </div>

<!-- NGINX -->
                <div class="cajatiposcoaching">
                    <div class="fafa">
                    <i class="fa-regular fa-envelope lock-icon_2"></i>
                    </div>
                    <h4 class="coaching">nginx</h4>
                    <p class="expl_tiposcoaching">La carpeta nginx contiene la configuración del servidor web, que permite servir tanto la web de phishing (phishing-web.conf) en www.informacionifp.org como la web de resultados (resultados-web.conf) en www.resultados.uk. 
                        <br>Además, gracias al túnel de Cloudflare, estas páginas se pueden visitar desde fuera de la red local usando HTTPS, sin necesidad de abrir puertos en el router ni hacer configuraciones de red complicadas.
                        <br><br>
                        En el archivo nginx.conf simplemente indicamos que se incluyan todos los archivos de configuración que haya dentro de la carpeta conf.d, que es donde hemos definido las reglas específicas para cada página. 
                        <br><br>
                        Dentro de conf.d tenemos dos archivos:<br>
                        - phishing-web.conf, que configura cómo se sirve la página de phishing.<br>
                        - resultados-web.conf, que hace lo mismo para la web donde mostramos los datos recogidos del proyecto.
                    </p>
                </div>

            <!-- PYTHON -->

            <div class="cajatiposcoaching">
                <div class="fafa">
                    <i class="fa-solid fa-users lock-icon_2"></i>
                </div>
                    <h4 class="coaching">python</h4>
                    <p class="expl_tiposcoaching"> En esta carpeta hemos preparado todo el backend que se encarga de recibir los datos que recogemos en el proyecto, tanto los del phishing como los de los distintos keyloggers que hemos utilizado.
                    <br>
                    El archivo principal es app.py, que es una aplicación hecha con Flask.  <br>
                    Flask es un framework (conjunto de herramientas y componentes predefinidos que facilitan el desarrollo de aplicaciones o proyectos) muy sencillo de Python que sirve para crear APIs de manera rápida. 
                    <br><br>
                    Lo que hemos hecho en app.py ha sido crear varias rutas, que se encargan de recibir los datos que son enviados de diferentes maneras, las rutas son: <br>
                        <br>
                    /guardar-formulario <br>
                    /guardar-bashbunny <br>
                    /guardar-real <br>
                    /guardar-img
                    </p>
                    </div>

<!-- PHISHING-WEB -->

                <div class="cajatiposcoaching">
                <div class="fafa">
                    <i class="fa-solid fa-users lock-icon_2"></i>
                </div>
                    <h4 class="coaching">phishing-web</h4>
                    <p class="expl_tiposcoaching"> Esta carpeta contiene la página web que hemos creado para simular un ataque de phishing dentro del proyecto, como nos gusta remarcar, es que siempre es con fines educativos y controlado por nuestro profesorado. 
                    <br><br>
                        Lo que hemos hecho ha sido diseñar una copia casi idéntica a una de las páginas reales de nuestro instituto, cuidando tanto el aspecto visual como la estructura para que resultase lo más creíble posible.
                    </p>
                </div>

<!-- PHP-FORM -->
                <div class="cajatiposcoaching">
                    <div class="fafa">
                    <i class="fa-regular fa-envelope lock-icon_2"></i>
                    </div>
                    <h4 class="coaching">php-fpm</h4>
                    <p class="expl_tiposcoaching">En esta carpeta hemos preparado todo lo necesario para que nos funcione PHP-FPM, pero solo lo hemos usado en una parte concreta del proyecto, en la página web donde mostramos los resultados que hemos recogido, la de www.resultados-web.org.
                    </p>
                </div>
                </div> <!-- coaching_columnas -->

                <!-- RESULTADOS-WEB -->
                 <div class="solitaria">
                <div class="cajatiposcoaching">
                    <div class="fafa">
                    <i class="fa-regular fa-envelope lock-icon_2"></i>
                    </div>
                    <h4 class="coaching">resultados-web</h4>
                    <p class="expl_tiposcoaching">Esta carpeta es donde hemos creado la página que usamos para mostrar todos los resultados obtenidos durante nuestro proyecto. Aquí enseñamos los datos que hemos ido capturando a través de la página de phishing y los distintos keyloggers que utilizamos.
                    <br><br>
                    Esta web la hicimos con PHP porque está pensada para conectarnos a la base de datos y mostrar la información de forma dinámica.<br>
                    <br>
                    El archivo principal es index.php, que es el que se carga cuando se accede a la página. Desde ahí se muestra la página de inicio, con un login para iniciar sesión tanto mi compañera como yo,  estos datos están guardados directamente de la base de datos. 
                    <br><br>
                    Como es evidente para una página así, utilizamos una carpeta css que contiene los estilos de la página, y la carpeta img guarda las imágenes que usamos en la web. Algunas son de fondo, otras de iconos e incluido de logotipos.
                    <br><br>
                    En cuanto a la carpeta php esta guarda diferentes páginas de PHP separadas, que ayudan a que el index.php no tenga todo el código junto. Lo hicimos así para tenerlo más organizado y que fuera más fácil de modificar si hacía falta.
                    <br>
                    </p>
                </div>
            </div>


        </div> <!-- info_coaching -->

    <hr class="highlight"/> <!-- SEPARADOR-->


</main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>