<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast;

class OrderController extends Controller
{

    public function checkout(Request $request)
    {
        $prod = Product::find($request->product_id)->only(['name', 'stok', 'price']);
        $prod['qty'] = $request->qty;
        $prod['amount'] = $request->qty * $prod['price'];
        return view('pages.checkout', compact('prod'), ["title" => "cHECKOUT"]);
    }
    public function checkouted(Request $request)
    {
        $data = json_decode($request->data_transaction, true);
        // Order::create([$data]);
        $data['user_id'] = auth()->user()->id;
        $data['code'] = Str::uuid();
        // dd($data);
        $order = Order::create([
            'trans_code' => $data['code'],
            'user_id' => $data['user_id'],
            'total_amount' => $data['amount'],
            'status' => 'pending',
        ]);

        // dd($order);
        return view('pages.payment', compact('order'), ['title' => 'Payment']);
    }
    public function payment()
    {
        // $last = Order::latest()->first();

        return view('pages.payment', compact('last'), ['title' => 'payment']);
    }

    public function ordered(Order $order, Request $request)
    {
        // dd($order->total_amount);
        // dd(request()->input('pay'));
        // dd($order->total_amount);
        if ($request->input('pay') < $order->total_amount) {
            return redirect()->route('payment')->with('minus', 'Nominal yang anda masukkan kurang!');
        }
        // dd($order->total_amount ==  request()->only('amount')['amount']);
        $order->update([
            "status" => "complete"
        ]);

        // OrderItem::

        // OrderItem

        return redirect()->route('success-payment');
    }

    public function order_success()
    {
        // $id Order::latest()->where('status', 'complete');

        return view('pages.success-payment', ['title' => 'Thanks!']);
    }
}
