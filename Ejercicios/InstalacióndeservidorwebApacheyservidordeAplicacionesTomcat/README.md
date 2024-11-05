### 1. Arquitectura Web de tres capas

La arquitectura web de tres capas está compuesta por:

1. **Capa de Presentación**:
   - También conocida como "Front-end", es la interfaz con la que interactúa el usuario final. Presenta la información y recoge los datos de entrada. Usa tecnologías como HTML, CSS y JavaScript.
   
2. **Capa de Aplicación o Lógica de Negocio**:
   - Es la capa donde se procesan los datos y se aplican las reglas de negocio. Suele estar en un servidor de aplicaciones, en lenguajes como PHP, Python, Java, o frameworks como Django o Spring.

3. **Capa de Datos**:
   - Aquí se gestionan y almacenan los datos necesarios para la aplicación, a menudo en bases de datos relacionales (MySQL, PostgreSQL) o NoSQL (MongoDB). Es la responsable de la persistencia de la información.

### 2. Plataformas Web: LAMP y WISA

- **LAMP**:
   - Acrónimo de **Linux, Apache, MySQL, PHP/Perl/Python**. Es un stack de software de código abierto:
     - **Linux** es el sistema operativo.
     - **Apache** es el servidor web.
     - **MySQL** (o MariaDB) es el gestor de bases de datos.
     - **PHP/Perl/Python** es el lenguaje de programación del servidor.

- **WISA**:
   - Acrónimo de **Windows, IIS, SQL Server, ASP.NET**. Es un stack de tecnologías de Microsoft:
     - **Windows** como sistema operativo.
     - **IIS** (Internet Information Services) como servidor web.
     - **SQL Server** como sistema de gestión de bases de datos.
     - **ASP.NET** como entorno de desarrollo de aplicaciones web.

### 3. Instalación y configuración de Apache en Ubuntu 10.04 LTS

A continuación, se detallan los pasos y comandos para instalar Apache y configurar el servidor en Ubuntu 10.04 LTS:

#### Paso 1: Instalar el servidor web Apache

1. Actualiza los paquetes de software disponibles en el sistema:
   ```bash
   apt-get update
   ```
   
2. Instala Apache:
   ```bash
   apt-get install apache2
   ```

#### Paso 2: Comprobar que Apache está funcionando desde la terminal

Para verificar que Apache está en ejecución, usa el comando:

```bash
service apache2 status
```

Otra forma de comprobarlo es verificando los procesos activos:

```bash
ps aux | grep apache2
```

Si Apache está en ejecución, debería aparecer listado en el resultado.

#### Paso 3: Comprobar que Apache está funcionando desde el navegador

1. Abre un navegador web.
2. Escribe la dirección IP de tu máquina o `localhost` si estás en la misma máquina:
   ```plaintext
   http://localhost
   ```
   Deberías ver la página de bienvenida de Apache, que indica que el servidor está funcionando.

#### Paso 4: Cambiar el puerto de Apache al puerto 82

Para cambiar el puerto por el que escucha Apache, sigue estos pasos:

1. Abre el archivo de configuración de Apache en el directorio `/etc/apache2/ports.conf`:
   ```bash
   nano /etc/apache2/ports.conf
   ```
   
2. Busca la línea que dice `Listen 80` y cámbiala por `Listen 82`.

3. Luego, edita el archivo de configuración del sitio predeterminado:
   ```bash
   nano /etc/apache2/sites-enabled/000-default.conf
   ```
   Cambia `<VirtualHost *:80>` a `<VirtualHost *:82>`.

4. Guarda los cambios y reinicia Apache para aplicar la configuración:
   ```bash
   service apache2 restart
   ```

5. Para comprobar, abre el navegador y accede a `http://localhost:8082`. Deberías ver la página de bienvenida de Apache en el nuevo puerto.

#### Paso 5: Instalar el servidor de aplicaciones Tomcat

Para instalar Apache Tomcat en Ubuntu, sigue estos pasos:

1. Actualiza los repositorios de software:
   ```bash
   apt-get update
   ```
   
2. Instala Tomcat:
   ```bash
   apt-get install tomcat7
   ```

3. Verifica que Tomcat esté funcionando:
   ```bash
   service tomcat7 status
   ```

4. Abre el navegador e ingresa:
   ```plaintext
   http://localhost:8080
   ```
   Si Tomcat está funcionando correctamente, deberías ver la página de bienvenida de Tomcat.
