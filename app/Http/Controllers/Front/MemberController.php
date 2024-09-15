<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
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
        // $member->Username = $req->Username;
        $member->Password = $req->Password;
        $member->Email = $req->Email;
        // 也可用 $member->update();
        $member->save();

        Session::flash("message", "已修改");
        return redirect("/member/list");
    }

    public function checkUser(Request $req)
    {
        $member = (new Member())->checkUser($req->Username);
        if (!empty($member))
        {
            echo("exist");
        }
    }

    public function doLogin(Request $req)
    {
        if (captcha_check($req->code) == false)
        {
            return back()->withInput()->withErrors(["code" => "驗證碼錯誤"]);
            exit;
        }

        $member = (new Member())->getMember($req->Username, $req->Password);
        // 如果無此帳密
        if (empty($member))
        {
            // back():回到前一頁
            // withInput:保留前一的輸入資料
            // withErrors:回傳錯誤訊息到前一頁
            return back()->withInput()->withErrors(["msg" => "帳號或密碼錯誤"]);
        }else{
            // 登入後判別會員等級 存入Session
            session()->put("member_Level", $req->Level);
            // session 暫存在伺服器端, 直到清除或過期為止
            session()->put("member_Username", $req->Username);
            
            // 帳密符合, 轉址
            return redirect("/index");
        }
    }

    public function doLogout()
    {
        session()->put("member_Username", "");
        session()->put("member_Level", "");
        return redirect("/index");
    }
}
