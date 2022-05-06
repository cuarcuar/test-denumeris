Dump de la base de datos
CREATE DATABASE TESTDENUMERIS;

Se crea la base de datos con el usuario root
No se crea otro usuario de base de datos por cuestiones de tiempo.

Pero si es necesario para seguridad.

--------------------------------

Clonar el repositorio en la carpeta de htdocs que se genera al instalar xampp en windows, o lampp en linux

Configurar el archivo env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testdenumeris
DB_USERNAME=root
DB_PASSWORD=

usuario y password cambiarlos en caso de que se cree la base de datos con un usuario en específico

----------------------------------

Al abrir la terminal integrada en vscode

ejecutar estos comandos

php artisan key:generate
php artisan storage:link
composer install --- No hay errores, pero si los hubiera (composer update)

php artisan migrate --seed

se creó  un seeder con datos de prueba

----------------------------------

Iniciar los servidores de apache y mysql de xampp o lampp
Entrar a la pagina

--------------------------------

Se tienen dos vistas principales, (recursos para la API y búsqueda de precios)
La primera es para el crud de las direcciones y testear el punto número uno del examen
Y la segunda es el motor de búsqueda asíncrona, junto con la visualización del mapa y los resultados ordenados dependiendo de la selección
