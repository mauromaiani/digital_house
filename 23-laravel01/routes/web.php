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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/', function () {
//     return 'Creé mi primer ruta en Laravel';
// });


Route::get('/miPrimeraRuta', function() {
  return 'Creé mi primer ruta en Laravel';
});

Route::get('/resultado/{numero}/{null?}', function($numero, $null = null) {
  if ($null)
    return $numero * $null;
  
  return $numero % 2 === 0 ? 'es par':'es impar';
});


// Route::match(['get', 'post'], '/', function () {
//     return 'Creé mi primer ruta en Laravel';
// });
