<?php

use App\Http\Controllers\AttachRoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvancedTitleController;
use App\Http\Controllers\BasicTitleController;
use App\Http\Controllers\InstrumentalTitleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\StandByController;
use App\Http\Controllers\TechnicianUserController;
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

Route::middleware(['auth:sanctum', 'verified', 'admin'])->post('/reassignRole', [AdminController::class, 'reassignRole'])->name('reassignRole');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assignment', [AdminController::class, 'assignment'])->name('assignment');
Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assignTechToStudent/{id}', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent'); //Cambiar a ruta post y nombre store asignment
Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/assigned', [AdminController::class, 'assigned'])->name('assigned');

//TECH GENERAL ROUTES
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technician', [TechnicianController::class, 'index'])->name('technician');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/categories', [TechnicianController::class, 'categories'])->name('categories');

// TECH USER CATEGORIES
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technicianUsers', [TechnicianUserController::class, 'index'])->name('technicianUsers');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/technicianUsersProfile', [TechnicianUserController::class, 'technicianUsersProfile'])->name('technicianUsersProfile');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/techUserBasic', [TechnicianUserController::class, 'techUserBasic'])->name('techUserBasic');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/techUserInstrumental', [TechnicianUserController::class, 'techUserInstrumental'])->name('techUserInstrumental');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/techUserAdvanced', [TechnicianUserController::class, 'techUserAdvanced'])->name('techUserAdvanced');

//TECH BASIC TITLES
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/basicTitle', [BasicTitleController::class, 'index'])->name('basicTitle');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/basicTitle/create', [BasicTitleController::class, 'create'])->name('basicTitle/create');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->delete('/basicTitle/delete/{id}', [BasicTitleController::class, 'destroy'])->name('basicTitle/delete');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->post('/basicTitle/store', [BasicTitleController::class, 'store'])->name('basicTitle/store');

//TECH INSTRUMENTAL TITLES
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/instrumentalTitle', [InstrumentalTitleController::class, 'index'])->name('instrumentalTitle');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/instrumentalTitle/create', [InstrumentalTitleController::class, 'create'])->name('instrumentalTitle/create');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->delete('/instrumentalTitle/delete/{id}', [InstrumentalTitleController::class, 'destroy'])->name('instrumentalTitle/delete');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->post('/instrumentalTitle/store', [InstrumentalTitleController::class, 'store'])->name('instrumentalTitle/store');

//TECH ADVANCED TITLES
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/advancedTitle', [AdvancedTitleController::class, 'index'])->name('advancedTitle');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->get('/advancedTitle/create', [AdvancedTitleController::class, 'create'])->name('advancedTitle/create');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->delete('/advancedTitle/delete/{id}', [AdvancedTitleController::class, 'destroy'])->name('advancedTitle/delete');
Route::middleware(['auth:sanctum', 'verified', 'technician'])->post('/advancedTitle/store', [AdvancedTitleController::class, 'store'])->name('advancedTitle/store');


Route::middleware(['auth:sanctum', 'verified', 'student'])->get('/student', [StudentController::class, 'index'])->name('student');


// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados) 

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))
