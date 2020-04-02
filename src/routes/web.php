<?php

Route::group(['namespace'=> 'Pondit\Sms\Http\Controllers'], function (){

    Route::get('/sms', 'SmsController@index');

    Route::post('sms', 'SmsController@sendSms')->name('sms');
});


