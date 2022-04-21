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

Route::get('/pizzas', function () {
    //getdata from db

    $pizzas = [
        ['type' => 'Bbq', 'base'=> 'classic'], 
        ['type' => 'Supreme', 'base'=> 'cheesy crust'], 
        ['type' => 'Cheese', 'base'=> 'thin']
    ]; 

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => request('name'), 
        'age' => request('age')
    ]);
});


