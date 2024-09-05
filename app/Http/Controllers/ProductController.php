<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // app/Http/Controllers/ProductController.php
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function addToCart(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
    public function cart()
    {
        $cart = session()->get('cart',[]);
        return view('products.cart',compact('cart'));

    }


}
