<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        "createTime"
    ];

    public function getMember($Username, $Password)
    {
        $member = self::where("Username", $Username) 
            ->where("Password", $Password)->first();

        return $member;
    }
}
