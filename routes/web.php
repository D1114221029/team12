<?php

use App\Http\Controllers\AgencyStatisticsController;
use App\Models\Oberservation;
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

Route::get('/sdgs', function () {
    return view('intor_sdgs');
});
Route::get('observations', [AgencyStatisticsController::class,'index']);
