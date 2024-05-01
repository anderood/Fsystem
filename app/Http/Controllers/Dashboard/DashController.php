<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
