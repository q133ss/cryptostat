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
        //$accountInfo = $binance->getAccountInfo();
        //$balanceInfo = $binance->getUserCoinsInfo(); //All coins

        //$trades = $binance->getTrades('BNBRUB'); //Можно найти все сделки с ценой и кол-вом
        //$dep = $binance->getDepositHistory();
        $orders = $binance->getAllOrders('BNBRUB'); //Цена, время кол-во заказа

        //$balances = collect($balanceInfo)->where('free','!=', '0.00000000')->all();
        dd($orders);


        return view('dashboard.profile', compact('balances'));
    }
}
