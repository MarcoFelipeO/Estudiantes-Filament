<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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



Route::get('/mysql', function () {
    try {
        DB::connection('mysql')->getPdo();
        return 'Conexión MySQL exitosa';
    } catch (\Exception $e) {
        return 'Error al conectar con mysql: ' . $e->getMessage();
    }
});
