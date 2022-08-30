<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;



Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);

Route::middleware(['auth:sanctum','isAPIAdmin'])->group(function () {
    Route::post('logout',[AuthController::class,'logout']);

    Route::get('/checkingAuthenticated', function(){
        return response()->json(['message'=>'you sre in', 'status'=>200],200);
    });

});


