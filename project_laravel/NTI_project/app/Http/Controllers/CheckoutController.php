<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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
}
