<?php

use App\Http\Controllers\AttachRoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvancedTitleController;
use App\Http\Controllers\BasicTitleController;
use App\Http\Controllers\InstrumentalTitleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\StandByController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


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
Route::middleware(['auth:sanctum', 'verified', 'standBy'])->get('/standBy', [StandByController::class, 'index'])->name('standBy');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/admin', [AdminController::class, 'index'])->name('admin');
Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assignment', [AdminController::class, 'assignment'])->name('assignment');
Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assignTechToStudent/{id}', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent'); //Cambiar a ruta post y nombre store asignment
Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assigned', [AdminController::class, 'assigned'])->name('assigned');

Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technician', [TechnicianController::class, 'index'])->name('technician');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/categories', [TechnicianController::class, 'categories'])->name('categories');

Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technicianUsers', [TechnicianController::class, 'technicianUsers'])->name('technicianUsers');

Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/basicTasks', [BasicTitleController::class, 'index'])->name('basicTasks');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/instrumentalTasks', [InstrumentalTitleController::class, 'index'])->name('instrumentalTasks');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/advancedTasks', [AdvancedTitleController::class, 'index'])->name('advancedTasks');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technicianUsersProfile', [TechnicianController::class, 'technicianUsersProfile'])->name('technicianUsersProfile');


Route::middleware(['auth:sanctum', 'verified', 'student'])->get('/student', [StudentController::class, 'index'])->name('student');

// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados) 

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))

// Route::middleware(['auth:sanctum', 'verified', 'admin'])->post('/reassignRole', [AdminController::class, 'reassignRole'])->name('reassignRole');