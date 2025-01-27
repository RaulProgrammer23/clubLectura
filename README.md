# Proyecto: Club de Lectura

Este proyecto es una aplicación PHP desarrollada como parte de un examen y optimizada para demostrar buenas prácticas de programación. La aplicación está diseñada para gestionarse en un entorno local utilizando XAMPP u otro servidor local.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes componentes:
- [XAMPP](https://www.apachefriends.org/index.html) (o cualquier servidor local con soporte para PHP y MySQL).

## Proyecto optimizado con:
PHP: 8.3.15

### Configuración
Servidor Local: Usa un servidor como XAMPP o cualquier otro compatible con PHP 8.3.
Base de Datos: Importa el archivo { database/club_lectores.sql } a tu gestor de bases de datos.

Cambia por tu ruta al descargar este proyecto:


```php
$bd = new PDO("mysql:host=localhost;dbname=club_lectores","tu-user","tu-password",$opciones);

```php
define("base_url", "http://localhost/PHP/DAW/clubLectura/");






