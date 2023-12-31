<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvController;

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

Route::get('show-data', [CsvController::class, 'view_data']);
Route::get('csv-convert', [CsvController::class, 'export'])->name('export.cities');
