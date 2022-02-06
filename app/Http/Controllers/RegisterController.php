<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        if ($request->input('password') == $request->input('password_confirmation')) {

            $userDB = new User;

            $userDB->name = $request->input('first_name') . ' ' . $request->input('last_name');
            $userDB->email = $request->input('email');
            $userDB->password =  Hash::make($request->input('password'));

            $userDB->save();

            Session::flash("register", "You have been successfully register, Now please login");
            return redirect('/login');
        } else {
            Session::flash("passwordNotMatch", "Please enter same password");
            return redirect("/register");
        }
    }
}
