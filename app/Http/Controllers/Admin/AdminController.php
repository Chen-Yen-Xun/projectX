<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view("admin.login");
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
            // 非管理員權限900, 禁止登入後台
            if($member->Level != 900){
                return back()->withInput()->withErrors(["msg" => "權限不足"]);
            }else{
            // session 暫存在伺服器端, 直到清除或過期為止
            session()->put("member_Username", $req->Username);
            // 帳密符合, 轉址
            return redirect("/admin/home");
            }
        }
    }
    public function home()
    {
        return view("admin.home");
    }

    public function doLogout()
    {
        session()->put("member_Username", "");
        return redirect("/admin");
    }
}
