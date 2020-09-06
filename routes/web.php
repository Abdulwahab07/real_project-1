<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/regions', 'RegionController@index');
Route::post('/regions', 'RegionController@store');
Route::get('/regions/{region}', 'RegionController@show');
Route::put('/regions/{region}', 'RegionController@update');
Route::delete('/regions/{region}', 'RegionController@destroy');

Route::get('/cities', 'CityController@index');
Route::post('/cities', 'CityController@store');
Route::get('/cities/{city}', 'CityController@show');
Route::put('/cities/{city}', 'CityController@update');
Route::delete('/cities/{city}', 'CityController@destroy');

Route::get('/districts', function(){
    $districts = District::orderBy('id')->get();
    return DistrictResource::collection($districts);
});

Route::get('/districts/{district}', function($district){
    $districts = District::findOrFail($district);
    return new DistrictResource($districts);
});
