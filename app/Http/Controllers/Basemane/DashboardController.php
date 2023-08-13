<?php

namespace App\Http\Controllers\Basemane;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home.main');
    }
}
