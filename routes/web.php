<?php

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
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crypto', function () {
    return view('crypto.home');
});

Route::get('/btc', function(){
    $client = new Client();
    $result = $client->request('GET', 'https://bittrex.com/api/v1.1/public/getmarketsummary?market=usdt-btc');
    $body = json_decode($result->getBody());
    $value = $body->result[0]->Last;
    return $value;
});
