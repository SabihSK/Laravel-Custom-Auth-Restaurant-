<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Session;

class DeleteController extends Controller
{
    public function deleteResto($id, Request $request){
        $restaurantDB = new Restaurant;
        $restaurantDB->find($id)->delete();
        $request->session()->flash("status","Restaurant has been deleted");
        // Session::flash("status","Restaurant has been deleted");    //both session can be use.
        return redirect("/list");
    }
}
