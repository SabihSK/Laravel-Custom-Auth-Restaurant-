<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Session;

class UpdateController extends Controller
{
    public function editResto($id)
    {
        return view('edit', ['restaurantIdData' => Restaurant::find($id)]);
    }
    public function updateResto(Request $request)
    {
        $restaurant = Restaurant::find($request->input('id'));
        $restaurant->name = $request->input('name');
        $restaurant->email = $request->input('email');
        $restaurant->address = $request->input('address');
        $restaurant->save();
        Session::flash("status","Restaurant has been updated");
        return redirect("/list");
    }
}
