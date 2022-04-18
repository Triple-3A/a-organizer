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
    Route::middleware(['standBy'])->get('fromProfile', function () {
        return Redirect::back();
    })->name('fromProfile');
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

        Route::resource('techUserBasic/{id}', UserBasicTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserBasic', 'create' => 'techUserBasic/create']);
        Route::resource('techUserBasic', UserBasicTaskController::class, ['only' => ['store', 'destroy']])->names(['store' => 'techUserBasic/store', 'destroy' => 'techUserBasic/delete']);

        Route::resource('techUserBasicDescription', UserBasicDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserBasicDescription/store', 'edit' => 'techUserBasicDescription/edit', 'update' => 'techUserBasicDescription/update', 'destroy' => 'techUserBasicDescription/delete']);
        Route::get('techUserBasicDescription/create/{id}', [UserBasicDescriptionController::class, 'create'])->name('techUserBasicDescription/create');

        Route::resource('techUserInstrumental/{id}', UserInstrumentalTaskController::class, ['only' => ['index', 'create']])->names(['index' => 'techUserInstrumental', 'create' => 'techUserInstrumental/create']);
        Route::resource('techUserInstrumental', UserInstrumentalTaskController::class, ['only' => ['destroy', 'store']])->names(['destroy' => 'techUserInstrumental/delete', 'store' => 'techUserInstrumental/store']);

        Route::resource('techUserInstrumentalDescription', UserInstrumentalDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserInstrumentalDescription/store', 'edit' => 'techUserInstrumentalDescription/edit', 'update' => 'techUserInstrumentalDescription/update', 'destroy' => 'techUserInstrumentalDescription/delete']);
        Route::get('techUserInstrumentalDescription/create/{id}', [UserInstrumentalDescriptionController::class, 'create'])->name('techUserInstrumentalDescription/create');

        Route::resource('techUserAdvanced', UserAdvancedTaskController::class, ['only' => ['destroy', 'store']])->names(['destroy' => 'techUserAdvanced/delete', 'store' => 'techUserAdvanced/store']);
        Route::controller(UserAdvancedTaskController::class)->group(function () {
            Route::get('techUserAdvanced/{id}', 'index')->name('techUserAdvanced');
            Route::get('techUserAdvanced/pick/{id}', 'pick')->name('techUserAdvanced/pick');
            Route::post('techUserAdvanced/create', 'create')->name('techUserAdvanced/create');
        });

        Route::resource('techUserAdvancedDescription', UserAdvancedDescriptionController::class, ['only' => ['store', 'edit', 'update', 'destroy']])->names(['store' => 'techUserAdvancedDescription/store', 'edit' => 'techUserAdvancedDescription/edit', 'update' => 'techUserAdvancedDescription/update', 'destroy' => 'techUserAdvancedDescription/delete']);
        Route::get('techUserAdvancedDescription/create/{id}', [UserAdvancedDescriptionController::class, 'create'])->name('techUserAdvancedDescription/create');
    });

    Route::middleware(['student'])->group(function () {
        Route::get('/student', [StudentController::class, 'index'])->name('student');
        Route::post('/assignStudentNickname', [StudentController::class, 'assignStudentNickname'])->name('assignStudentNickname');
        Route::post('/doneTask', [StudentController::class, 'doneTask'])->name('doneTask');
        Route::get('/studentTasks', [StudentController::class, 'studentTasks'])->name('studentTasks');
    });
});
