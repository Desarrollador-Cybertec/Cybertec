# 🎯 CYBERTEC - Proyecto Configurado para API

## ✅ Cambios Realizados

### ❌ Eliminado
- ❌ `config/bd-connection.php` - Conexión directa a BD (No se usa, consumiremos API)
- ❌ `config/BD_GUIA.md` - Guía de BD (No necesaria)

### ✅ Agregado

#### 1. **Archivo `.env`** - Configuración centralizada
```env
APP_ENV=development
API_URL=http://localhost:8000/api
API_VERSION=v1
API_KEY=token_aqui
ADMIN_EMAIL=admin@cybertec.local
ADMIN_PASSWORD=admin123456
```

#### 2. **`config/env-loader.php`** - Cargador de variables
- Lee variables del `.env`
- Las disponibiliza en toda la app
- Funciones helper: `env()`, `isDevelopment()`, `getApiUrl()`

#### 3. **`config/api-client.php`** - Cliente HTTP para API
- Clase `ApiClient` con métodos: `get()`, `post()`, `put()`, `delete()`
- Manejo de errores y respuestas
- Autenticación con tokens
- Fácil de usar:
  ```php
  $response = $api->get('contactos');
  ```

#### 4. **`config/auth.php`** - Sistema de autenticación
- Clase `AuthManager` para login/logout
- Middleware para proteger rutas: `requireAdmin()`
- Session management con timeout
- Logging de accesos

#### 5. **`admin/login.php`** - Página de login
- Interfaz profesional
- Validación de credenciales desde `.env`
- Redirige a dashboard si inicia sesión

#### 6. **`admin/dashboard.php`** - Panel de control
- Vista protegida (requiere login)
- Lista contactos desde la API
- Estadísticas en tiempo real
- Modal para ver detalles
- Preparado para marcar como leído/respondido

#### 7. **`admin/logout.php`** - Cerrar sesión
- Destruye sesión y redirige a login

#### 8. **`API_GUIDE.md`** - Guía completa de integración
- Cómo configurar
- Ejemplos de uso
- Estructura esperada de la API Laravel
- Troubleshooting

#### 9. **`.gitignore`** - Seguridad
- Archivos sensibles no se committean
- `.env` no se sube a Git

---

## 🚀 Cómo Usar

### Paso 1: Configurar Variables de Entorno

**Edita `.env`**:
```env
API_URL=http://tu-api.com/api
API_KEY=tu_token_jwt_aqui
ADMIN_EMAIL=tu_email@cybertec.local
ADMIN_PASSWORD=tu_contraseña
```

### Paso 2: Probar Acceso a Admin

1. Accede a: `http://localhost/Page1/admin/login.php`
2. Usa credenciales del `.env`
3. Verás dashboard con contactos de la API

### Paso 3: Integrar Formulario de Contacto

En `includes/footer.php`, actualiza el formulario:

```php
<form id="formulario-contacto" action="/procesar_contacto.php" method="POST">
    <input type="text" name="nombre" required>
    <input type="email" name="email" required>
    <textarea name="mensaje" required></textarea>
    <button type="submit">Enviar</button>
</form>
```

### Paso 4: Crear `procesar_contacto.php`

```php
<?php
require_once __DIR__ . '/config/env-loader.php';
require_once __DIR__ . '/config/api-client.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Enviar a API Laravel
    $response = $api->post('contactos', [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'mensaje' => $_POST['mensaje']
    ]);
    
    if ($response['success']) {
        echo json_encode(['success' => true, 'message' => '¡Enviado!']);
    } else {
        echo json_encode(['success' => false, 'error' => $response['error']]);
    }
}
?>
```

---

## 📂 Estructura Final

```
Page1/
│
├── .env                      ← Variables de configuración
├── .gitignore                ← Archivos a ignorar en Git
├── index.php                 ← Punto de entrada (modularizado)
├── API_GUIDE.md              ← Guía de integración API
│
├── config/
│   ├── env-loader.php        ← Cargador de .env
│   ├── api-client.php        ← Cliente HTTP para API
│   ├── auth.php              ← Sistema de autenticación
│   ├── servicios.php         ← Datos de servicios
│   └── estadisticas.php      ← Datos de estadísticas
│
├── assets/
│   └── styles.css            ← Estilos CSS
│
├── includes/
│   ├── header.php
│   ├── hero.php
│   ├── stats.php
│   ├── servicios.php
│   ├── seguridad.php
│   ├── soporte.php
│   ├── infraestructura.php
│   └── footer.php
│
├── admin/                    ← ✨ NUEVA CARPETA
│   ├── login.php            ← Página de login
│   ├── dashboard.php        ← Panel de control
│   └── logout.php           ← Cerrar sesión
│
└── logs/                     ← Directorio para logs (se crea automático)
```

---

## 🔗 Flujo de Datos

```
┌─────────────────────────────────────────────────────────────┐
│                    USUARIO EN SITIO                         │
│                                                             │
│  Formulario de Contacto (footer.php)                       │
│         ↓                                                   │
│  procesar_contacto.php                                     │
│         ↓                                                   │
│  api-client.php → POST /api/v1/contactos                   │
│         ↓                                                   │
│  ┌──────────────────────────────────────────────────┐      │
│  │     API LARAVEL (tu otro proyecto)               │      │
│  │     - Valida datos                               │      │
│  │     - Guarda en BD                               │      │
│  │     - Retorna respuesta JSON                     │      │
│  └──────────────────────────────────────────────────┘      │
│         ↓                                                   │
│  Confirmación al usuario                                   │
│                                                             │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                       ADMIN                                 │
│                                                             │
│  login.php (autentica)                                     │
│         ↓                                                   │
│  dashboard.php (requiere autenticación)                    │
│         ↓                                                   │
│  api-client.php → GET /api/v1/contactos                    │
│         ↓                                                   │
│  ┌──────────────────────────────────────────────────┐      │
│  │     API LARAVEL                                  │      │
│  │     - GET contactos con filtros                  │      │
│  │     - PUT para marcar como leído                 │      │
│  │     - DELETE para eliminar                       │      │
│  └──────────────────────────────────────────────────┘      │
│         ↓                                                   │
│  Visualización en tabla HTML                               │
│                                                             │
└─────────────────────────────────────────────────────────────┘
```

---

## 🔐 Seguridad

✅ **Implementado:**
- Variables sensibles en `.env`
- `.env` en `.gitignore` (no se sube a Git)
- Sistema de sesiones con timeout
- Protección de rutas admin
- Logging de accesos

❌ **Debe implementar en Laravel:**
- JWT tokens para API
- CORS policies
- Rate limiting
- Validación en servidor
- Encriptación de datos sensibles

---

## 🛠️ Próximos Pasos

### Fase 1: Configurar API (1-2 días)
- [ ] Crear proyecto Laravel
- [ ] Crear tabla `contactos` en BD
- [ ] Crear rutas `/api/v1/contactos` (CRUD)
- [ ] Generar token API
- [ ] Implementar autenticación JWT

### Fase 2: Integración Completa (1 día)
- [ ] Actualizar `.env` con datos de API
- [ ] Crear `procesar_contacto.php`
- [ ] Probar flujo completo de contacto
- [ ] Probar panel admin

### Fase 3: Mejoras Opcionales
- [ ] E-mail de confirmación al usuario
- [ ] E-mail al admin cuando llega contacto
- [ ] Búsqueda y filtros en dashboard
- [ ] Paginación de contactos
- [ ] Exportar contactos a CSV/PDF
- [ ] Roles de usuarios (admin, moderator, etc)

---

## 📊 Credenciales de Desarrollo

**Archivo**: `.env`

```
Email: admin@cybertec.local
Password: admin123456
Secret: cybertec_admin_2026
```

⚠️ **CAMBIAR en Producción**

---

## 🆘 Troubleshooting

### No puedo acceder a `/admin/login.php`
**Solución**: Verifica que `APP_URL` en `.env` sea correcto

### "Error: archivo .env no encontrado"
**Solución**: Asegúrate de crear el `.env` en la raíz del proyecto

### "Cannot connect to API"
**Solución**: 
1. Verifica que tu servidor Laravel está corriendo
2. Verifica `API_URL` en `.env`
3. Ejecuta test:
   ```php
   <?php
   require 'config/api-client.php';
   print_r($api->get('contactos'));
   ?>
   ```

### Admin session expires quickly
**Solución**: Ajusta `SESSION_TIMEOUT` en `.env` (minutos)

---

## 📚 Documentación Generada

| Archivo | Propósito |
|---------|-----------|
| [API_GUIDE.md](./API_GUIDE.md) | Guía completa de integración con API |
| [.env](./.env) | Variables de configuración |
| [.gitignore](./.gitignore) | Archivos a ignorar en Git |

---

## ✨ Ventajas de esta Arquitectura

✅ **Separación de responsabilidades**: Frontend y Backend independientes  
✅ **Fácil testing**: API client testeable  
✅ **Escalable**: Agregar nuevos endpoints es trivial  
✅ **Seguro**: Variables sensibles protegidas  
✅ **Profesional**: Estructura lista para producción  
✅ **Colaborativo**: Dos equipos pueden trabajar en paralelo  

---

## 📝 Notas Importantes

1. **NUNCA committear `.env`** a Git
2. **Cambiar credenciales** en producción
3. **Validar datos** en servidor (no solo client-side)
4. **Usar HTTPS** en producción
5. **Implementar rate limiting** en API
6. **Loguear accesos admin** para auditoría

---

**Proyecto listo para integración con Laravel API** 🚀  
**Última actualización**: 2026-02-24  
**Status**: ✅ En desarrollo

