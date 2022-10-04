<?php

use Illuminate\Support\Facades\Route;
//Be importáljuk a TodoListController.php-t.
//Contorller készítése: $ php artisan make:controller név
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index']);

// Atvezéreljük a parancsot a TodoListController.php-t, ezzel tisztább és átláthatóbb lesz a kód.
Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');

Route::post('/deleteRoute/{id}', [TodoListController::class, 'delete'])->name('delete');