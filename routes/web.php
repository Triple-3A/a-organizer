<?php

use App\Http\Controllers\AttachRoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\StandByController;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function(){
    return Redirect::route('login');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
    return Redirect::route('attach');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/attach', [AttachRoleController::class, 'index'])->name('attach');

//FAke
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


// Route::middleware(['auth:sanctum', 'verified', 'standBy'])->get('/standBy', [StandByController::class, 'index'])->name('standBy');

// Route::middleware(['auth:sanctum', 'verified', 'student'])->get('/student', [StudentController::class, 'index'])->name('student');

// Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technician', [TechnicianController::class, 'index'])->name('technician');


// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados) 

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))