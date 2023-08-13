<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerview()
    {
        return view('home.Auth.login');
    }

    public function registerrequest(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (User::where('email', $request->email)->count() === 0) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->intended('/login')->with('success', $user->first_name  . 'Registration Successfully');
        } else {
            return redirect()->intended('/login')->with('status', 'user-Already exists');
        }
    }
}
