<?php
Route::middleware('web')->namespace('Ricadesign\LaravelCart')->group(function() {
    Route::get('cart', 'CartController@index');
    Route::post('cart', 'CartController@store');
});