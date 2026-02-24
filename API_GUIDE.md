# 📡 API Integration Guide - Cybertec

## 🎯 Visión General

Este proyecto está configurado para consumir una API REST construida en **Laravel**.

**Estructura:**
- **Frontend**: Este proyecto PHP (consuma datos de la API)
- **Backend**: API Laravel (proporciona datos y lógica)

---

## 🔧 Configuración Inicial

### Paso 1: Configurar Variables de Entorno

**Archivo**: `.env`

```env
# API - ENDPOINT LARAVEL
API_URL=http://localhost:8000/api
API_VERSION=v1
API_KEY=tu_token_aqui_generado_en_laravel
API_AUTH_TYPE=bearer
API_TIMEOUT=30
```

**Nota**: `API_KEY` debe ser generado en tu API Laravel

### Paso 2: Cambiar Credenciales de Admin

**Archivo**: `.env`

```env
ADMIN_EMAIL=tu_correo@cybertec.local
ADMIN_PASSWORD=tu_contraseña_segura
ADMIN_SECRET_KEY=codigo_secreto_unico
```

---

## 📁 Estructura de Archivos

```
config/
├── env-loader.php       ← Carga variables del .env
├── api-client.php       ← Cliente HTTP para API
└── auth.php             ← Sistema de autenticación

admin/
├── login.php            ← Página de login
├── dashboard.php        ← Panel de control
└── logout.php           ← Cerrar sesión

.env                     ← Variables de configuración
```

---

## 🚀 Cómo Usar el API Client

### Importar en tu archivo

```php
<?php
require_once __DIR__ . '/../config/env-loader.php';
require_once __DIR__ . '/../config/api-client.php';

// $api está disponible globalmente
```

### GET - Obtener datos

```php
// Sin parámetros
$response = $api->get('contactos');

// Con parámetros (query string)
$response = $api->get('contactos', ['status' => 'nuevo', 'limit' => 10]);

// Procesar respuesta
if ($response['success']) {
    $contactos = $response['data'];
    echo "Total: " . count($contactos);
} else {
    echo "Error: " . $response['error'];
}
```

### POST - Enviar datos

```php
$datos = [
    'nombre' => 'Juan',
    'email' => 'juan@email.com',
    'mensaje' => 'Hola, tengo una consulta'
];

$response = $api->post('contactos', $datos);

if ($response['success']) {
    echo "Contacto creado: " . $response['data']['id'];
}
```

### PUT - Actualizar datos

```php
$response = $api->put('contactos/5', [
    'estado' => 'respondido',
    'respuesta' => 'Gracias por contactarnos...'
]);
```

### DELETE - Eliminar datos

```php
$response = $api->delete('contactos/5');
```

---

## 🔐 Autenticación Admin

### Login

**URL**: `http://localhost/Page1/admin/login.php`

```php
// En archivo login.php
if (AuthManager::login($email, $password)) {
    // Login exitoso
    header('Location: dashboard.php');
}
```

### Proteger páginas

```php
<?php
require_once __DIR__ . '/../config/auth.php';

// Este código protege la página - requiere estar logueado
requireAdmin();

// El código aquí solo se ejecuta si está autenticado
$user = currentUser();
echo "Bienvenido, " . $user['email'];
?>
```

### Verificar autenticación

```php
// Checks
isAdmin()                    // bool - ¿Está logueado?
currentUser()                // array - Datos del usuario
AuthManager::isSessionValid() // bool - ¿Sesión válida?
```

---

## 📊 Estructura de Respuesta API

### Respuesta exitosa (GET)

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "nombre": "Juan Pérez",
            "email": "juan@email.com",
            "empresa": "Tech Corp",
            "asunto": "Consulta sobre servicios",
            "mensaje": "Hola, me gustaría...",
            "estado": "nuevo",
            "fecha_creacion": "2026-02-24T10:30:00",
            "created_at": "2026-02-24T10:30:00"
        }
    ],
    "total": 1,
    "page": 1
}
```

### Respuesta con error

```json
{
    "success": false,
    "error": "No autorizado",
    "code": 401
}
```

---

## 🔄 Flujo de Contacto

### 1. Usuario envía formulario en sitio

```html
<form action="procesar_contacto.php" method="POST">
    <input name="nombre" required>
    <input name="email" required>
    <textarea name="mensaje" required></textarea>
    <button type="submit">Enviar</button>
</form>
```

### 2. PHP procesa y envía a API

```php
<?php
require_once __DIR__ . '/config/api-client.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = $api->post('contactos', [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'mensaje' => $_POST['mensaje']
    ]);
    
    if ($response['success']) {
        echo "¡Gracias! Tu mensaje fue enviado.";
    }
}
?>
```

### 3. Admin ve en dashboard

- Accede a `/admin/dashboard.php`
- Lista todos los contactos desde la API
- Puede marcar como leído/respondido (cuando Laravel esté listo)

---

## 🛠️ Implementación en Laravel

Tu API Laravel debe tener estos endpoints:

### GET /api/v1/contactos
Obtiene lista de contactos

**Respuesta**:
```json
{
    "success": true,
    "data": [...],
    "total": 100,
    "page": 1
}
```

### POST /api/v1/contactos
Crear nuevo contacto

**Payload**:
```json
{
    "nombre": "string",
    "email": "email",
    "telefono": "string",
    "empresa": "string",
    "asunto": "string",
    "mensaje": "text"
}
```

### PUT /api/v1/contactos/{id}
Actualizar contacto

**Payload**:
```json
{
    "estado": "nuevo|leido|respondido",
    "respuesta": "text"
}
```

### DELETE /api/v1/contactos/{id}
Eliminar contacto

---

## 🧪 Testing - Probar API Cliente

### Crear archivo test.php

```php
<?php
require_once __DIR__ . '/config/env-loader.php';
require_once __DIR__ . '/config/api-client.php';

// Test 1: Obtener contactos
echo "=== Test GET ===\n";
$response = $api->get('contactos');
echo "Success: " . ($response['success'] ? 'Sí' : 'No') . "\n";
echo "Code: " . $response['code'] . "\n";
if (!$response['success']) {
    echo "Error: " . $response['error'] . "\n";
}
print_r($response);

// Test 2: Crear contacto
echo "\n=== Test POST ===\n";
$response = $api->post('contactos', [
    'nombre' => 'Test User',
    'email' => 'test@example.com',
    'mensaje' => 'Mensaje de prueba'
]);
print_r($response);

?>
```

**Ejecutar**:
```bash
cd /xampp/htdocs/Page1
php test.php
```

---

## 🔐 Seguridad

### ✅ Lo que está hecho

- Variables sensibles en `.env` (NO committear a Git)
- Tokens de API en variables de entorno
- Contraseñas hasheadas (implementar en Laravel)
- CSRF protection (implementar cuando sea necesario)

### ❌ TODO para Producción

- [ ] HTTPS para todas las comunicaciones
- [ ] Rate limiting en API
- [ ] Validación de tokens JWT
- [ ] Logging de accesos admin
- [ ] Backup automático de datos

---

## 📝 Archivo .gitignore

Asegúrate de NO committear archivos sensibles:

```
.env
.env.local
.env.*.local
logs/
*.log
vendor/
```

---

## 🚨 Troubleshooting

### "Error de conexión: Could not resolve host"

**Causa**: La API no está corriendo  
**Solución**: Inicia tu servidor Laravel
```bash
php artisan serve
```

### "401 Unauthorized"

**Causa**: Token inválido o expirado  
**Solución**: Actualiza `API_KEY` en `.env`

### "Cannot connect to API_URL"

**Causa**: URL incorrecta en `.env`  
**Solución**: Verifica que coincida con tu servidor Laravel

### "Session not found" en admin

**Causa**: Cookies deshabilitadas o sesión expirada  
**Solución**: Limpia cookies del navegador, vuelve a loguearse

---

## 📚 Recursos

- [cURL Documentation](https://www.php.net/manual/es/book.curl.php)
- [REST APIs Best Practices](https://restfulapi.net/)
- [Laravel API Documentation](https://laravel.com/docs)
- [HTTP Status Codes](https://httpwg.org/specs/rfc7231.html#status.codes)

---

## 📞 Endpoints Disponibles

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/contactos` | Obtener todos los contactos |
| GET | `/contactos/{id}` | Obtener un contacto específico |
| POST | `/contactos` | Crear nuevo contacto |
| PUT | `/contactos/{id}` | Actualizar contacto |
| DELETE | `/contactos/{id}` | Eliminar contacto |

---

## ✨ Próximos Pasos

1. [ ] Crear proyecto Laravel
2. [ ] Implementar endpoints en Laravel
3. [ ] Generar token API
4. [ ] Actualizar `.env` con datos correctos
5. [ ] Probar conexión con test.php
6. [ ] Implementar validaciones adicionales
7. [ ] Agregar autenticación OAuth (opcional)
8. [ ] Deploy a producción

---

**Última actualización**: 2026-02-24  
**Versión**: 1.0
