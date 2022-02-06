<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class ListController extends Controller
{
    public function index()
    {
        $restaurentDBdata = Restaurant::all();
        return view("list", ["restaurentDBdata" => $restaurentDBdata]);
    }
}
