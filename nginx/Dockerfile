FROM nginx:latest

# Copiar la configuración principal de nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Copiar los archivos de configuración de los sitios
COPY conf.d/ /etc/nginx/conf.d/

EXPOSE 80
