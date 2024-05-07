<?php
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard/dashboard', function () {
        return view('/dashboard/dashboard');
    });
    Route::get('/dashboard/staffs', function () {
        return view('/dashboard/staffs');
    });
    // Route::get('/dashboard/dashboard', [DashboardController::class, 'Dashboard'])->name('Dashboard');
    // Route::get('/dashboard/staffs', 'DashboardController')->name('staffs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
