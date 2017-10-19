<?php

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/btc', function(){
    $client = new Client();
    $result = $client->request('GET', 'https://bittrex.com/api/v1.1/public/getmarketsummary?market=usdt-btc');
    $body = json_decode($result->getBody());
    $value = $body->result[0]->Last;
    return $value;
});
