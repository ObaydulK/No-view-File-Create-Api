<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReDemoController;
use App\Http\Controllers\ReUserController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/demo", [DemoController::class, "demo"]);
Route::get('/redemo', [ReDemoController::class, 'redemo']);

Route::get('/moredemo', [ReDemoController::class,'moredemo']);

Route::get('/userdata', [UserController::class,'userdata']);
Route::get('/reuserdata', [ReUserController::class,'reuserdata']);
Route::get('/singledata/{User}', [UserController::class,'singledata']);


Route::get('/demos', [MainController::class, 'demos']);
Route::get('/mainusers', [MainController::class,'mainusers']);


Route::get('/show/{user}', [MainController::class,'show']);