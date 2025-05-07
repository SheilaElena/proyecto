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
        <title>Bases de datos - Imagen</title>
        
        <!-- Link favicon -->
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

        <!-- Link para que funcionen los FA FA -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Encapsulado CSS -->
        <link rel="stylesheet" href="../css/basesdedatos.css">

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
        <hr> <!-- SEPARADOR-->

        <div class="listado-citas">
            <h1>Resultados de la base de datos</h1>
          <!--  <div class="underline"></div> -->
            <div id="contenedor-listado">
                <?php

                    /* Sentencias preparadas para evitar inyecciones SQL */
                    $sql_todo = "SELECT * FROM keylogger WHERE tipo = ?";
                    $stmt = $conn->prepare($sql_todo);
                    $tipo = 'I';
                    $stmt->bind_param("s", $tipo);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if (mysqli_num_rows($result) > 0) { // Si encuentra resultados
                        $Final = 0;
                        $row = mysqli_fetch_assoc($result);
                
                        while ($row) { 
                            $IP_Anterior = $row['ip'];
                            $ul_id = 'info_' . $Final; // ID único para el <ul>


                            echo '<div class="cita-contenedor">';
                                
                                //Info especialista
                                echo '<div class="underline"></div>';

                                /* Para prevenir XSS (Cross-Site Scripting) */
                                echo '<h5>IP: ' . htmlspecialchars($row['ip'], ENT_QUOTES, 'UTF-8') . '</h5>';                                echo '<div class="icono-separador">';
                                    echo '<i class="fa fa-user" aria-hidden="true"></i>';
                                echo '</div>';
                                
                                // Botón para mostrar/ocultar la información
                                echo '<button onclick="toggleUl(\''.$ul_id.'\', this)" class="boton-toggle">Mostrar información</button>';


                                echo '<ul id="'.$ul_id.'" style="display: none;">'; // Ocultar solo el <ul>

                                    // Agrupar especialidades por especialista

                                    $i = 1;
                                    while ($row && $IP_Anterior == $row['ip']) {
                                        echo'<br>';
                                        echo '<div class="cajita">';
                                        
                                        /* Para prevenir XSS (Cross-Site Scripting) */
                                        echo '<li>Realizado el día: ' . htmlspecialchars($row['fecha'], ENT_QUOTES, 'UTF-8') . '</li>';
                                        echo '<p>Tecla pulsada: ' . htmlspecialchars($row['tecla'], ENT_QUOTES, 'UTF-8') . '</p>';

                                        echo '</div>';     
                                        
                                    
                                        /*Punto de control*/
                                        $Final++;
                                        $i++;
                                        $row = mysqli_fetch_assoc($result); // Avanzar a la siguiente fila
                                    }
                                echo '</ul>';
                            echo '</div>';
                        }
                    
                    
                    } else {
                        echo '<p>No hay ningun registro en la base de datos.</p>';
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
