<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())
            ->with('items.product')
            ->first();

        $total = 0;
        if ($cart) {
            foreach ($cart->items as $item) {
                $total += $item->product->price * $item->quantity;
            }
        }
        return view('checkout.index', compact('cart', 'total'));
    }
    public function placeOrder(Request $request)
    {
        $request->validate([

            'phone' => 'required|min:11|max:11',
            'city' => 'required',
            'address' => 'required|min:10',
            'payment_method' => 'required',

        ]);
        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
