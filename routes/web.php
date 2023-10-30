<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Categoria\CategoriaComponent;
use App\Livewire\Home\Inicio;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', Inicio::class);
Route::get('/inicio', Inicio::class)->name('inicio');
Route::get('/categoria', CategoriaComponent::class)->name('categoria');
