<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        return view('pages.user.order', ['data' => $user], ['pages' => 'Checkouts']);
    }

    public function standartClean(Request $request)
    {
        $user = Auth::user();

        $count = $request->get('jumlah');
        $total = $count * 30000;
        
        return view('pages.user.standartclean', ['data' => $user], ['price' => $total, 'pages' => 'Order']);
    }

    public function orderSaya()
    {
        return view('pages.user.ordersaya', ['pages' => 'MyOrder']);
    }
    
    public function indexAdmin()
    {
        return view('pages.home');
    }
}