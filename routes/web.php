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

route::get('/', [App\Http\Controllers\Pages\HomeController::class, 'home'])
    ->name("dashboard");
route::get('/category', [App\Http\Controllers\Pages\HomeController::class, 'category'])->name('category');
route::get('/author', [App\Http\Controllers\Pages\HomeController::class, 'author'])->name('author');
route::get('/borrowing', [App\Http\Controllers\Pages\HomeController::class, 'borrowing'])->name('borrowing');
