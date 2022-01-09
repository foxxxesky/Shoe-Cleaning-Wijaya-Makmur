<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    // FOR USER
    public function index()
    {
        return view('pages.home', ['pages' => 'Home']);
    }

    public function service()
    {
        return view('pages.user.service', ['pages' => 'Service']);
    }

    public function order(Request $request)
    {
        $user = Auth::user();

        $service = $request->get('service');
        if ($service === 'Standart Clean') {
            $count = $request->get('jumlah');
            $total = $count * 30000;
        } elseif ($service === 'Deep Clean') {
            $count = $request->get('jumlah');
            $total = $count * 40000;
        } elseif ($service === 'Premium Clean') {
            $count = $request->get('jumlah');
            $total = $count * 45000;
        } elseif ($service === 'Weekend Clean') {
            $count = $request->get('jumlah');
            $total = $count * 50000;
        }
        
        return view('pages.user.order', ['data' => $user], ['price' => $total, 'pages' => 'Checkouts']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'nama_pemesan' => 'required',
            'no_hp' => 'required',
            'tanggal_pickup' => 'required',
            'alamat_penjemputan' => 'required',
            'alamat_pengiriman' => 'required',
            'alamat_pengiriman' => 'required',
            'pembayaran' => 'required|in:LinkAja,OVO,Gopay,COD',
            'harga' => 'required',
            'catatan' => 'nullable'
        ]);

        Order::create($validatedData);
        return redirect('/OrderSaya')->with('success', 'Order Berhasil!');
    }

    public function orderSaya()
    {
        $orders = Order::all();

        return view('pages.user.ordersaya', ['pages' => 'Order Saya'], compact('orders'));
    }
    
    public function indexAdmin()
    {
        return view('pages.home');
    }
}