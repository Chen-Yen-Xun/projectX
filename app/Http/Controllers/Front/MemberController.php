<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function list(Request $req)
    {
        // $list:變數名稱
        // Member:Model
        // get:取全部資料, 也可用all
        // $list = Member::all();
        $list = (new Member())->getList();

        // member.list : member是資料夾, list是檔名
        // view的副檔名為.blade.php
        // compact:將取得的資料傳至網頁
        // compact中用引號,沒有$
        return view("member.list", compact("list",));
    }

    public function add()
    {
        return view("member.add");
    }

    public function insert(Request $req)
    {
        $member = new Member();
        $member->Username = $req->Username;
        $member->Password = $req->Password;
        $member->Email = $req->Email;
        $member->save();

        Session::flash("message", "註冊成功！");
        return redirect("/index");
    }

    public function edit(Request $req)
    {
        // $req->id的id來自路由的id, 
        // 如果路由中的參數為abc, 則$req->abc
        // find:尋找
        $member = Member::find($req->id);

        return view("member.edit", compact("member"));
    }

    public function update(Request $req)
    {
        $member = Member::find($req->id);
        $member->Username = $req->Username;
        $member->Password = $req->Password;
        $member->Email = $req->Email;
        // 也可用 $member->update();
        $member->save();

        Session::flash("message", "已修改");
        return redirect("/member/list");
    }

    public function delete(Request $req)
    {
        Member::find($req->id)->delete();
        echo("OK");
    }

    public function checkUser(Request $req)
    {
        $member = (new Member())->checkUser($req->Username);
        if (!empty($member))
        {
            echo("exist");
        }
    }
}
