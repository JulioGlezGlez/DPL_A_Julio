# **Informe de Configuración y Gestión de Repositorio Git para el Proyecto BlogGalpón**

### **1. Creación del Directorio de Trabajo y Inicialización del Repositorio**

**Pasos:**

1. **Crear el directorio de trabajo:**

   ```bash
   mkdir ~/bloggalpon
   cd ~/bloggalpon
   ```

2. **Inicializar el repositorio vacío:**

   ```bash
   git init
   ```

### **2. Creación y Configuración del Archivo `index.html`**

**Pasos:**

1. **Crear el archivo `index.html`:**

   ```bash
   touch index.html
   ```

2. **Añadir la estructura básica de una web:**

   ```html
   <!DOCTYPE html>
   <html lang="es">
   <head>
   </head>
   <body>
   </body>
   </html>
   ```

3. **Crear un commit indicando la creación del esqueleto básico:**

   ```bash
   git add index.html
   git commit -m "Crea el esqueleto básico del index.html"
   ```

### **3. Añadir Contenido al `<head>` y Realizar Commit**

**Pasos:**

1. **Añadir contenido al `<head>`:**

   ```html
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BlogGalpón</title>
   <link rel="stylesheet" href="style.css">
   ```

2. **Crear un commit indicando la adición de la cabecera:**

   ```bash
   git add index.html
   git commit -m "Añade la cabecera del index.html"
   ```

### **4. Añadir Contenido al `<body>` y Realizar Commit**

**Pasos:**

1. **Añadir contenido al `<body>`:**

   ```html
   <header>
       <h1>Bienvenidos a BlogGalpón</h1>
   </header>
   <section>
   </section>
   <footer>
   </footer>
   ```

2. **Crear un commit indicando la adición de la estructura básica del body:**

   ```bash
   git add index.html
   git commit -m "Añade la estructura básica del body"
   ```

### **5. Añadir la Estructura de la Zona de Posts y Realizar Commit**

**Pasos:**

1. **Añadir contenido a `<section>`:**

   ```html
   <article>
       <h2>Título del Post</h2>
       <p>Contenido del post...</p>
   </article>
   <aside>
       <h3>Información Adicional</h3>
       <p>Detalles relevantes...</p>
   </aside>
   ```

2. **Crear un commit indicando la adición de la estructura de la zona de posts:**

   ```bash
   git add index.html
   git commit -m "Añade toda la estructura de la zona de posts"
   ```

### **6. Creación y Configuración del Archivo `style.css`**

**Pasos:**

1. **Crear el archivo `style.css`:**

   ```bash
   touch style.css
   ```

2. **Añadir las siguientes CSS al archivo:**

   ```css
   html, body {
       margin: 0;
       padding: 0;
       font-family: Arial, sans-serif;
   }
   ```

3. **Crear un commit indicando la adición de las CSS de `html` y `body`:**

   ```bash
   git add style.css
   git commit -m "Añaden las CSS de html y de body"
   ```

### **7. Añadir CSS para Elementos HTML5 y Realizar Commit**

**Pasos:**

1. **Añadir CSS para `header`, `section`, `article`, `aside` y `footer`:**

   ```css
   header, footer {
       background-color: #f8f9fa;
       padding: 20px;
       text-align: center;
   }
   
   section {
       display: flex;
       justify-content: space-between;
       padding: 20px;
   }
   
   article {
       width: 70%;
   }
   
   aside {
       width: 25%;
       background-color: #e9ecef;
       padding: 10px;
   }
   ```

2. **Crear un commit indicando la adición de las CSS de varios elementos HTML5:**

   ```bash
   git add style.css
   git commit -m "Añaden las CSS de varios elementos HTML5: header, section, article, aside y footer"
   ```

### **8. Añadir el Logotipo y Realizar Commit**

**Pasos:**

1. **Añadir el archivo `logo.png` al directorio raíz del proyecto.**

2. **Crear un commit indicando la adición del logotipo de Galpón:**

   ```bash
   git add logo.png
   git commit -m "Añade el logotipo de Galpón"
   ```

### **9. Añadir CSS para `section` y Realizar Commit**

**Pasos:**

1. **Añadir CSS específico para `section`:**

   ```css
   section {
       background-color: #ffffff;
       border: 1px solid #dee2e6;
       border-radius: 5px;
   }
   ```

2. **Crear un commit indicando la adición de las CSS de `section`:**

   ```bash
   git add style.css
   git commit -m "Añaden las CSS de section"
   ```

### **10. Añadir CSS para el `footer` y Realizar Commit**

**Pasos:**

1. **Añadir CSS específico para `footer`:**

   ```css
   footer {
       border-top: 2px solid #343a40;
   }
   ```

2. **Crear un commit indicando la adición de las CSS del footer:**

   ```bash
   git add style.css
   git commit -m "Añaden las CSS del footer"
   ```

### **11. Añadir CSS para `h1` y Enlaces y Realizar Commit**

**Pasos:**

1. **Añadir CSS para `h1` y enlaces:**

   ```css
   h1 {
       color: #343a40;
   }
   
   a {
       color: #007bff;
       text-decoration: none;
   }
   
   a:hover {
       text-decoration: underline;
   }
   ```

2. **Crear un commit indicando la adición de las CSS del `h1` y de los enlaces:**

   ```bash
   git add style.css
   git commit -m "Añaden las CSS del H1 y de los enlaces"
   ```

### **12. Crear una Etiqueta de Versión v1.0**

**Pasos:**

1. **Crear la etiqueta:**

   ```bash
   git tag v1.0
   ```

### **13. Creación y Gestión de la Rama “desarrollo”**

**Pasos:**

1. **Crear la rama `desarrollo`:**

   ```bash
   git checkout -b desarrollo
   ```

2. **Crear el directorio `images` y mover `logo.png`:**

   ```bash
   mkdir images
   git mv logo.png images/
   ```

3. **Crear un commit indicando el movimiento del logotipo:**

   ```bash
   git commit -m "Mueve el logotipo a la carpeta images"
   ```

4. **Crear el directorio `CSS` y mover `style.css`:**

   ```bash
   mkdir CSS
   git mv style.css CSS/
   ```

5. **Crear un commit indicando el movimiento de las CSS:**

   ```bash
   git commit -m "Mueve la CSS a la carpeta CSS"
   ```

6. **Cambiar las referencias en `index.html` y en `CSS/style.css`:**

   - **En `index.html`:**

     ```html
     <link rel="stylesheet" href="CSS/style.css">
     <img src="images/logo.png" alt="Logo de Galpón">
     ```

7. **Crear un commit indicando el cambio de referencias:**

   ```bash
   git add index.html CSS/style.css
   git commit -m "Cambia las referencias a las CSS y a las imágenes al reorganizarlas en directorios"
   ```

### **14. Creación y Gestión de la Rama “bugfix”**

**Pasos:**

1. **Crear la rama `bugfix` a partir de `master`:**

   ```bash
   git checkout master
   git checkout -b bugfix
   ```

2. **Quitar los comentarios en las CSS de los punteados:**

   - **En `CSS/style.css`:** Eliminar líneas que contengan `//border`.

3. **Crear un commit indicando la introducción de los punteados en la barra derecha y en el footer:**

   ```bash
   git add CSS/style.css
   git commit -m "Introducen los punteados en la barra derecha y en el footer"
   ```

4. **Introducir el título “Galpón” en la página:**

   - **En `index.html`:**

     ```html
     <h1>Galpón</h1>
     ```

5. **Crear un commit indicando la introducción del título en la página:**

   ```bash
   git add index.html
   git commit -m "Introduce el título en la página"
   ```

6. **Cambiar "2012" por "2014" en el footer y quitar "(c)":**

   - **En `index.html`:**

     ```html
     <footer>
         <p>&copy; 2014 BlogGalpón</p>
     </footer>
     ```

7. **Crear un commit indicando los pequeños ajustes en el footer:**

   ```bash
   git add index.html
   git commit -m "Realizan pequeños ajustes en el footer"
   ```

8. **Crear una etiqueta de versión v1.1:**

   ```bash
   git tag v1.1
   ```

9. **Llevar los cambios a la rama `master` y borrar `bugfix`:**

   ```bash
   git checkout master
   git merge bugfix
   git branch -d bugfix
   ```

### **15. Integración de Cambios desde la Rama “desarrollo” a “master” y Creación de la Etiqueta v1.2**

**Pasos:**

1. **Cambiar a la rama `master` y fusionar `desarrollo`:**

   ```bash
   git checkout master
   git merge desarrollo
   ```

2. **Resolver conflictos si existen.**

3. **Crear una etiqueta de versión v1.2:**

   ```bash
   git tag v1.2
   ```
