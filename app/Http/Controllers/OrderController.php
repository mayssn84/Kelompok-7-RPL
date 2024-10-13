<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function create($productId)
{
    $product = Product::find($productId);
    return view('orders.create', compact('product'));
}

public function store(Request $request)
{
    $order = new Order();
    $order->name = $request->name;
    $order->address = $request->address;
    $order->product = $request->product;
    $order->quantity = $request->quantity;
    $order->save();

    // Redirect to WhatsApp
    $message = "Pemesanan atas nama: {$request->name}\nProduk: {$request->product}\nJumlah: {$request->quantity}";
    $whatsappUrl = "https://wa.me/6282191262262?text=" . urlencode($message);
    return redirect($whatsappUrl);
}
}
