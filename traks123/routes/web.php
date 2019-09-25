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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['App\Http\Middleware\IsAdmin']], function () {
    Route::resources(['darbavieta' => 'DarbavietaController',
    'profesija' => 'ProfesijaController']);
});
Route::group(['middleware' => 'auth'], function() {
    Route::resources(['vidprofesija' => 'VidProfesijaController',
                    'viddarbavieta' => 'VidDarbavietaController',
                    'atalgojums' => 'AtalgojumsController',
                    'admin' => 'AdminController']);
});

Auth::routes();
Route::delete('/atalgojums/{atalgojums}', 'AtalgojumsController@destroy');

Route::get('/admin/delete_atalgojums', 'AdminController@delete_atalgojums');




