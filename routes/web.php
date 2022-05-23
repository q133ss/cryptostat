<?php

use Illuminate\Support\Facades\Route;
use TechTailor\BinanceApi\BinanceAPI;

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

Route::name('dashboard.')->prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', [App\Http\Controllers\Dashboard\IndexController::class, 'index'])->name('index');
    Route::get('/strategy', [App\Http\Controllers\Dashboard\StrategyController::class, 'index'])->name('strategy');
    Route::get('/rating', [App\Http\Controllers\Dashboard\RatingController::class, 'index'])->name('rating');
    Route::get('/profile', [App\Http\Controllers\Dashboard\ProfileController::class, 'index'])->name('profile');
});

Route::get('/test', function (){
    $binance = new BinanceAPI();
    $binance->setApi(Auth()->user()->api_key, Auth()->user()->api_secret);
    $accountInfo = $binance->getAccountInfo();
    $balanceInfo = $binance->getUserCoinsInfo(); //All coins
    $balance_active = collect($balanceInfo)->where('free','!=', '0.00000000')->all();
    dd($balance_active);
});
//У юзера будут поля с api key и secret
//Нужен vue router

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
