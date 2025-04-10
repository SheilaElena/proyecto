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


        <hr> <!-- SEPARADOR-->

        <div class="listado-citas">
            <h1>Resultados de la base de datos</h1>
          <!--  <div class="underline"></div> -->
            <div id="contenedor-listado">
                <?php
                    $sql_todo="SELECT * FROM keylogger where tipo='I';";
                
                    $result = mysqli_query($conn, $sql_todo);

                    if (mysqli_num_rows($result) > 0) { // Si encuentra resultados
                        $Final = 0;
                        $row = mysqli_fetch_assoc($result);
                
                        while ($row) { 
                            $IP_Anterior = $row['ip'];
                            echo '<div class="cita-contenedor">';
                                
                                //Info especialista
                                echo '<div class="underline"></div>';

                                echo '<h5>IP: '.$row['ip'].' </h5>';
                                echo '<div class="icono-separador">';
                                echo '<i class="fa fa-user" aria-hidden="true"></i>';
                                echo '</div>';
                                
                                echo '<ul>';
                                    // Agrupar especialidades por especialista
                                    $i = 1;
                                    while ($row && $IP_Anterior == $row['ip']) {
                                        echo'<br>';

                                        echo '<div class="cajita">';

                                        /*Info especialidades*/
                                        echo '<li>Realizado el dia: '.$row['fecha'].'</li>';

                                        /*Info cliente*/

                                        echo '<h5>Tecla pulsada: '.$row['tecla'].'</h5>';
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

        <hr> <!-- SEPARADOR-->

        <!-- PIE DE PAGINA -->
        <footer>
            Todos los derechos reservados | Coaching SL Copyright © 2024
        </footer>

    </body>
</html>
