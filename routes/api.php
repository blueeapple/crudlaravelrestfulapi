<?php

use Illuminate\Http\Request;

//route input data
Route::post('cheese/input','ClientController@inputData');
Route::get('cheese','ClientController@showData');
Route::put('cheese/{id}','ClientController@updateData');
Route::delete('cheese/del/{id}','ClientController@deleteData');