<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class AddController extends Controller
{
    public function addDataInDB(Request $request)
    {
        // return $request->input();
        $restaurantDB = new Restaurant;
        $restaurantDB->name = $request->input('name');
        $restaurantDB->email = $request->input('email');
        $restaurantDB->address = $request->input('address');
        $restaurantDB->save();
        $request->session()->flash('status', 'Restaurant added successfully');
        return redirect("/list");
    }
}
