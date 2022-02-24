<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PropertiesController;
use App\Http\Controllers\backend\CalendarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/properties', [PropertiesController::class, 'create']);

Route::get('/property', [PropertiesController::class, 'getproperty']);

Route::get('/sorting/{name}/{slug}', [PropertiesController::class, 'sorting']);

Route::get('/calendars', [CalendarController::class, 'index']);

Route::post('/calendar', [CalendarController::class, 'create']);

Route::post('/getevent', [CalendarController::class, 'getevent']);

Route::post('/geteventdate', [CalendarController::class, 'geteventdate']);

Route::get('/gettodaysevent', [CalendarController::class, 'gettodaysevent']);

Route::get('/getallcalendarevent', [CalendarController::class, 'getallcalendarevent']);

Route::get('/getcurrentdate', [CalendarController::class, 'getcurrentdate']);