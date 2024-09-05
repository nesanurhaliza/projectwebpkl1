<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function confirm(){
        return view('confirm');

    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['Required','email'],
            'password' => ['Required']
        ]);
        if (Auth::attempt($validate)) {
            return redirect('/user');
        }
        return redirect()->back()->with('pesanLogin', 'Maaf, login anda gagal!');

    }
    public function user(Request $request){
        $data['user'] = User::all();
        $data['total_user'] = $data['user']->count();
        $data['product'] = product::all();

        return view('user', $data);
    }

    public function keranjang(Request $request){

        return view('keranjang');
    }
    public function products(Request $request){

        return view('products');
    }
    public function checkout(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $cartItems = Cart::with('product')->get();
    $total = $cartItems->sum(function ($item) {
        return $item->product->price * $item->quantity;
    });

    $order = Order::create([
        'name' => $validated['name'],
        'address' => $validated['address'],
        'email' => $validated['email'],
        'total' => $total,
    ]);

    foreach ($cartItems as $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $item->product_id,
            'quantity' => $item->quantity,
            'price' => $item->product->price,
        ]);
    }

    // Hapus semua item dari keranjang
    cart::truncate();

    return redirect()->route('checkout.success');
}

public function checkoutForm()
{
    $data['products'] = product::all();
    return view('checkout',$data);
}

public function checkoutSuccess()
{
    // return view('checkout.success');
}
public function index()
{
    $products = Product::all();
    return view('checkout.index', compact('products'));
}

// Menyimpan pesanan baru
public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $product = Product::findOrFail($request->input('product_id'));
    $totalPrice = $product->price * $request->input('quantity');

    Order::create([
        'product_id' => $product->id,
        'quantity' => $request->input('quantity'),
        'total_price' => $totalPrice,
    ]);

    return redirect()->route('checkout.index')->with('success', 'Order placed successfully!');
}

// Menampilkan riwayat pesanan
public function orders()
{
    $orders = Order::with('product')->get();
    return view('checkout.orders', compact('orders'));
}

}
