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
use App\Http\Controllers\UserBasicDescriptionController;
use App\Http\Controllers\UserInstrumentalTaskController;
use App\Http\Controllers\UserInstrumentalDescriptionController;
use App\Http\Controllers\UserAdvancedTaskController;
use App\Http\Controllers\UserAdvancedDescriptionController;

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

    Route::get('dashboard', function () {
        return Redirect::route('attach');
    })->name('dashboard');

    Route::get('attach', [AttachRoleController::class, 'index'])->name('attach');
    Route::middleware(['standBy'])->get('standBy', [StandByController::class, 'index'])->name('standBy');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::post('reassignRole', [AdminController::class, 'reassignRole'])->name('reassignRole');
        Route::get('assignment', [AdminController::class, 'studentAsignment'])->name('assignment');
        Route::post('assignTechToStudent', [AdminController::class, 'assignTechToStudent'])->name('assignTechToStudent');
        Route::get('assigned', [AdminController::class, 'assignStudent'])->name('assigned');
    });

    Route::middleware(['technician'])->group(function () {
        Route::controller(TechnicianController::class)->group(function () {
            Route::get('technician', 'index')->name('technician');
            Route::get('categories', 'categories')->name('categories');
        });

        Route::resource('basicTitle', BasicTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'basicTitle', 'create' => 'basicTitle/create', 'store' => 'basicTitle/store', 'destroy' => 'basicTitle/delete']);
        Route::resource('instrumentalTitle', InstrumentalTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'instrumentalTitle', 'create' => 'instrumentalTitle/create', 'store' => 'instrumentalTitle/store', 'destroy' => 'instrumentalTitle/delete']);
        Route::resource('advancedTitle', AdvancedTitleController::class, ['only' => ['index', 'create', 'store', 'destroy']])->names(['index' => 'advancedTitle', 'create' => 'advancedTitle/create', 'store' => 'advancedTitle/store', 'destroy' => 'advancedTitle/delete']);

        Route::controller(TechnicianUserController::class)->group(function () {
            Route::get('technicianUsers', 'index')->name('technicianUsers');
            Route::get('technicianUsersProfile/{id}', 'technicianUsersProfile')->name('technicianUsersProfile');
        });
        //basic task
        Route::resource('techUserBasic/{id}', UserBasicTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserBasic', 'create' => 'techUserBasic/create']);
        // Route::resource('techUserBasic', UserBasicTaskController::class, ['only' => ['store', 'destroy']])->names(['store' => 'techUserBasic/store', 'destroy' => 'techUserBasic/delete']);
        Route::controller(UserBasicTaskController::class)->group(function () {
            Route::post('techUserBasic/store', 'store')->name('techUserBasic/store');
            Route::delete('techUserBasic/delete/{id}', 'destroy')->name('techUserBasic/delete');
        });
        //basic description
        Route::resource('techUserBasic', UserBasicDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserBasic/storeDescription', 'edit' => 'techUserBasic/editDescription', 'update' => 'techUserBasic/updateDescription', 'destroy' => 'techUserBasic/deleteDescription']);
        Route::controller(UserBasicDescriptionController::class)->group(function () {
            Route::get('techUserBasic/createDescription/{id}', 'create')->name('techUserBasic/createDescription');
        });
        //instrumental task
        Route::resource('techUserInstrumental/{id}', UserInstrumentalTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserInstrumental', 'create' => 'techUserInstrumental/create']);
        // Route::resource('techUserInstrumental', UserInstrumentalTaskController::class, ['only' => ['destroy', 'store']])->names(['destroy' => 'techUserInstrumental/deleteTask', 'store' => 'techUserInstrumental/store']);
        Route::controller(UserInstrumentalTaskController::class)->group(function () {
            Route::post('techUserInstrumental/store', 'store')->name('techUserInstrumental/store');
            Route::delete('techUserInstrumental/deleteTask/{id}', 'destroy')->name('techUserInstrumental/deleteTask');
        });
        //instrumental description
        Route::resource('techUserInstrumental', UserInstrumentalDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserInstrumental/storeDescription', 'edit' => 'techUserInstrumental/editDescription', 'update' => 'techUserInstrumental/updateDescription', 'destroy' => 'techUserInstrumental/deleteDescription']);
        Route::controller(UserInstrumentalDescriptionController::class)->group(function () {
            Route::get('techUserInstrumental/createDescription/{id}', 'create')->name('techUserInstrumental/createDescription');
        });
        //advanced task
        // Route::resource('techUserAdvanced', UserAdvancedTaskController::class, ['only' => ['store', 'destroy']])->names(['store' => 'techUserAdvanced/store', 'destroy' => 'techUserAdvanced/deleteTask']);
        Route::controller(UserAdvancedTaskController::class)->group(function () {
            Route::get('techUserAdvanced/{id}', 'index')->name('techUserAdvanced');
            Route::get('techUserAdvanced/pick/{id}', 'pick')->name('techUserAdvanced/pick');
            Route::post('techUserAdvanced/create', 'create')->name('techUserAdvanced/create');

            Route::post('techUserAdvanced/store', 'store')->name('techUserAdvanced/store');
            Route::delete('techUserAdvanced/deleteTask/{id}', 'destroy')->name('techUserAdvanced/deleteTask');
        });
        //advanced description
        Route::resource('techUserAdvanced', UserAdvancedDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserAdvanced/storeDescription', 'edit' => 'techUserAdvanced/editDescription', 'update' => 'techUserAdvanced/updateDescription', 'destroy' => 'techUserAdvanced/deleteDescription']);
        Route::controller(UserAdvancedDescriptionController::class)->group(function () {
            Route::get('techUserAdvanced/createDescription/{id}', 'create')->name('techUserAdvanced/createDescription');
        });
    });

    Route::middleware(['student'])->group(function () {
        Route::get('student', [StudentController::class, 'index'])->name('student');
    });
});
