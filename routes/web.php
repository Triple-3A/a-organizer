<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados) 

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))