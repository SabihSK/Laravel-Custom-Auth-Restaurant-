<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        $userDB = new User;
        $hashPass = $userDB->where("email", $request->input('email'))->get();
        if (Hash::check($request->input('password'), $hashPass[0]->password)) {
            // The passwords match...
            Session::put("userName", $hashPass[0]->name);
            return redirect('/');
        } else {
            Session::flash("register", "Incorrect email or password");
            return redirect('/login');
        }
    }
}
