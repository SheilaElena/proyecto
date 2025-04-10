<!-- CONEXION -->
<?php

    session_start();

    $servername = "localhost";
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
        <title>Scripts - Imagen</title>
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/scripts.css">

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

    <!-- SOBRE EL TRABAJO -->
    <section id="SobreNosotras">
        <div class="globalnosotras">
            <div class="subapartados">
                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="primero">
                    <h2 class="SobreNosotrosTit">Scripts necesarios</h2>
                    <h3 class="textoinicio">¿Cuántos scripts se necesitan?</h3>
                </div>
            </div>
            <div class="subapartados">
                <div class="col-lg-12">
                    <ul class="todaslaspreguntas">
                        <li>
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">Keylogger.py</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textos_quienessomos"> Ofrecemos la opción de poder escoger por cuenta propia el especialista que más llame la atención pero, si tiene alguna duda al respecto,
                                                                    no se preocupe, también hay un apartado para poder contactar con nosotros y que te podamos aconsejar. 
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="otrolado">
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">Ducky Script</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textos_quienessomos">En nuestra empresa, ofrecemos una gran variedad de servicios que pueden escoger cada uno de nuestros clientes, pudiendo dar aquello que buscan a cada
                                        uno de nuestros clientes. 
                                    </p>
                                    <p class="textos_quienessomos"> Ofrecemos un servicio autónomo, donde el cliente es el encargado de reservar la cita con el especialista que desee y del servicio que más prefiera.
                                                                Aunque, si surje algún problema, como hemos mencionado anteriormente, siempre podrá contactar y estaremos encantados de poder ayudarle. 
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">El otro</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textos_quienessomos"> Somos una pequeña empresa que busca ayuda a toda la población que desea encontrar ayuda y no sabe a quién acudir. Ofrecemos velocidad,
                                        calidad y apoyo durante el proceso de estancia con nosotros.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="otrolado">
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">Autoejecutable</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textos_quienessomos">En n. 
                                    </p>
                                    <p class="textos_quienessomos"> Ofrecemos 
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr class="highlight"/> <!-- SEPARADOR-->


    <!-- ESTILOS DE COACHING-->

    <section id="services" class="apartados" id="apartados">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">Keylogger.py</h2>
                        <h3 class="expl_tiposcoaching" >A continuación, encontrarás un lisatdo de los diferentes
                                servicios de coaching que podrás encontrar en nuestra empresa.</h3>
                    </div>
                </div>
            </div> <!-- info_coaching -->
        </section>

        <hr class="highlight"/> <!-- SEPARADOR-->

        <section id="services" class="apartados" id="apartados">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">Bash Bunny</h2>
                        <h3 class="expl_tiposcoaching" >A continuación, encontrarás un lisatdo de los diferentes
                                servicios de coaching que podrás encontrar en nuestra empresa.</h3>
                    </div>
                </div>
            </div> <!-- info_coaching -->
        </section>

        <hr class="highlight"/> <!-- SEPARADOR-->

        <section id="services" class="apartados" id="apartados">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">El otro</h2>
                        <h3 class="expl_tiposcoaching" >A continuación, encontrarás un lisatdo de los diferentes
                                servicios de coaching que podrás encontrar en nuestra empresa.</h3>
                    </div>
                </div>
            </div> <!-- info_coaching -->
        </section>

        <hr class="highlight"/> <!-- SEPARADOR-->

        <section id="services" class="apartados" id="apartados">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">Autoejecutablee</h2>
                        <h3 class="expl_tiposcoaching" >A continuación, encontrarás un lisatdo de los diferentes
                                servicios de coaching que podrás encontrar en nuestra empresa.</h3>
                    </div>
                </div>
            </div> <!-- info_coaching -->
        </section>

        <hr class="highlight"/> <!-- SEPARADOR-->

        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>