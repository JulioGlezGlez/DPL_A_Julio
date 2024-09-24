# Método de Paso de Variables de formularios. GET y POST

### 1. Método `GET`

#### HTML

```html
<form action="procesar.php" method="get">
  <label for="nombre">Nombre:</label><input type="text" name="nombre" />
  <input type="submit" value="Enviar" />
</form>
```

#### PHP

```php
<?php
echo "Nombre: " . $_GET['nombre'];
?>
```

Este código imprimirá `Nombre: Juan` en la página procesar.php.

### Pasos en el proceso `GET`

1. El usuario completa el formulario.
2. El navegador genera una URL con los datos del formulario.
3. El navegador envía una solicitud al servidor con la URL.
4. PHP recibe los datos en la variable `$_GET` y procesa la información.

### 2. Método `POST`

#### HTML

```html
<form action="procesar.php" method="post">
  <label for="nombre">Nombre:</label><input type="text" name="nombre" />
  <input type="submit" value="Enviar" />
</form>
```

#### PHP

```php
<?php
echo "Nombre: " . $_POST['nombre'];
?>
```

Este código recibirá el valor del campo `nombre` sin mostrarlo en la URL.

### Pasos en el proceso `POST`

1. El usuario completa el formulario.
2. El navegador envía los datos del formulario dentro de la solicitud HTTP.
3. PHP recibe estos datos en la variable `$_POST`.
4. El servidor procesa los datos y devuelve una respuesta.

### Envío de archivos con `POST`

Cuando se envían archivos, se usa `POST` y se añade el atributo `enctype="multipart/form-data"` en el formulario.

### Ejemplo con envío de archivos

#### HTML

```html
<form action="procesar.php" method="post" enctype="multipart/form-data">
  <label for="nombre">Nombre:</label><input type="text" name="nombre" />
  <label for="archivo">Subir archivo:</label
  ><input type="file" name="archivo" />
  <input type="submit" value="Enviar" />
</form>
```

#### PHP

```php
<?php
echo "Nombre: " . $_POST['nombre'];
echo "<br>";
echo "Nombre del archivo subido: " . $_FILES['archivo']['name'];
?>
```

Esto mostrará el nombre del usuario y el nombre del archivo que se ha subido.
