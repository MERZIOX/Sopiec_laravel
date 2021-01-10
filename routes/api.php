<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UsersAdminController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group middleware auth api es para proteger la api con auth
// Definición de rutas en laravel 8 Ruote::Metodo('nombreRuta',[NombreController],'Nombre metodo')->name('NombreOpcional')

Route::post('NewUser',[UserLoginController::class, 'store'])->name('NewUSer');
Route::post('login',[UserLoginController::class, 'login'])->name('login');
// Proteger api
Route::group(['middleware'=>'auth:api'], function(){
    Route::apiResource('/users', App\Http\Controllers\UsersAdminController::class);
    Route::post('logout',[UserLoginController::class, 'logout'])->name('logout');
});
