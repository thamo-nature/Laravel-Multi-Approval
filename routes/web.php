<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//Route::get('/medical-ads', [App\Http\Controllers\ProjectController::class, 'index'])->name('medical-ads');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->middleware('auth')->name('project_index');

Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->middleware('auth')->name('project_create');

Route::post('/projects/store', [App\Http\Controllers\ProjectController::class, 'store'])->middleware('auth')->name('project_store');

Route::get('/projects/{id}/show', [App\Http\Controllers\ProjectController::class, 'show'])->middleware(['finance','auth'])->name('project_show');
Route::post('/projects/{id}/show', [App\Http\Controllers\ProjectController::class, 'update'])->middleware(['auth','finance'])->name('project_update');

Route::get('/projects/{id}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->middleware(['admin','auth'])->name('project_edit');
Route::post('/projects/{id}/edit', [App\Http\Controllers\ProjectController::class, 'admin_update'])->middleware(['admin','auth'])->name('project_update_admin');

Route::post('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->middleware(['admin','auth'])->name('project_delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

