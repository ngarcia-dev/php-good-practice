# PHP - practicando con PDO y Postgresql

* Usamos variables de entorno para almacenar los datos de la conexión
* Una estructura de carpetas MVC (Model-View-Controller) para organizar el proyecto.

El objetivo de este proyecto es hacer un desarrollo limpio y ordenado, aplicando buenas practicas de programación en php, además de aplicar conceptos de programación orientada a objetos (POO) y uso de un tipado semi-estricto.

## Configuración
Para configurar las variables de entorno, se debe ejecutar los siguientes comandos en la terminal:

```bash
export DB_HOST=localhost
export DB_NAME=nombre_de_la_base_de_datos
export DB_USER=nombre_de_usuario
export DB_PASS=contraseña
```

Para probar el proyecto en desarrollo, se puede usar el siguiente comando:

```bash
php -S localhost:8000
```
Tener instalado las extensiones de php para postgresql:

```bash
sudo apt-get install php8.2-pdo-pgsql php8.2-pgsql
```
