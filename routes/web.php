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

Route::get('/', function () {
    return Redirect::route('login');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Redirect::route('attach');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/attach', [AttachRoleController::class, 'index'])->name('attach');
Route::middleware(['auth:sanctum', 'verified', 'standBy'])->get('/standBy', [StandByController::class, 'index'])->name('standBy');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::post('/reassignRole', [AdminController::class, 'reassignRole'])->name('reassignRole');

    Route::get('/assignment', [AdminController::class, 'studentAsignment'])->name('assignment');
    Route::post('/assignTechToStudent', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent'); //Cambiar a ruta post y nombre store asignment
    Route::get('/assigned', [AdminController::class, 'assignStudent'])->name('assigned');
});

Route::middleware(['auth:sanctum', 'verified', 'technician'])->group(function () {
    Route::get('/technician', [TechnicianController::class, 'index'])->name('technician');
    Route::get('/categories', [TechnicianController::class, 'categories'])->name('categories');

    Route::resource('/basicTitle', BasicTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'basicTitle', 'create' => 'basicTitle/create', 'store' => 'basicTitle/store', 'destroy' => 'basicTitle/delete']);
    Route::resource('/instrumentalTitle', InstrumentalTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'instrumentalTitle', 'create' => 'instrumentalTitle/create', 'store' => 'instrumentalTitle/store', 'destroy' => 'instrumentalTitle/delete']);
    Route::resource('advancedTitle', AdvancedTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'advancedTitle', 'create' => 'advancedTitle/create', 'store' => 'advancedTitle/store', 'destroy' => 'advancedTitle/delete']);

    Route::get('/technicianUsers', [TechnicianUserController::class, 'index'])->name('technicianUsers');
    Route::get('/technicianUsersProfile/{id}', [TechnicianUserController::class, 'technicianUsersProfile'])->name('technicianUsersProfile');
    Route::get('/techUserBasic/{id}', [TechnicianUserController::class, 'techUserBasic'])->name('techUserBasic');
    Route::get('/techUserInstrumental/{id}', [TechnicianUserController::class, 'techUserInstrumental'])->name('techUserInstrumental');
    Route::get('/techUserAdvanced/{id}', [TechnicianUserController::class, 'techUserAdvanced'])->name('techUserAdvanced');
});

Route::middleware(['auth:sanctum', 'verified', 'student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student');
});



// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados)

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))
