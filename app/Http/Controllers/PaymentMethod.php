<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class PaymentMethod extends Controller
{
    public function createQR()
    {
        // 1. Create REAL order in database
        $orderId = DB::table('orders')->insertGetId([
            'total_price' => 10,
            'status' => 'PENDING',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Use REAL order data
        $order = [
            'id' => $orderId,
            'total_price' => 10.00
        ];

        // 3. Call Payment API
        $response = Http::post('https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase', [
            'amount' => $order['total_price'],
            'order_id' => $order['id']
        ]);

        $data = $response->json();

        // 4. Return QR view
        return view('payment.qr', [
            'qr_image' => $data['qr_image'] ?? null,
            'order' => $order
        ]);
    }
}