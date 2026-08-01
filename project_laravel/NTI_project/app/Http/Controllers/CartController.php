<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->with('items.product')->first();
        $total = 0;

        if ($cart) {
            foreach ($cart->items as $item) {
                $total += $item->product->price * $item->quantity;
            }
        }
        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Product $product)
    {

        // create a cart 
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id()
        ]);

        // is the product exsit?
        $cartItem = CartItem::where('cart_id', $cart->id)->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }


        return back()->with('success', 'Product added successfully.');
    }
    public function increase($id)
    {
        $item = CartItem::findOrFail($id);
        $item->increment('quantity');
        return back();
    }
    public function decrease($id)
    {
        $item = CartItem::findOrFail($id);
        if ($item->quantity > 1) {
            $item->decrement('quantity');
        } else {
            $item->delete();
        }
        return back();
    }
    public function remove($id)
    {
        CartItem::findOrFail($id)->delete();
        return back();
    }
}
