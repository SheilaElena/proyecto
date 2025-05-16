# PROYECTO ASIX 2

# Instrucciones para Acceder a la Web Local

Sigue estos pasos para poner en funcionamiento nuestra web de forma local:

## 1. Descargar el Proyecto

Descarga el archivo del repositorio en GitHub.

> Asegúrate de tener Git instalado o descarga el archivo ZIP directamente desde la página del repositorio.

## 2. Descomprimir el Archivo

Descomprime el archivo descargado en una carpeta de tu elección.

## 3. Acceder a la Carpeta `resultados-web`

Una vez descomprimido, navega hasta la carpeta llamada `resultados-web`.

## 4. Importar la Base de Datos

Importa la base de datos que proporcionamos en tu gestor de base de datos (por ejemplo, phpMyAdmin o MySQL Workbench).

> Asegúrate de tener el servidor de base de datos corriendo en tu máquina (MySQL o MariaDB).

## 5. Acceder a `localhost`

Abre tu navegador y accede a `http://localhost/` o al nombre del host local correspondiente.

## 6. Modificar Archivos PHP para Conexión Local

Es necesario modificar cada uno de los archivos PHP para que funcionen correctamente en un entorno local:

- En todos los archivos PHP donde se establece una conexión a la base de datos, localiza el parámetro `servername`.
- Modifícalo para que apunte a `localhost` en lugar de un servidor externo.

Ejemplo:

```php
// Antes:
    $servername = "mysql-db";

// Después:
  $servername = "localhost";
```

## 7. Modificar el Archivo index.php
Es importante modificar el archivo index.php. Por defecto, este archivo redirige directamente a la página principal y puede impedir el acceso a otras carpetas o rutas del proyecto.

Qué hacer:
Revisa si hay redirecciones automáticas o rutas absolutas que bloqueen el acceso a subdirectorios.

Asegúrate de que el index.php permita la navegación y acceso al resto de carpetas y archivos necesarios para el funcionamiento del sistema (como php/migracion.php y los archivos de la carpeta GestionBD).

## 8. Ejecutar los Archivos de la Carpeta GestionBD
Dirígete a la carpeta GestionBD dentro del proyecto y ejecuta cada uno de los archivos PHP que contiene para establecer correctamente las conexiones necesarias.

## 9. Acceder a /php/migracion.php
En tu navegador, ve a la siguiente dirección:

```php 
http://localhost/php/migraciones.php
```
Este script realizará las migraciones necesarias para preparar el entorno.

## 10. Acceder a la Web
Una vez realizados todos los pasos anteriores, puedes abrir el archivo index.php desde tu navegador usando:

```php
http://localhost/index.php

```
¡Y ya puedes empezar a utilizar la web en tu entorno local!
