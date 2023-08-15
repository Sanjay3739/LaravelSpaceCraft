<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.user-profile');
        // return view('user.layouts.sidebar');

    }
}
