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

Route::get('patterns/{pattern?}', \App\Http\Controllers\PatternsDescriptionController::class)->name('patterns');
Route::get('definitions', \App\Http\Controllers\DefinitionController::class)->name('definitions');
