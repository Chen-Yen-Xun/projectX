<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view("front.shop");
    }

    public function item()
    {
        return view("front.item");
    }
}
