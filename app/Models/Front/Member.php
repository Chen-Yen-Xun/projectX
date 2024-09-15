<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "member";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "Username",
        "Password",
        "Tel",
        "Email",
        "City",
        "State",
        "Level",
        "createTime"
    ];

    public function checkUser($Username)
    {
        $member = self::where("Username", $Username)->first();
        return $member;
    }

    public function getList()
    {
        $list = DB::table("member")->paginate(10);

        return $list;
    }

    public function getMember($Username, $Password)
    {
        $member = self::where("Username", $Username) 
            ->where("Password", $Password)
            ->first();

        return $member;
    }
}
