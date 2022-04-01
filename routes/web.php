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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Redirect::route('attach');
    })->name('dashboard');

    Route::get('/attach', [AttachRoleController::class, 'index'])->name('attach');

    Route::middleware(['standBy'])->get('/standBy', [StandByController::class, 'index'])->name('standBy');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        Route::post('/reassignRole', [AdminController::class, 'reassignRole'])->name('reassignRole');

        Route::get('/assignment', [AdminController::class, 'studentAsignment'])->name('assignment');
        Route::post('/assignTechToStudent', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent');
        Route::get('/assigned', [AdminController::class, 'assignStudent'])->name('assigned');
    });

    Route::middleware(['technician'])->group(function () {

        Route::controller(TechnicianController::class)->group(function () {
            Route::get('/technician', 'index')->name('technician');
            Route::get('/categories', 'categories')->name('categories');
        });

        Route::resource('/basicTitle', BasicTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'basicTitle', 'create' => 'basicTitle/create', 'store' => 'basicTitle/store', 'destroy' => 'basicTitle/delete']);
        Route::resource('/instrumentalTitle', InstrumentalTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'instrumentalTitle', 'create' => 'instrumentalTitle/create', 'store' => 'instrumentalTitle/store', 'destroy' => 'instrumentalTitle/delete']);
        Route::resource('advancedTitle', AdvancedTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'advancedTitle', 'create' => 'advancedTitle/create', 'store' => 'advancedTitle/store', 'destroy' => 'advancedTitle/delete']);

        Route::controller(TechnicianUserController::class)->group(function () {
            Route::get('/technicianUsers', 'index')->name('technicianUsers');
            Route::get('/technicianUsersProfile/{id}', 'technicianUsersProfile')->name('technicianUsersProfile');
        });

        Route::resource('/techUserBasic/{id}', UserBasicTaskController::class, ['only' => ['index', 'create']])->names(['index'=>'techUserBasic', 'create'=>'techUserBasic/create']);

        Route::controller(UserBasicTaskController::class)->group(function () {
            Route::post('/techUserBasic/store', 'store')->name('techUserBasic/store');

            Route::get('/techUserBasic/createDescription/{id}', 'createDescription')->name('techUserBasic/createDescription');
            Route::post('/techUserBasic/deleteTask', 'deleteTask')->name('techUserBasic/deleteTask');
            Route::post('/techUserBasic/storeDescription', 'storeDescription')->name('techUserBasic/storeDescription');
            Route::get('/techUserBasic/editDescription/{id}', 'editDescription')->name('techUserBasic/editDescription');
            Route::get('/techUserBasic/deleteDescription/{id}', 'deleteDescription')->name('techUserBasic/deleteDescription');
            Route::post('/techUserBasic/updateDescription', 'updateDescription')->name('techUserBasic/updateDescription');
        });

        Route::resource('/techUserInstrumental/{id}', UserInstrumentalTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserInstrumental', 'create' => 'techUserInstrumental/create']);

        Route::controller(UserInstrumentalTaskController::class)->group(function () {
            Route::post('/techUserInstrumental/store', 'store')->name('techUserInstrumental/store');

            Route::get('/techUserInstrumental/createDescription/{id}', 'createDescription')->name('techUserInstrumental/createDescription');
            Route::get('/techUserInstrumental/deleteTask/{id}', 'deleteTask')->name('techUserInstrumental/deleteTask');
            Route::post('/techUserInstrumental/storeDescription', 'storeDescription')->name('techUserInstrumental/storeDescription');
            Route::get('/techUserInstrumental/editDescription/{id}', 'editDescription')->name('techUserInstrumental/editDescription');
            Route::get('/techUserInstrumental/deleteDescription/{id}', 'deleteDescription')->name('techUserInstrumental/deleteDescription');
            Route::post('/techUserInstrumental/updateDescription', 'updateDescription')->name('techUserInstrumental/updateDescription');
        });

        Route::controller(UserAdvancedTaskController::class)->group(function () {
            Route::get('/techUserAdvanced/{id}', 'index')->name('techUserAdvanced');
            Route::post('/techUserAdvanced/create', 'create')->name('techUserAdvanced/create');
            Route::post('/techUserAdvanced/store', 'store')->name('techUserAdvanced/store');

            Route::get('/techUserAdvanced/pickType/{id}', 'pickType')->name('techUserAdvanced/pickType');

            Route::get('/techUserAdvanced/createDescription/{id}', 'createDescription')->name('techUserAdvanced/createDescription');
            Route::get('/techUserAdvanced/deleteTask/{id}', 'deleteTask')->name('techUserAdvanced/deleteTask');
            Route::post('/techUserAdvanced/storeDescription', 'storeDescription')->name('techUserAdvanced/storeDescription');
            Route::get('/techUserAdvanced/editDescription/{id}', 'editDescription')->name('techUserAdvanced/editDescription');
            Route::get('/techUserAdvanced/deleteDescription/{id}', 'deleteDescription')->name('techUserAdvanced/deleteDescription');
            Route::post('/techUserAdvanced/updateDescription', 'updateDescription')->name('techUserAdvanced/updateDescription');
        });
    });

    Route::middleware(['student'])->group(function () {
        Route::get('/student', [StudentController::class, 'index'])->name('student');
    });
});


// Views

// -Login ~
// -Register ~

// -Superadmin (Asignación Técnica(Attach-Detach roles) / Asignados)

// -Usuario (Nombre / Foto de perfil(Attach) /Tareas de la persona)

// -Tutoras (Gestión->Tareas / Tareas generales / Tarea (1 de las 3) CRUD (De los títulos de tareas e iconos)
//                  ->Usuarios / Tareas generales / Tarea (1 de las 3) CRUD (De la descripciones y tarea conjunta))
