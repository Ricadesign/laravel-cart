<?php
Route::middleware('web')->prefix('api')->namespace('Ricadesign\LaravelCart')->group(function() {
    Route::get('cart', 'CartController@index');
    Route::post('cart', 'CartController@store');
    Route::delete('cart', 'CartController@remove');
});