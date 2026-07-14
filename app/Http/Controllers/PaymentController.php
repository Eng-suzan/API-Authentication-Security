<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
     public function index()
    {
        return view('payment');
    }
  public function process(Request $request)
    {
        return response()->json([
            'message' => 'Payment Completed Successfully',
            'status' => true,
            'customer' => $request->name,
            'amount' => $request->amount
        ]);
    }   
}
