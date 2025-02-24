<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

Route::get('/add', [CreateController::class, 'index'])->name('add');