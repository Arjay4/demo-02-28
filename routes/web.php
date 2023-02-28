<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', function () {
    return view('person', [
        'name' => 'Arjay B. Bascon',
        'age' => 21,
        'address' => 'Santiago, Balatan, Cam Sur',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Layla',
            'age' => 18 
        ], 
        [
            'name' => 'Miya',
            'age' => 15
        ], 
        [
            'name' => 'Angela',
            'age' => 19
        ], 
        [
            'name' => 'Lolita',
            'age' => 17
        ], 
        [
            'name' => 'Fanny',
            'age' => 29
        ], 
    ]
    ]);
});
