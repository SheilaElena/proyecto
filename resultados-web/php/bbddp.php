<!-- CONEXION -->
<?php

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
        <meta charset="utf-8">
        <title>Listado Especialista</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">


        <!--<script src="script_listado.js" defer></script>-->
        
            <!-- Link hacia el archivo de estilos css -->
            <link rel="stylesheet" href="../css/estilo.css">

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

        <!-- Listado de especialistas -->
        <div class="titulos">Resultados base de datos</div>
        <div id="fondo_listado">
            <?php
            $sql = "SELECT E.Nombre_Especialista, E.Apellido_Especialista, ES.Especialidad_Especialista, E.Cuota_Especialista, E.DNI_Especialista
                    FROM ESPECIALISTAS E
                    JOIN ESPECIALISTA_ESPECIALIDAD EE ON E.ID_Especialista = EE.ID_Especialista_EspeEspe
                    JOIN ESPECIALIDAD ES ON EE.ID_Especialidad_EspeEspe = ES.ID_Especialidad";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) { // Si encuentra resultados
                $Final = 0;
                $row = mysqli_fetch_assoc($result);
                while ($row) {
                    $Esp_Anterior = $row['Nombre_Especialista'];
                    $DNI_Especialista = $row['DNI_Especialista']; // Guarda el DNI antes de avanzar el puntero
                    echo '<div class="especialista-contenedor">';
                        echo '<h5>Especialista: ' . $row['Nombre_Especialista'] . ' ' . $row['Apellido_Especialista'] . '</h5>';
                        echo '<p>Cuota: ' . $row['Cuota_Especialista'] . '€</p>';
                        echo '<ul>';
                            // Agrupar especialidades por especialista
                            $i = 1;
                            while ($row && $Esp_Anterior == $row['Nombre_Especialista']) {
                                echo '<li>Especialidad ' . $i . ': ' . $row['Especialidad_Especialista'] . '</li>';
                                $Final++;
                                $i++;
                                $row = mysqli_fetch_assoc($result); // Avanzar a la siguiente fila
                            }
                        echo '</ul>';
                        // Formulario para enviar el DNI por POST
                        echo '<form action="ReservarCita.php" method="POST">';
                            echo '<input type="hidden" name="DNI_Especialista" value="' . $DNI_Especialista . '">';
                            echo '<input type="submit" class="Añadir3" value="Pedir Cita">';
                        echo '</form>';
                    echo '</div>';
                }
            } else {
                echo '<p>No se encontraron especialistas.</p>';
                if (!$result) {
                    die("Error en la consulta: " . mysqli_error($conn));
                }
            }
            ?>

        </div>

        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

        <!-- Link a JavaScript -->
        <script src="../JS/traducciones.js"></script>

    </body>
</html>