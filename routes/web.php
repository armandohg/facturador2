<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
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

Route::controller(InvoiceController::class)->group(function () {
    Route::get('invoice', 'index');
    Route::get('invoice/{invoice}', 'show');
    Route::post('invoice', 'store');
});


Route::controller(CompanyController::class)->group(function () {
    Route::get('company', 'index');
    Route::get('company/{company}', 'show');
    Route::post('company', 'store');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('client', 'index');
    Route::get('client/{client}', 'show');
    Route::post('client', 'store');
});
