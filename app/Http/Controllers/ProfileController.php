<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    //
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
