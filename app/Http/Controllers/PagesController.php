<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

// error D:
class PagesController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view("pages.index")->with('shops',$shops);
        // return view('pages.index', ['shops'=>$shops]);
    }

    public function about()
    {
        return view("pages.about");
    }
}