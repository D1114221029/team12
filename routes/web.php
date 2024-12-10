<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovernmentAgenciesStaffsController;
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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/sdgs', function () 
{
    return view('introl_sdgs');
}
);
#處存一筆資料
Route::post('observations/store', [GovernmentAgenciesStaffsController::class, 'store'])
    ->name('observations.create');
#新增表單
Route::get('observations/create', [GovernmentAgenciesStaffsController::class, 'create'])
    ->name('observations.create');
#查詢資料
Route::get('observations', [GovernmentAgenciesStaffsController::class, 'index'])
    ->name('observations.index');
#查詢資料
Route::get('observations/{id}', [GovernmentAgenciesStaffsController::class, 'show'])
    ->where('id','[0-9]+')
    ->name('observations.show');
#編輯資料
Route::get('observations/{id}/edit', [GovernmentAgenciesStaffsController::class, 'index'])
    ->where('id','[0-9]+')
    ->name('observations.edit');
#刪除資料
Route::delete('observations/delete/{id}', [GovernmentAgenciesStaffsController::class, 'destroy'])
    ->where('id','[0-9]+')
    ->name('observations.destroy');
