<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    //
    function show($id)
    {
        $data = Shop::find($id);
        return view('pages.coffeeshop')->with('shop',$data);
    }
}
