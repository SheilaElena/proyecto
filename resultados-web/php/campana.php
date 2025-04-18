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
      */
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

    
    <!-- SOBRE EL TRABAJO -->
    <section id="SobreNosotras">
        <div class="globalnosotras">
            <div class="subapartados">
                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="primero">
                    <h2 class="SobreNosotrosTit">Sobre nosotros</h2>
                    <h3 class="textoinicio">¿Quiénes somos y qué ofrecemos? A continuación, una pequeña explicación sobre nosotras</h3>
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
                                    <h4 class="titulos_quienessomos">¿Cómo trabajamos?</h4>
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
                                    <h4 class="titulos_quienessomos">Servicios que ofrecemos</h4>
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
                                    <h4 class="titulos_quienessomos">¿Quiénes somos?</h4>
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
                                <h4>CONFIA
                                    <br>EN
                                    <br>COACHING S.L.</h4>
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
                        <h2 class="ApartadoCoachingTit">Servicios que ofrecemos</h2>
                        <h3 class="textoinicioCoaching" >A continuación, encontrarás un lisatdo de los diferentes
                                servicios de coaching que podrás encontrar en nuestra empresa.</h3>
                    </div>
                </div>

                <div class="coaching_columnas">
                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-users lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Empresarial</h4>
                        <p class="expl_tiposcoaching">Este estilo se centra en mejorar el rendimiento de los equipos y líderes en el ámbito laboral,
                            fomentando habilidades como la toma de decisiones, liderazgo y resolución de conflictos.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-regular fa-face-smile lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching con Inteligencia Emocional</h4>
                        <p class="expl_tiposcoaching">Este estilo potencia la capacidad de reconocer, gestionar y utilizar emociones de
                            forma efectiva para lograr mejores resultados en las relaciones personales y profesionales.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-arrow-trend-up lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Ontológico</h4>
                        <p class="expl_tiposcoaching">Este estilo está enfocado en el ser y el lenguaje, busca transformar la manera en que
                            las personas interpretan la realidad para mejorar sus comportamientos y resultados.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-brain lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching PNL (Programación Neurolingüística) </h4>
                        <p class="expl_tiposcoaching">Este estilo trabaja con patrones de pensamiento, lenguaje y comportamiento para
                            reprogramar la mente y facilitar cambios positivos en diferentes áreas de la vida.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-star lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Personal</h4>
                        <p class="expl_tiposcoaching">Este estilo ayuda a las personas a alcanzar objetivos personales, superar bloqueos
                            emocionales y mejorar áreas de su vida como relaciones, confianza y bienestar.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-person-running lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Deportivo</h4>
                        <p class="expl_tiposcoaching"> Este estilo está diseñado para atletas y equipos, mejora el rendimiento físico
                            y mental, ayudando a superar límites, manejar la presión y alcanzar metas deportivas.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-thumbs-up lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Cognitivo</h4>
                        <p class="expl_tiposcoaching">Este estilo utiliza técnicas de la psicología cognitiva para identificar
                            y reestructurar pensamientos limitantes, promoviendo creencias más positivas y funcionales.
                        </p>
                    </div>

                    <div class="cajatiposcoaching">
                        <div class="">
                            <i class="fa-solid fa-person-praying lock-icon_2"></i>
                        </div>
                        <h4 class="coaching">Coaching Coercitivo</h4>
                        <p class="expl_tiposcoaching">Este estilo utiliza dinámicas intensas y directas para desafiar creencias
                            y hábitos, promoviendo cambios rápidos, aunque puede ser más controvertido por sus métodos.
                        </p>
                    </div>

                </div> <!-- coaching_columnas -->
            </div> <!-- info_coaching -->
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

        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>
