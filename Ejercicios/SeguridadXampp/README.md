# Pasos para securizar el usuario root

1. Ir al phpmyadmin a la sección de cuentas de usuario

2. Pulsar en "Editar privilegios" del usuario root de localhost

3. Ir a "Change password" y cambiarlo a algo adecuado

4. Despues de que de error

5. Ir al fichero llamado "config.inc.php" en la siguiente ruta("/opt/lampp/phpmyadmin/") y modificar lo siguiente en las linea donde esta el user, password y auth_type cambiarlo a como esta en la foto
   ![Image](./images/3_1.png)

# Pasos para crear un usuario nuevo

1. Ir al phpmyadmin y hacer un login con root

2. Ir a cuentas de usuarios y hacer click en donde pone "Agregar cuenta de usuario"

3. Rellenar el nombre y la contraseña con lo que se crea adecuado

4. Cambiar el "%" poner "localhost" en el nombre del host

5. Hacer click en "Crear base de datos con el mismo nombre y otorgar todos los privilegios" más abajo darle a "Datos" y "Estructuras", y algo más que se crea conveniente y hacer click en "Continuar" abajo del todo.
