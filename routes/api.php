<?php
use Illuminate\Http\Request;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

// Route::post('/paypal/payment', function (Request $request) {

//     return response()->json([
//         'transaction_id' => fake()->uuid(),
//         'status' => 'success',
//         'amount' => $request->amount,
//         'message' => 'Fake PayPal Payment Success'
//     ]);

// });


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('/logout',[AuthController::class,'logout']);



});