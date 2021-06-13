<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Review;
use App\Models\User;

class ShopController extends Controller
{
    //
    function show($id)
    {
        $data = Shop::find($id);
        $reviews = Review::all();
        $users = User::all();

        return view('pages.coffeeshop')->with('shop',$data)->with('reviews',$reviews)->with('users',$users);
    }

    function review(Request $req)
    {
        $req->validate([
            'user_id' => 'required',
            'shop_id' => 'required',
            'review_body' => 'required',
        ]);

        $data = User::find($req->user_id);
        $data->review = $data->review + 1;
        $data->save();

        Review::create($req->all());
        
        return back();
    }
}
