<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CheckoutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TransactionDetail;
use App\Transaction;
use App\Product;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request) {
        $data = $request->except('transaction_details');
        $data['uuid'] = 'TRX' . mt_rand(10000,99999) . mt_rand(100,999);

        $transaction = Transaction::create($data);
        foreach ($request->transaction_details as $item) {
            $details[] = new TransactionDetail([
                'transaction_id' => $transaction->id,
                'product_id' => $item
            ]);

            Product::find($item)->decrement('stock');
        }

        $transaction->details()->saveMany($details);

        return ResponseFormatter::success($transaction);
    }
}
