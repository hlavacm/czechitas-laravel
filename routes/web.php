<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/pages/store', [PageController::class, 'store'])->name('pages.store');

Route::get("/pages/{page}/edit", [PageController::class, "edit"])->name("pages.edit");
Route::post("/pages/{page}/update", [PageController::class, "update"])->name("pages.update");

Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');

Route::post('/pages/contact', [PageController::class, 'contact'])->name('pages.contact');
