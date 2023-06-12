<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\http\Controllers\AlbumController;
use App\http\Controllers\SettingsController;
use App\http\Controllers\UserController;
use App\http\Controllers\LoginController;
use App\http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'menus'     => MenuController::class,
    'sliders'   => SliderController::class,
    'albums'    => AlbumController::class,
    'settings'  => SettingsController::class,
    'users'     => UserController::class,
]);

Route::post('author/refresh-token', [LoginController::class, 'refreshToken']);

Route::prefix('auth')->group(function(){
    Route::post('/login', [AuthController::class, 'login']);
    Route::delete('/logout', [AuthController::class,'logout']);
    Route::post('/refresh-token',[AuthController::class,'refreshToken']);
});