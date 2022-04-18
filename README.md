# Descripción del proyecto

Proyecto realizado para la asociación Asperger Asturias que consiste en diseñar una aplicación Web, que pueda ser gestiona tanto por los técnicos de la asociación como por los usuarios de esta, servirá para gestionar y crear tareas que faciliten la organización de la vida cotidiana de las personas con asperger. Posteriormente los usuarios podrán checkear en su dispositivo móvil las tareas a realizar y marcarlas como finalizadas.

Tres perfiles:

 - Administrador (desktop): Asigna los roles a los usuarios que accedan a la aplicación, pudiendo ser estos técnicos o usuarios finales.
 - Técnicos (desktop): Cada técnico tendrá asignados un determinado número de usuarios finales, a los cuales podra ir creando tareas diarias en diferentes categorías.
 - Usuarios finales (mobile first): Cada usuario podra ver las tareas a realizar diariamente, pudiendolas checkear cuándo las ha realizado y comprobar su barra de          progreso de tareas.


-----------------------------------------------------------------------------------------

## IDE (Entorno de desarrollo) y Stack utilizado

- Visual Studio Code
- Laravel Jetstream with Inertia
- Vue
- Xamp - PhpMyAdmin Data Base
- Tailwindcss


-----------------------------------------------------------------------------------------

## Instalación después de clonar (nombre de proyecto a_organizer)

> composer install 

> npm install

> npm run dev

Crear la Base de datos con el nombre del proyecto (a_organizer)
Copiar el archivo .env
En la linea 14  .env cambiar el nombre de la base de datos (de "laravel" llamarla a_organizer)

Ejecutar los siguientes comandos en la consola:
> php artisan key:generate

> php artisan migrate:fresh --seed

Entrar en la carpeta storage/app/public y crear 2 carpetas: images & profile-photos
- En images, poner una imagen base con el nombre específico: "logo1.png"

Ejecutar el siguiente comando en la consola:
> php artisan storage:link


-----------------------------------------------------------------------------------------

## A tener en cuenta

Si le pones otro nombre a la Base de datos tendrás que modificar el nombre en los archivos siguientes:
 - .env
 - phpunit.xml
 - database.php
 - app.js


-----------------------------------------------------------------------------------------

## Composición del Equipo

Proyecto pedagógico realizado por los alumnos de Factioria F5 Asturias:

- Ileen Fernández
- María Villaverde
- Ana Robles
- Frank Santos
- Omar Hevia
- Raúl Fernández

-----------------------------------------------------------------------------------------






# Project description

Project carried out for the Asperger Asturias association that consists of designing a Web application, which can be managed by both the association's technicians and its users, it will serve to manage and create tasks that facilitate the organization of people's daily lives with asperger's.

Later, users will be able to check the tasks to be carried out on their mobile device and mark them as completed.

Three profiles:

 - Administrator (desktop): Assign the roles to the users who access the application, who may be technicians or end users.
 - Technicians (desktop): Each technician will be assigned a certain number of end users, to whom they will be able to create daily tasks in different categories.
 - End users (mobile first): Each user will be able to see the tasks to be carried out daily, being able to check when they have been carried out and check their task progress bar.


-----------------------------------------------------------------------------------------

## IDE (Development Environment) and Stack used

-Visual Studio Code
- Laravel Jetstream with Inertia
- Vue
- Xamp - PhpMyAdmin Data Base
- Tailwindcss


-----------------------------------------------------------------------------------------

## Installation after clone (project name a_organizer)

> composer install

> npm install

> npm run dev

Create the Database with the name of the project (a_organizer)
Copy the .env file
In line 14 .env change the name of the database (from "laravel" to a_organizer)

Run the following console commands:
> php artisan key:generate

> php artisan migrate:fresh --seed

Go into the storage/app/public folder and create 2 new folders: images & profile-photos
- On images, upload an image with the specific name: "logo1.png"

Run the following console command:
> php artisan storage:link


-----------------------------------------------------------------------------------------

## To consider

If you put another name to the Database you will have to modify the name in the following files:
 - .env
 - phpunit.xml
 - database.php
 - app.js


-----------------------------------------------------------------------------------------

## Team Composition

Pedagogical project carried out by the students of Factioria F5 Asturias:

- Ileen Fernandez
- Maria Villaverde
- Ana Robles
- Frank Santos
- Omar Hevia
- Raul Fernandez


-----------------------------------------------------------------------------------------

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

-----------------------------------------------------------------------------------------


# Project description

Project carried out for the Asperger Asturias association that consists of designing a Web application, which can be managed by both the association's technicians and its users, it will serve to manage and create tasks that facilitate the organization of people's daily lives with asperger's.

Later, users will be able to check the tasks to be carried out on their mobile device and mark them as completed.

Three profiles:

 - Administrator (desktop): Assign the roles to the users who access the application, who may be technicians or end users.
 - Technicians (desktop): Each technician will be assigned a certain number of end users, to whom they will be able to create daily tasks in different categories.
 - End users (mobile first): Each user will be able to see the tasks to be carried out daily, being able to check when they have been carried out and check their task progress bar.

## IDE (Development Environment) and Stack used

-Visual Studio Code
- Laravel Jetstream with Inertia
- Vue
- Xamp - PhpMyAdmin Data Base
- Tailwindcss

## Installation after clone (project name a_organizer)

- composer install
- npm install
- npm run dev

Create the Database with the name of the project (a_organizer)
Copy the .env file
In line 14 .env change the name of the database (from "laravel" to a_organizer)

- Php artisan key:generate
- Create data in the Database
- (php artisan migrate:fresh --seed)

## To consider

If you put another name to the Database you will have to modify the name in the following files:
 - .env
 - phpunit.xml
 - database.php
 - app.js

## Team Composition

Pedagogical project carried out by the students of Factioria F5 Asturias:

-Ileen Fernandez
- Maria Villaverde
- Ana Robles
- Frank Santos
- Omar Hevia
- Raul Fernandez

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
