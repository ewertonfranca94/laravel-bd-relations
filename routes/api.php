<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

use Illuminate\Support\Facades\Route;

// um usuario, para um endereço

Route::get('/users', [UserController::class, 'index']);

//Buscar um usuario pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

//Inserir um Novo usuario
Route::post('/users', [UserController::class, 'create']);


Route::get('/addresses', [AddressController::class, 'index']);

//Buscar um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

//Inserir um Novo usuario
Route::post('/addresses', [AddressController::class, 'create']);


//
Route::post('/addresses', [AddressController::class, 'create']);