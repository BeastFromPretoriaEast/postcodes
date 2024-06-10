<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/getPostcodeData', function (Request $request, Client $client) {
    return $client->request('GET', 'api.postcodes.io/postcodes/' . $request->get('postcode'))->getBody();
})->name('api.postcode.get');
