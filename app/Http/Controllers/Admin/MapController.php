<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function map()
    {
        return view("admin.map.map");
    }

    public function getCoordinate()
    {
        $map = (new Member())->get();
        return response()->json(array('success' => true, 'data' => $map));
    }
}
