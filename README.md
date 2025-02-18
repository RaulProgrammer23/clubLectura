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

![image](https://github.com/user-attachments/assets/bddb8ddc-8b6f-4c7e-83d1-574a5e3ce5d1)

![image](https://github.com/user-attachments/assets/9de6ba3f-fd4d-4bd7-b997-ace6759f2060)

![image](https://github.com/user-attachments/assets/22342d57-c4f0-40a6-bb0b-566577f486f1)

![image](https://github.com/user-attachments/assets/c6fad10a-e0c1-4a32-afb9-36b783481668)

```php
$bd = new PDO("mysql:host=localhost;dbname=club_lectores","tu-user","tu-password",$opciones);
define("base_url", "http://localhost/PHP/DAW/clubLectura/");





