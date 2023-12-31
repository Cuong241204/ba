<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('users', [UserController::class, 'getUser']);

Route::delete('/delete-user', [AdminController::class, 'deleteUser']);

Route::post('register-appointment', [UserController::class, 'registerAppointment']);
Route::get('get-appointments/{email}', [UserController::class, 'getAppointment']);
Route::delete('delete-appointment', [UserController::class, 'deleteAppointment']);
Route::get('/getall-appointments/', [AdminController::class, 'getAllAppointment']);

//message
Route::post('admin/messager/', [AdminController::class, 'sendMessage']);
Route::post('user/messager', [UserController::class, 'sendMessage']);

Route::get('admin/getallmessage/{from}/{to}', [AdminController::class, 'getAllMessage']);
