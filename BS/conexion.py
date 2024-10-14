import mysql.connector

# Configuración de la conexión
conexion = mysql.connector.connect(
    host="localhost",      # El host es localhost
    user="root",           # Nombre de usuario (por defecto es "root" en XAMPP)
    password="",           # Contraseña (por defecto está vacía en XAMPP)
    database="smed"  # Cambia esto por el nombre de tu base de datos
)

# Verifica si la conexión fue exitosa
if conexion.is_connected():
    print("Conexión exitosa a la base de datos")
else:
    print("Error en la conexión")

# Cierra la conexión
conexion.close()
