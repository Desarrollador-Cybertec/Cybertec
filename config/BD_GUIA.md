# 🗄️ Conexión a Base de Datos - Guía Rápida

## ✅ Estado Actual

| Elemento | Configuración |
|----------|---------------|
| **Host** | localhost |
| **Usuario** | root |
| **Password** | (vacío) |
| **Base de Datos** | cybertec |
| **Puerto** | 3306 |
| **Charset** | utf8mb4 |

## 🚀 Primeros Pasos

### Paso 1: Crear la Base de Datos

Accede a **PhpMyAdmin** en: `http://localhost/phpmyadmin`

#### Opción A: Interfaz PhpMyAdmin
1. Click en "Nuevo"
2. Nombre: `cybertec`
3. Collation: `utf8mb4_unicode_ci`
4. Crear

#### Opción B: Ejecutar SQL
```sql
CREATE DATABASE cybertec CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Paso 2: Crear Tabla de Ejemplo (Contactos)

En PhpMyAdmin, selecciona BD `cybertec` y ejecuta:

```sql
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    empresa VARCHAR(100),
    mensaje TEXT,
    asunto VARCHAR(150),
    estado ENUM('nuevo', 'leido', 'respondido') DEFAULT 'nuevo',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_fecha (fecha_creacion)
);
```

### Paso 3: Usar en Tus Componentes

En cualquier archivo PHP que necesites BD:

```php
<?php
// Incluir la conexión
require_once __DIR__ . '/../config/bd-connection.php';

// Opción 1: Usar función helper para SELECT
$contactos = selectQuery("SELECT * FROM contactos ORDER BY fecha_creacion DESC");
print_r($contactos);

// Opción 2: Usar función helper con parámetros
$email = 'cliente@ejemplo.com';
$resultado = selectQuery("SELECT * FROM contactos WHERE email = ?", [$email]);

// Opción 3: Usar conexión directamente
$result = $connection->query("SELECT * FROM contactos");
$datos = $result->fetch_all(MYSQLI_ASSOC);
?>
```

---

## 📋 Funciones Disponibles

### 1. selectQuery() - Obtener datos

```php
// Sin parámetros
$usuarios = selectQuery("SELECT * FROM contactos");

// Con parámetros (más seguro)
$usuario = selectQuery("SELECT * FROM contactos WHERE id = ?", [5]);
```

### 2. executeQuery() - Insertar/Actualizar/Eliminar

```php
// INSERT
executeQuery(
    "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)",
    ['Juan', 'juan@email.com', 'Mi mensaje']
);

// UPDATE
executeQuery(
    "UPDATE contactos SET estado = ? WHERE id = ?",
    ['respondido', 3]
);

// DELETE
executeQuery("DELETE FROM contactos WHERE id = ?", [1]);
```

### 3. getLastInsertId() - Obtener ID insertado

```php
executeQuery(
    "INSERT INTO contactos (nombre, email) VALUES (?, ?)",
    ['María', 'maria@email.com']
);

$nuevo_id = getLastInsertId();
echo "ID creado: " . $nuevo_id;
```

### 4. escapeString() - Escapar cadenas

```php
$nombre = escapeString($_POST['nombre']);
```

### 5. logMessage() - Registrar logs

```php
logMessage('Usuario creado exitosamente', 'INFO');
logMessage('Error al procesar pago', 'ERROR');
```

---

## 🔌 Ejemplo Completo: Procesar Formulario de Contacto

**archivo**: `procesar_contacto.php`

```php
<?php
require_once __DIR__ . '/config/bd-connection.php';

// Verificar que es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtener datos del formulario
    $nombre = escapeString($_POST['nombre'] ?? '');
    $email = escapeString($_POST['email'] ?? '');
    $telefono = escapeString($_POST['telefono'] ?? '');
    $empresa = escapeString($_POST['empresa'] ?? '');
    $mensaje = escapeString($_POST['mensaje'] ?? '');
    $asunto = escapeString($_POST['asunto'] ?? 'Consulta General');
    
    // Validar datos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        die(json_encode(['success' => false, 'error' => 'Campos requeridos vacíos']));
    }
    
    // Insertar en BD
    $resultado = executeQuery(
        "INSERT INTO contactos (nombre, email, telefono, empresa, asunto, mensaje) 
         VALUES (?, ?, ?, ?, ?, ?)",
        [$nombre, $email, $telefono, $empresa, $asunto, $mensaje]
    );
    
    if ($resultado) {
        $id = getLastInsertId();
        logMessage("Nuevo contacto: ID={$id}, Email={$email}", 'INFO');
        
        echo json_encode([
            'success' => true,
            'message' => '¡Gracias! Pronto nos pondremos en contacto.',
            'id_contacto' => $id
        ]);
    } else {
        logMessage("Error al insertar contacto: {$connection->error}", 'ERROR');
        echo json_encode(['success' => false, 'error' => 'Error al procesar']);
    }
    
    exit;
}
?>
```

**En tu formulario HTML**:

```html
<form id="formulario-contacto">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="telefono" placeholder="Teléfono">
    <input type="text" name="empresa" placeholder="Empresa">
    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
    <button type="submit">Enviar</button>
</form>

<script>
document.getElementById('formulario-contacto').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    
    const response = await fetch('procesar_contacto.php', {
        method: 'POST',
        body: formData
    });
    
    const data = await response.json();
    
    if (data.success) {
        alert(data.message);
        e.target.reset();
    } else {
        alert('Error: ' + data.error);
    }
});
</script>
```

---

## 🔒 Seguridad - Buenas Prácticas

✅ **SIEMPRE usar parámetros en consultas** (previene inyección SQL)

```php
// ✅ BIEN
selectQuery("SELECT * FROM usuarios WHERE email = ?", [$email]);

// ❌ MAL
selectQuery("SELECT * FROM usuarios WHERE email = '$email'");
```

✅ **Validar datos del usuario**

```php
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Email inválido');
}
```

✅ **Usar funciones helper provistas**

```php
// En lugar de concatenar SQL directamente
```

✅ **Loguear eventos importantes**

```php
logMessage('Usuario {$id} accedió al sistema', 'INFO');
```

---

## 📊 Consultas Comunes

### Obtener un registro por ID
```php
$contacto = selectQuery("SELECT * FROM contactos WHERE id = ?", [5]);
```

### Obtener todos los registros
```php
$todos = selectQuery("SELECT * FROM contactos ORDER BY fecha_creacion DESC");
```

### Contar registros
```php
$cuenta = selectQuery("SELECT COUNT(*) as total FROM contactos");
echo $cuenta[0]['total'];
```

### Búsqueda por texto
```php
$resultados = selectQuery(
    "SELECT * FROM contactos WHERE nombre LIKE ? OR email LIKE ?",
    ["%{$busqueda}%", "%{$busqueda}%"]
);
```

### Agrupar y contar
```php
$resumen = selectQuery(
    "SELECT empresa, COUNT(*) as cantidad FROM contactos GROUP BY empresa"
);
```

---

## 🐛 Troubleshooting

### Error: "Can't connect to MySQL"

**Solución**: Verifica que MySQL/XAMPP esté corriendo

```bash
# En Windows, abre XAMPP Control Panel y click "Start" en MySQL
# En Linux:
sudo service mysql start
```

### Error: "Access denied for user 'root'"

**Solución**: Ajusta las credenciales en `bd-connection.php`

```php
$DB_USER = 'root';      // Tu usuario
$DB_PASSWORD = '';      // Tu contraseña
$DB_NAME = 'cybertec';  // Tu BD
```

### Error: "Unknown database 'cybertec'"

**Solución**: Crea la BD primero (Ver Paso 1 arriba)

### Verificar conexión

```php
if (isset($connection)) {
    echo "✅ Conectado a: " . $connection->get_server_info();
} else {
    echo "❌ No hay conexión";
}
```

---

## 📚 Recursos

- [PHP MySQLi Docs](https://www.php.net/manual/es/book.mysqli.php)
- [SQL Basics](https://www.w3schools.com/sql/)
- [Prepared Statements](https://www.php.net/manual/es/mysqli.quickstart.prepared-statements.php)

---

## ✨ Resumen

Ahora tienes:
- ✅ Archivo de conexión BD configurado
- ✅ Funciones helper para consultas
- ✅ Sistema de logs
- ✅ Manejo de errores profesional
- ✅ Ejemplos listos para usar

¡Listo para trabajar con datos! 🚀
