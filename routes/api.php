<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'jwt.verify','prefix' => 'auth'], function () {

    Route::post('register', 'AuthController@register')->withoutMiddleware('jwt.verify');
    Route::post('login', 'AuthController@login')->withoutMiddleware('jwt.verify');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group(['middleware' => 'jwt.verify'], function () {
    
    /*** others route here without auth prefix****/

});