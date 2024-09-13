<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function list()
    {
        $list = Member::paginate(10);
    }
}
