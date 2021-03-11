<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// authen ก่อนใช้งาน controller
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/setting', [SettingController::class, 'index'])->name('setting');
// Route::middleware(['auth:sanctum', 'verified'])->get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('welcome');
// })->name('home');

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', 'App\Http\Controllers\ProfileController@index')->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/home', [Profile2Controller::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/reports', [ReportsController::class, 'index'])->name('reports');
Route::middleware(['auth:sanctum', 'verified'])->get('/reports/{id}', [ReportsController::class, 'showreport'])->name('showreport');

Route::get('/lastupdate', function () {
    return view('update', [
        'active_menu_manual' => "active",
        'active_menu_lastupdate' => "active",
        'controller_name' => "Last update",
    ]);
});
