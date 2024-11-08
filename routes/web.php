<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\government_agencies_staffsController;
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

Route::get(
    '/sdgs', function () 
    {
        return view('introl_sdgs');
    }
);

Route::get('government_agencies_staffs', [government_agencies_staffsController::class, 'index']

);