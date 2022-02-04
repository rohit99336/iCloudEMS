<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DataController;

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
    return view('welcome');
});

Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');


Route::view('studentimp','studentDataImpExp');
Route::get('getstudent', [StudentController::class, 'getStudents'])->name('getStudents');
Route::post('studentdata-file-import', [StudentController::class, 'fileImport'])->name('studentdata-file-import');
Route::get('studentdata-file-export', [StudentController::class, 'fileExport'])->name('studentdata-file-export');

