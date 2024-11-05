# Guía para alojar tu sitio web en InfinityFree

## 1. Crear tu cuenta en InfinityFree

1. Primero, se va a [InfinityFree.net](https://www.infinityfree.net/).
2. Regístrate con tu dirección de correo electrónico y crea una contraseña.
3. Confirma la cuenta usando el enlace que te enviarán por correo.

## 2. Crear un sitio web

1. Una vez dentro, inicia sesión en InfinityFree.
2. En el panel de usuario, busca y haz clic en **"Create Account"** o **"New Account"**.
3. Elige un nombre de dominio para tu sitio web. Puedes usar un subdominio gratuito de InfinityFree o agregar uno propio que ya tengas.
4. Completa el formulario de creación y haz clic en **"Create"** para crear tu sitio.

## 3. Configurar el acceso a archivos (FTP)

Para subir los archivos al servidor, se usara un cliente FTP como **FileZilla**.

1. En el **cPanel** de tu cuenta de InfinityFree, busca la sección **"FTP Accounts"**.
2. Allí, encontrarás los datos que necesitas:
   - **Host**
   - **Nombre de usuario y contraseña**
   - **Puerto**
3. Abre FileZilla, introduce estos datos en los campos correspondientes y conéctate a tu servidor.

## 4. Subir los archivos al servidor

1. Una vez conectado en FileZilla, navega a la carpeta `htdocs` en el lado derecho (que representa tu servidor).
2. Luego, arrastra los archivos de tu proyecto web (HTML, CSS, JS, imágenes, etc.) desde tu computadora (en el lado izquierdo) hacia la carpeta `htdocs`.
3. Deja que se suban todos los archivos.

## 5. Configuración de la base de datos

Si tu proyecto usa una base de datos, puedes configurarla de esta manera:

1. Ve al **cPanel** de InfinityFree y busca la sección **"MySQL Databases"**.
2. Crea una base de datos nueva introduciendo el nombre que desees.
3. Anota los datos de conexión de la base de datos:
   - **Nombre de la base de datos**
   - **Usuario de la base de datos**
   - **Contraseña de la base de datos**
   - **Host de la base de datos** (revisa el cPanel para obtener esta información específica)
4. Después, ajusta tu archivo de conexión en el código del proyecto con estos datos.
