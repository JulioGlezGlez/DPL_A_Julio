### 1. **Insertar un Registro**

**Pasos:**
1. Escribir la consulta de inserción `INSERT INTO` para añadir un nuevo registro a la tabla `users`.
2. Ejecutar la consulta con `mysqli_query`.
3. Imprimir el resultado para verificar si fue exitosa.

```php
$insert = "INSERT INTO users(name,email) VALUES('Owen','owentoto')";
$return = mysqli_query($conn, $insert);
print_r($return);
```

---

### 2. **Leer (Obtener) Registros**

**Pasos:**
1. Escribir la consulta de selección `SELECT *` para obtener todos los registros de la tabla `users`.
2. Ejecutar la consulta con `mysqli_query`.
3. Usar `mysqli_fetch_array` para obtener los resultados como un array.
4. Imprimir los resultados.

```php
$get = 'SELECT * FROM users;';
$result = mysqli_query($conn, $get);
$rows = mysqli_fetch_array($result, MYSQLI_NUM);
print_r($rows);
```

---

### 3. **Modificar un Registro**

**Pasos:**
1. Escribir la consulta de actualización `UPDATE` para modificar el registro con `id=1`.
2. Ejecutar la consulta con `mysqli_query`.
3. Imprimir el resultado para verificar si fue exitosa.

```php
$update = 'UPDATE users SET name="julio1", email="julio2@gmail.com" WHERE id=1;';
$update_return = mysqli_query($conn, $update);
print_r($update_return);
```

---

### 4. **Borrar un Registro**

**Pasos:**
1. Escribir la consulta `DELETE FROM` para eliminar el registro con `id=2`.
2. Ejecutar la consulta con `mysqli_query`.
3. Imprimir el resultado para verificar si fue exitosa.

```php
$delete = 'DELETE FROM users WHERE id=2;';
$delete_return = mysqli_query($conn, $delete);
print_r($delete_return);
```

---

### 6. **Cerrar la Conexión**

**Pasos:**
1. Cerrar la conexión con la base de datos usando `mysqli_close`.

```php
mysqli_close($conn);
```

### Codigo PHP
```php
<?php
    $conn = mysqli_connect('localhost','julio','1q2w3e4r5t','prueba');
    echo('<pre>');
    print_r($conn);

    # Insert
    $insert = "insert into users(name,email) values('Owen','owentoto')" ;
    $return = mysqli_query($conn,$insert);
    echo('<pre>');
    print_r($return);
    
    # Get all
    $get = 'select * from users;';
    $result = mysqli_query($conn,$get);
    $rows = mysqli_fetch_array($result,MYSQLI_NUM);
    
    echo('<pre>');
    print_r($rows);

    # Update id1
    $update = 'update users set name="julio1",
        email="julio2@gmail.com" 
        where id=1;';
    $update_return = mysqli_query($conn,$update);
    echo('<pre>');
    print_r($update_return);

    # Delete id2
    $delete = 'delete from users where id=2;';
    $delete_return = mysqli_query($conn,$delete);
    echo('<pre>');
    print_r($update_return);

    mysqli_close($conn);
?>
```