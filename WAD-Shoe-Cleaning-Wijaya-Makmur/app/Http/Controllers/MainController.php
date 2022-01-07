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

    public function standartClean(Request $request)
    {
        $user = Auth::user();
        
        return view('pages.user.standartclean', ['data' => $user], ['pages' => 'Order']);
    }

    public function indexAdmin()
    {
        return view('pages.home');
    }
}