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
Route::post('observations/store', [AgencyStatisticsController::class,'store'])->name('observations.store');
Route::get('observations/create', [AgencyStatisticsController::class,'create'])->name('observations.create');
Route::get('observations', [AgencyStatisticsController::class,'index'])->name('observations.index');
Route::get('observations/{id}', [AgencyStatisticsController::class,'show'])->where('id','[0-9]+')->name('observations.show');
Route::get('observations/{id}/edit', [AgencyStatisticsController::class,'edit'])->where('id','[0-9]+')->name('observations.edit');
Route::patch('observations/update/{id}', [AgencyStatisticsController::class,'update'])->where('id','[0-9]+')->name('observations.update');
Route::delete('observations/delete/{id}', [AgencyStatisticsController::class,'destroy'])->name('observations.destroy');
