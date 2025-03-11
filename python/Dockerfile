#Exportamos la imagen estable mas reciente
FROM python:latest

# Copiamos los archivos de la aplicación (fijate en las rutas)
WORKDIR /app
COPY . /app

# Instala dependencias a partir del txt de antes
RUN pip install --no-cache-dir -r requirements.txt
# O bien puedes usar la siguiente sentencia que hace lo mismo:
# RUN pip install --no-cache-dir flask mysql-connector-python

# Exponemos el puerto de Flask
EXPOSE 5000
# EXPOSE 5001

# Comando para iniciar la aplicación
CMD ["python", "app.py"]


# FROM php:8.1-fpm

# Instalar extensiones necesarias
# RUN apt-get update && apt-get install -y \
#    libpng-dev \
#    libjpeg-dev \
#    libfreetype6-dev \
#    libonig-dev \
#    libzip-dev \
#    unzip \
#    && docker-php-ext-install mysqli pdo pdo_mysql gd mbstring zip

# Copiar la configuración de PHP (si tienes un php.ini personalizado)
# COPY php.ini /usr/local/etc/php/

# Copiar la aplicación al contenedor
# COPY . /var/www/html/

# Establecer permisos
# RUN chown -R www-data:www-data /var/www/html \
    # && chmod -R 755 /var/www/html

# EXPOSE 9000
# CMD ["php-fpm"]