# Prueba

El objetivo de la prueba será crear un buscador de preguntas sobre dudas de nuestros usuarios para ver las respuestas de los entrenadores que han generado. Se basa en crear un Single Page Application en angular con una API como proveedora de datos hecha en Laravel 5.2.

La primera vista contendrá un input para realizar la búqueda por texto.
La búsqueda se realizará contra todas las preguntas que tengamos en base de datos y que contenga alguna coincidencia y serán ordenadas por número de respuestas que tengan.
Mostrar el listado de las preguntas con la palabra buscada resaltada en negrita y al realizar click sobre la pregunta accedemos a la siguiente vista.
La siguiente vista irá encabezada por la pregunta en si y un listado de las respuestas ordenadas por el número de validaciones recibidas (count_validantions en base de datos)

![alt tag](https://resources.entrenar.me/list_questions.png)
![alt tag](https://resources.entrenar.me/view_questions.png)


## Para instalar

Se requiere tener instala la versión 7 de PHP, MSQL como base de datos y Apache o Nginx como servidor local. Se recomienda intalar MAMP, XAMP o LAMP según el sistema operativo que utilicemos.

EN nuestra consola pondremos:

- git clone git@github.com:Entrenarme/test-entrenarme.git
- composer install
- npm install


## Configuración

- Crear un base de datos en MYSQL
- Crear archivo .env a partir de .env.example y modificar los parámatros para la conexión con la base de datos

En consola de comandos:
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## Iniciar aplicaciones

Para iniciar la aplicación

- php artisan serve
- gulp watch
