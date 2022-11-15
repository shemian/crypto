<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trading\WalletController;
use App\Http\Controllers\Admin\DashboardController;

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
    return view('layouts.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user wallet group routes

Route::prefix('')->middleware(['auth'])->group(function(){

Route::get('/wallet', [WalletController::class, 'index'])->name('wallet');
Route::post('/wallet', [WalletController::class, 'purchase'])->name('purchase'); 
Route::put('/wallet', [WalletController::class, 'update'])->name('update_user_profile');

});
//admin Routes
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


});