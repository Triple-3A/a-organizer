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
use App\Http\Controllers\UserBasicTaskController;
use App\Http\Controllers\UserInstrumentalTaskController;
use App\Http\Controllers\UserAdvancedTaskController;

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
    Route::post('/assignTechToStudent', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent');
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

//básico
    Route::resource('/techUserBasic/{id}', UserBasicTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserBasic', 'create' => 'techUserBasic/create']);
    Route::post('/techUserBasic/store', [UserBasicTaskController::class, 'store'])->name('techUserBasic/store');
    
    Route::get('/techUserBasic/createDescription/{id}', [UserBasicTaskController::class, 'createDescription'])->name('techUserBasic/createDescription');
    Route::post('/techUserBasic/deleteTask', [UserBasicTaskController::class, 'deleteTask'])->name('techUserBasic/deleteTask');
    Route::post('/techUserBasic/storeDescription', [UserBasicTaskController::class, 'storeDescription'])->name('techUserBasic/storeDescription');
    Route::get('/techUserBasic/editDescription/{id}', [UserBasicTaskController::class, 'editDescription'])->name('techUserBasic/editDescription');
    Route::get('/techUserBasic/deleteDescription/{id}', [UserBasicTaskController::class, 'deleteDescription'])->name('techUserBasic/deleteDescription');
    Route::post('/techUserBasic/updateDescription', [UserBasicTaskController::class, 'updateDescription'])->name('techUserBasic/updateDescription');
 //instrumental
    Route::resource('/techUserInstrumental/{id}', UserInstrumentalTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserInstrumental', 'create' => 'techUserInstrumental/create']);
    Route::post('/techUserInstrumental/store', [UserInstrumentalTaskController::class, 'store'])->name('techUserInstrumental/store');
    
    Route::get('/techUserInstrumental/createDescription/{id}', [UserInstrumentalTaskController::class, 'createDescription'])->name('techUserInstrumental/createDescription');
    Route::get('/techUserInstrumental/deleteTask/{id}', [UserInstrumentalTaskController::class, 'deleteTask'])->name('techUserInstrumental/deleteTask');
    Route::post('/techUserInstrumental/storeDescription', [UserInstrumentalTaskController::class, 'storeDescription'])->name('techUserInstrumental/storeDescription');
    Route::get('/techUserInstrumental/editDescription/{id}', [UserInstrumentalTaskController::class, 'editDescription'])->name('techUserInstrumental/editDescription');
    Route::get('/techUserInstrumental/deleteDescription/{id}', [UserInstrumentalTaskController::class, 'deleteDescription'])->name('techUserInstrumental/deleteDescription');
    Route::post('/techUserInstrumental/updateDescription', [UserInstrumentalTaskController::class, 'updateDescription'])->name('techUserInstrumental/updateDescription');

 //avanzado
    Route::get('/techUserAdvanced/{id}', [UserAdvancedTaskController::class, 'index'])->name('techUserAdvanced');
    Route::post('/techUserAdvanced/create', [UserAdvancedTaskController::class, 'create'])->name('techUserAdvanced/create');
    Route::post('/techUserAdvanced/store', [UserAdvancedTaskController::class, 'store'])->name('techUserAdvanced/store');

    Route::get('/techUserAdvanced/pickType/{id}', [UserAdvancedTaskController::class, 'pickType'])->name('techUserAdvanced/pickType');
    
    Route::get('/techUserAdvanced/createDescription/{id}', [UserAdvancedTaskController::class, 'createDescription'])->name('techUserAdvanced/createDescription');
    Route::get('/techUserAdvanced/deleteTask/{id}', [UserAdvancedTaskController::class, 'deleteTask'])->name('techUserAdvanced/deleteTask');
    Route::post('/techUserAdvanced/storeDescription', [UserAdvancedTaskController::class, 'storeDescription'])->name('techUserAdvanced/storeDescription');
    Route::get('/techUserAdvanced/editDescription/{id}', [UserAdvancedTaskController::class, 'editDescription'])->name('techUserAdvanced/editDescription');
    Route::get('/techUserAdvanced/deleteDescription/{id}', [UserAdvancedTaskController::class, 'deleteDescription'])->name('techUserAdvanced/deleteDescription');
    Route::post('/techUserAdvanced/updateDescription', [UserAdvancedTaskController::class, 'updateDescription'])->name('techUserAdvanced/updateDescription');

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
