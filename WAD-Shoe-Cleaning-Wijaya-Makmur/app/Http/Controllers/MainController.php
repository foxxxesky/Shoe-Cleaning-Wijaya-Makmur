<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // FOR USER
    public function index()
    {
        return view('pages.home');
    }

    public function service()
    {
        return view('pages.user.service');
    }

    public function indexAdmin()
    {
        return view('pages.home');
    }
}