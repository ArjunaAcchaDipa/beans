<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Shop;
use App\Models\Review;

class ProfileController extends Controller
{
    //
    function profile($id)
    {
        $users = User::find($id);
        $shops = Shop::all();
        $reviews = Review::all();

        return view('pages.profile')->with('user',$users)->with('shops',$shops)->with('reviews',$reviews);
    }

    function show($id)
    {
        $data = User::find($id);
        return view('pages.editprofile', ['user'=>$data]);
    }

    function update(Request $req)
    {
        $data = User::find($req->id);

        if ($req->name)
        {
            $data->name = $req->name;
        }
        if ($req->email)
        {
            $data->email = $req->email;
        }
        if ($req->profile_pict)
        {
            $data->profile_pict = $req->profile_pict;
        }
        if ($req->description)
        {    
            $data->description = $req->description;
        }
        if ($req->password)
        {
            $data->password = Hash::make($req->password);
        }

        $data->save();

        return redirect('profile');
    }
}
