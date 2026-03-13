# CYBERTEC — Brand Technical Specification (Web & Diseño)

---

# 1. Logotipo

## 1.1 Construcción del logotipo

El logotipo está construido sobre una **matriz modular proporcional fija**.

### Proporciones oficiales

| Variante         | Relación ancho : alto |
| ---------------- | --------------------- |
| Logo con eslogan | 20 : 3                |
| Logo sin eslogan | 20 : 2                |

⚠️ Está prohibido:

* Estirar horizontalmente
* Comprimir verticalmente
* Alterar proporciones originales

El logotipo debe escalarse siempre proporcionalmente.

---

## 1.2 Tamaño mínimo

### Uso digital

* Ancho mínimo permitido: **200 px**

Debajo de este tamaño:

* Se pierde legibilidad
* Se compromete la autoridad visual

---

## 1.3 Variaciones del logotipo

### Logo completo (principal)

Incluye nombre + eslogan.

Uso obligatorio en:

* Portadas institucionales
* Documentos corporativos
* Propuestas
* Firmas de correo
* Papelería oficial

---

### Logo reducido (sin eslogan)

Versión simplificada para legibilidad.

Uso obligatorio en:

* Interfaces digitales
* Espacios menores a 3.5 cm
* Bordados
* Marcas de agua
* Aplicaciones donde el eslogan no sea legible

---

# 2. Isotipo

## Construcción simbólica

Elementos estructurales:

* Escudo → perímetro de seguridad
* Nube → ecosistema digital
* Letra “C” → firma de responsabilidad
## Variantes disponibles

* **Logo-Banner.png** → Logo completo (con eslogan) – Uso en portadas y secciones principales
* **Logo-Footer.png** → Logo simplificado o monocromático – Uso en pies de página y espacios compactos
## Uso técnico

Aplicar cuando:

* El espacio sea limitado
* Favicons
* Iconos de aplicación
* Sellos o certificaciones
* Interfaces compactas

---

# 3. Paleta Cromática Oficial

La marca utiliza una **tríada cromática fija**.

---

## 3.1 Radar Blue (Color primario)

* HEX: `#1B92D0`
* RGB: 27, 146, 208
* CMYK: 87%, 30%, 0%, 18%
* CSS variable: `--cybertec-radar: #1B92D0;`

Uso:

* Elementos activos
* Botones
* Destacados
* Indicadores interactivos

---

## 3.2 Command Navy (Color institucional)

* RGB: 24, 29, 94
* HEX: `#181D5E`
* CMYK: 74%, 69%, 0%, 63%
* CSS variable: `--cybertec-navy: #181D5E;`

Uso:

* Fondos principales
* Secciones corporativas
* Base visual del sistema

---

## 3.3 Grafito Táctico (Armor Gray)

* RGB: 32, 32, 32
* HEX: `#202020`
* CMYK: 0%, 0%, 0%, 87%
* CSS variable: `--cybertec-graphite: #202020;`

Uso:

* Fondos secundarios
* Contenedores
* Superficies UI

---

# 4. Tipografía Corporativa

---

## 4.1 Tipografía Principal

### Polymath

Uso exclusivo en:

* Titulares
* Frases principales
* Portadas
* Headings

Características:

* Estilo tecnológico-industrial
* Peso visual alto
* Presencia robusta

⚠️ No usar en párrafos largos.

---

## 4.2 Tipografía Secundaria

### Bahnschrift

Uso en:

* Cuerpo de texto
* Interfaces
* Documentación técnica
* Información descriptiva

Características:

* Alta legibilidad
* Diseño técnico-industrial
* Lectura continua optimizada

---

# 5. Iconografía

## Estilo gráfico

* Línea pura
* Alto contraste
* Minimalismo técnico
* Eliminación de ruido visual

## Principios técnicos

Los iconos deben:

* Ser lineales (outline)
* Mantener consistencia de grosor
* Evitar rellenos complejos
* Priorizar lectura inmediata

---

## Categorías de iconos

Representan:

1. Defensa / control de acceso
2. Infraestructura cloud
3. Monitoreo CCTV
4. Redes y conectividad

---

# 6. Identidad Visual — Reglas Generales

## Sistema visual

La identidad debe mantener:

* Geometría sólida
* Apariencia estructural
* Sensación técnica-industrial
* Consistencia modular

---

## Uso del color

El color no es decorativo.

Debe funcionar como:

* Sistema jerárquico visual
* Señalización funcional
* Diferenciación estructural

---

# 7. Restricciones Técnicas

No permitido:

* Cambiar proporciones del logo
* Aplicar deformaciones
* Usar colores fuera de la paleta oficial
* Usar tipografías distintas a las definidas
* Reducir el logo por debajo de 200px digital
* Aplicar efectos (sombras, degradados, transparencias) no autorizados
* Modificar el isotipo más allá de su proporción 1:1

### ⚠️ Nota sobre alance del manual

Este documento es un **Brand Identity Guide** (nivel branding).

**NO incluye** (requiere definición en Design System de implementación):
* Spacing / padding / margins
* Border radius
* States (hover, active, disabled)
* Tokens CSS
* Reglas responsive
* Accesibilidad WCAG
* Componentes UI
* Elevation / shadows

---

# 8. Aplicación Digital (Reglas UI)

### Jerarquía tipográfica recomendada

| Elemento  | Fuente      | Nota                        |
| --------- | ----------- | --------------------------- |
| H1 / Hero | Polymath    | Uso exclusivo titulares     |
| H2 / H3   | Polymath    | Presencia robusta           |
| Body text | Bahnschrift | Alta legibilidad            |
| UI labels | Bahnschrift | Lectura continua optimizada |

⚠️ **Nota importante:** El manual define tipografías permitidas pero NO especifica:
* Tamaños de fuente
* Pesos (400, 600, 700)
* Line-height o letter-spacing
* Escala tipográfica completa

Estos valores deben definirse en el Design System de implementación (fase 2).

---

### Distribución visual

* Uso de bloques horizontales amplios
* Composición panorámica (alineada al ratio del logo)
* Elementos centrados o alineación izquierda estructural
* Espaciado consistente y modular

---

# 9. Elementos Gráficos Complementarios

Incluyen:

* Isotipo como sello visual
* Iconografía técnica
* Recursos gráficos tácticos alineados al sistema militar-industrial

---

# ✅ Resumen Técnico Rápido

* Ratio logo: **20:3 / 20:2**
* Tamaño mínimo digital: **200px**
* Colores oficiales: Radar Blue / Command Navy / Grafito Táctico
* Tipografías: **Polymath + Bahnschrift**
* Iconos: lineales, alto contraste
* Escalado siempre proporcional
* Paleta cromática obligatoria

---
