<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TechTailor\BinanceApi\BinanceAPI;

class TickerController extends Controller
{
    public function index(){
        $binance = new BinanceAPI();
        $responce = [];
        //dd($binance->getTicker('BTCUSDT'));
        //BNBUSDT
        array_push($responce, $binance->getTicker('BTCUSDT'));
        return response()->json($responce);
    }
}
