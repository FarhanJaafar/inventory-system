<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/Inventory/create', [App\Http\Controllers\InventoryController::class, 'create'])->name('inventory.create');
Route::post('/Inventory/store', [App\Http\Controllers\InventoryController::class, 'store'])->name('inventory.store');
Route::get('/Inventory/edit/{inventory}', [App\Http\Controllers\InventoryController::class, 'edit'])->name('inventory.edit');
Route::post('/Inventory/update/{inventory}', [App\Http\Controllers\InventoryController::class, 'update'])->name('inventory.update');
Route::get('/Inventory/delete/{inventory}', [App\Http\Controllers\InventoryController::class, 'delete'])->name('inventory.delete');
Route::get('/Inventory/search', [App\Http\Controllers\InventoryController::class, 'search'])->name('inventory.search');
