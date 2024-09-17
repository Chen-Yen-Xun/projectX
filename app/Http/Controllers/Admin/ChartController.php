<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart()
    {
        return view("admin.chart.chart");
    }

    public function getList()
    {
        $number = (new Member())->getNumber();
        return response()->json(array('success' => true, 'data' => $number));
    }

    public function getAll()
    {
        $all = (new Member())->getCityNumber();
        return response()->json(array('success' => true, 'data' => $all));
    }
}
