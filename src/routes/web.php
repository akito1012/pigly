<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WeightsController;

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

// route::middleware('auth')->group(function () {
//     Route::get('/weight_logs', [WeightsController::class, 'index']);
// });
Route::get('/weight_logs', [WeightsController::class, 'index']);
Route::get('/weight_logs/create', [WeightsController::class, 'create']);
Route::post('/weight_logs/create', [WeightsController::class, 'weight_logsCreate']);
Route::get('/weight_logs/goal_setting', [WeightsController::class, 'change']);
Route::post('/weight_logs/goal_setting', [WeightsController::class, 'update']);


Route::get('/login', [UsersController::class, 'login']);
Route::post('/login', [UsersController::class, 'login']);
Route::get('/logout', [UsersController::class, 'logout']);
Route::get('/register/step1', [UsersController::class, 'register']);
Route::post('/register/step1', [UsersController::class, 'registerStep1']);
Route::get('/register/step2', [UsersController::class, 'register2']);
Route::post('/register/step2', [UsersController::class, 'registerStep2']);
