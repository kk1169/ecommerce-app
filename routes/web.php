<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WidgetController;
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

Route::get('/', [DashboardController::class, 'index'])->name('adminDashboard');
Route::get('/login', [DashboardController::class, 'login'])->name('adminLogin');
Route::get('/table', [DashboardController::class, 'table'])->name('adminTable');
Route::get('/profile', [DashboardController::class, 'profile'])->name('userProfile');


Route::prefix("/widget")->namespace("Admin")->group(function () {

    Route::get("/", [WidgetController::class, "index"])->name("widgetIndex");
    Route::get("/editor", [WidgetController::class, "editor"])->name("widgetEditor");
});
