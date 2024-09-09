<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function logo()
    {
        return view("front.logo");
    }
}
