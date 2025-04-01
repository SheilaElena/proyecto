FROM php:8.2-fpm

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar configuración de PHP-FPM si tienes una personalizada
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

# Asegurar permisos
RUN chown -R www-data:www-data /var/www/html

# Definir el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto 9000 para PHP-FPM
EXPOSE 9000

# Ejecutar PHP-FPM
CMD ["php-fpm"]
