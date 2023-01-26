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

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
//user wallet group routes

Route::prefix('')->middleware(['auth', 'verified'])->group(function(){

Route::get('/wallet', [WalletController::class, 'index'])->name('wallet');
Route::post('/wallet', [WalletController::class, 'purchase'])->name('purchase');
Route::put('/wallet', [WalletController::class, 'update'])->name('update_user_profile');
Route::post('/wallet/withdraw', [WalletController::class, 'withdrawrequest'])->name('withdraw_request'); 






//other Routes
Route::get('/exchange-live', [WalletController::class, 'exchange_live'])->name('exchange_live');
Route::get('/exchange', [WalletController::class, 'exchange'])->name('exchange_price');
Route::get('/technical-analysis', [WalletController::class, 'technical_analysis'])->name('technical_analysis');
Route::get('/market-crypto', [WalletController::class, 'market_crypto'])->name('market_crypto');

});

//admin Routes
Route::prefix('admin')->middleware(['auth', 'isAdmin', 'verified'])->group(function(){
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/regusers', [DashboardController::class, 'regUsers'])->name('regusers');
    Route::get('/transactions', [DashboardController::class, 'getTransactions'])->name('transactions');
    Route::post('/transactionDetails', [DashboardController::class, 'getTransactionDetails' ])->name('user.transaction.details');
    Route::post('/updatetransactionDetails', [DashboardController::class, 'updateTransactionDetails' ])->name('update.transaction.details');


});