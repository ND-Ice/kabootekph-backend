<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'auth:sanctum'], function () {

Route::post('/home', [HomeController::class, 'create']);
Route::put('/home/{id}', [HomeController::class, 'update']);
Route::delete('/home/{id}', [HomeController::class, 'destroy']);

// services
Route::post('/service', [ServicesController::class, 'create']);
Route::put('/service/{id}', [ServicesController::class, 'update']);
Route::delete('/service/{id}', [ServicesController::class, 'destroy']);

// about
Route::post('/about', [AboutController::class,   'create']);
Route::put('/about/{id}', [AboutController::class, 'update']);
Route::delete('/about/{id}', [AboutController::class, 'destroy']);

// contact -> email
Route::post('/emails', [EmailController::class, 'create']);
Route::put('/emails/{id}', [EmailController::class, 'update']);
Route::delete('/emails/{id}', [EmailController::class, 'destroy']);

// contact -> phone
Route::post('/phones', [PhoneController::class, 'create']);
Route::put('/phones/{id}', [PhoneController::class, 'update']);
Route::delete('/phones/{id}', [PhoneController::class, 'destroy']);

// contact -> address
Route::post('/address', [AddressController::class, 'create']);
Route::put('/address/{id}', [AddressController::class, 'update']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);

// themes
Route::post('/themes', [ThemeController::class, 'create']);
Route::put('/themes/{id}', [ThemeController::class, 'update']);
Route::delete('/themes/{id}', [ThemeController::class, 'destroy']);
// });


Route::get('/home', [HomeController::class, 'get']);
Route::get('/service', [ServicesController::class, 'get']);
Route::get('/about', [AboutController::class, 'get']);
Route::get('/emails', [EmailController::class, 'get']);
Route::get('/phones', [PhoneController::class, 'get']);
Route::get('/address', [AddressController::class, 'get']);
Route::get('/themes', [ThemeController::class, 'get']);
Route::post("login", [UserController::class, 'index']);
