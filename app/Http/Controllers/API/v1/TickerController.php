<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TechTailor\BinanceApi\BinanceAPI;

class TickerController extends Controller
{
    public function index($currency1,$currency2){
        $binance = new BinanceAPI();
        $responce = [];
        //dd($binance->getTicker('BTCEUR'));
        //BNBUSDT
        array_push($responce, $binance->getTicker($currency1.$currency2));
        return response()->json($responce);
    }
}
