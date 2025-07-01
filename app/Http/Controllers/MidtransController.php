<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MidtransService;

class MidtransController extends Controller
{
    protected $midtrans;

    public function __construct(MidtransService $midtrans)
    {
        $this->midtrans = $midtrans;
    }

    public function createTransaction(Request $request)
    {
        $request->validate([
            'order_id' => 'required|string',
            'amount' => 'required|numeric',
            'customer' => 'required|array',
        ]);

        $token = $this->midtrans->createTransaction(
            $request->order_id,
            $request->amount,
            $request->customer
        );

        return response()->json([
            'token' => $token,
        ]);
    }
}
