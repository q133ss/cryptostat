<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use TechTailor\BinanceApi\BinanceAPI;

class ProfileController extends Controller
{
    public function index(){
        $binance = new BinanceAPI();
        //dd($binance->getExchangeInfo('BNBUSDT'));

        //dd($binance->getAvgPrice('BNBUSDT'));  цена монеты, относительно другой вывести на первый экран
        //dd($binance->getTicker('BNBUSDT'));
        //Валютные пары на первые 4 колонки текущую цену
        //Процент роста или падения

        //dd($binance->getOrderBook('BNBUSDT')); -- список последних заказов
        //LUNA
        //Terra

        $binance->setApi(Auth()->user()->api_key, Auth()->user()->api_secret);
        $accountInfo = $binance->getAccountInfo();
        $balanceInfo = $binance->getUserCoinsInfo(); //All coins
        $balances = collect($balanceInfo)->where('free','!=', '0.00000000')->all();
        dd($balances);


        return view('dashboard.profile', compact('balances'));
    }
}
