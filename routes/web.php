<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Models\Portfolio;
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
    return view('/front/index');
});

Route::get('/', [PageController::class, 'index']);

Route::view('admin', '/admin/index');

Route::resource('portfolio', PortfolioController::class);


Route::resource('service', ServiceController::class);


Route::get('services', [PageController::class, 'service']);

Route::get('projects', [PageController::class, 'projects']);

Route::get('serviceSingle', [PageController::class, 'serviceSingle'])->name('serviceSingle');


Route::get('projectsingle', [PageController::class, 'projectsingle'])->name('projectsingle');

Route::get('contacts', [PageController::class, 'contact'])->name('contacts');

Route::resource('contact', ContactController::class);
