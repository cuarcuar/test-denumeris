<p>Dump de la base de datos</p>
CREATE DATABASE TESTDENUMERIS;

Se crea la base de datos con el usuario root
No se crea otro usuariode base de datos por cuestines de tiempo.

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

usuario y password cambiarlos en caso de que se cree la base de datos con un usuario en especifico

----------------------------------

Al abrir la terminal integrada en vscode

ejecutar estos comandos

php artisan key:generate
php artisan storage:link
composer install --- No hay errores, pero si los hubiera (composer update)

php artisan migrate --seed
se creo un seeder con datos de prueba

----------------------------------

Iniciar los servidores de apache y mysql de xampp o lampp
Entrar a la pagina

--------------------------------

Se tienen dos vistas principales, (recursos para la api y busqueda de precios)
La primera es para el crud de las direcciones y testear el punto numero uno del examen
Y la segunda es el motor de busqueda asincrono, junto con la visualizacion del mapa y los resultados ordenados dependiendo de la seleccion


