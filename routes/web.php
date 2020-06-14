<?php
use Illuminate\Support\Facades\Route;
Route::get('/json','JsonController@index');
Route::get('/hello','HelloController@index');
