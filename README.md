# Descripción del proyecto

Proyecto realizado para la asociación Asperger Asturias que consiste en diseñar una aplicación Web, que pueda ser gestiona tanto por los técnicos de la asociación como por los usuarios de esta, servirá para gestionar y crear tareas que faciliten la organización de la vida cotidiana de las personas con asperger. Posteriormente los usuarios podrán checkear en su dispositivo móvil las tareas a realizar y marcarlas como finalizadas.

Tres perfiles:

 - Administrador (desktop): Asigna los roles a los usuarios que accedan a la aplicación, pudiendo ser estos técnicos o usuarios finales.
 - Técnicos (desktop): Cada técnico tendrá asignados un determinado número de usuarios finales, a los cuales podra ir creando tareas diarias en diferentes categorías.
 - Usuarios finales (mobile first): Cada usuario podra ver las tareas a realizar diariamente, pudiendolas checkear cuándo las ha realizado y comprobar su barra de          progreso de tareas.

## IDE (Entorno de desarrollo) y Stack utilizado

- Visual Studio Code
- Laravel Jetstream with Inertia
- Vue
- Xamp - PhpMyAdmin Data Base
- Tailwindcss

## Instalación después de clonar (nombre de proyecto a_organizer)

- composer install 
- npm install
- npm run dev

Crear la Base de datos con el nombre del proyecto (a_organizer)
Copiar el archivo .env
En la linea 14  .env cambiar el nombre de la base de datos (de "laravel" llamarla a_organizer)

- Php artisan key:generate
- Crear datos en la Base de Datos
- (php artisan migrate:fresh --seed)

## A tener en cuenta

Si le pones otro nombre a la Base de datos tendrás que modificar el nombre en los archivos siguientes:
 - .env
 - phpunit.xml
 - database.php
 - app.js

## Composición del Equipo

Proyecto pedagógico realizado por los alumnos de Factioria F5 Asturias:

- Ileen Fernández
- María Villaverde
- Ana Robles
- Frank Santos
- Omar Hevia
- Raúl Fernández



