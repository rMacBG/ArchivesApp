<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArchivesController;

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

Auth::routes();

Route::get('/', [IndexController::class, 'index']);


Route::get('archive', [ArchivesController::class, 'archives']);
Route::get('currentArchive', [ArchivesController::class, 'archive_opened']);
Route::get('create', [ArchivesController::class, 'create']);
Route::get('edit/{id}', [ArchivesController::class, 'edit']);
Route::post('/',[ArchivesController::class, 'store']);
Route::put('update{id}', [ArchivesController::class, 'update']);
Route::delete('delete{id}', [ArchivesController::class, 'delete']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
