<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $username = session('member_Username');
        return view("front.index", ['member_Username' => $username]);
    }
}
