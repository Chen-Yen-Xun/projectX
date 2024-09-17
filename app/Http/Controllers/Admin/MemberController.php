<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function list()
    {
        $list = Member::paginate(10);
        return view("admin.member.list", compact("list"));
    }

    public function edit(Request $req)
    {
        // $req->id的id來自路由的id, 
        // 如果路由中的參數為abc, 則$req->abc
        // find:尋找
        $member = Member::find($req->id);

        return view("admin.member.edit", compact("member"));
    }

    public function update(Request $req)
    {
        $member = Member::find($req->id);
        $member->Email = $req->Email;
        $member->Gender = $req->Gender;
        $member->Address = $req->Address;
        $member->Tel = $req->Tel;
        // 也可用 $member->update();
        $member->save();

        Session::flash("message", "修改會員資料成功");
        return redirect("/admin/member/list");
    }

    public function delete(Request $req)
    {
        Member::find($req->id)->delete();
        echo("OK");
    }

    public function level(Request $req)
    {
        $member = Member::find($req->id);
        $member->Level = $req->Level;
        echo("LEVEL_UPDATE");
    }
}
