<?php

namespace App\Models\Admin;

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

    public function getMember($Username, $Password)
    {
        $member = self::where("Username", $Username) 
            ->where("Password", $Password)
            ->first();

        return $member;
    }

    public function getNumber()
    {
        $number = Member::selectRaw('COUNT(Level) as Levelnum, Level')
        ->groupBy('Level')
        ->get();

        return $number;
    }

    public function getCityNumber()
    {
        $cityCounts = Member::selectRaw('COUNT(IFNULL(City, 1)) as City_Count, City')
        ->groupBy('City')
        ->get();

        return $cityCounts;
    }
}
