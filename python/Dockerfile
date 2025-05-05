# Exportamos la imagen estable más reciente

FROM python:latest


# Instalamos tzdata para soportar zonas horarias como Europe/Madrid

RUN apt-get update && apt-get install -y tzdata


# Fijamos la zona horaria manualmente para evitar prompts

ENV TZ=Europe/Madrid


# Copiamos los archivos de la aplicación

WORKDIR /app

COPY . /app


# Instalamos las dependencias de Python

RUN pip install --no-cache-dir -r requirements.txt

# O bien puedes usar esta si no tienes requirements.txt:

# RUN pip install --no-cache-dir flask mysql-connector-python


# Exponemos los puertos que pueda usar Flask

EXPOSE 5000

EXPOSE 5001


# Comando para iniciar la aplicación

CMD ["python", "app.py"]

