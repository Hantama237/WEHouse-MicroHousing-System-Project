<?php 
namespace App\Functions;
use DB;
class checkerFunction{
    public static function checkLogin($req){
        if($req->session()->get("login")==true)
        return true;
        else
        return false;
    }
    public static function isUsernameExists($email,$username){
        $emailExist = DB::table("users")->where("email",$email)->count()>0;
        $usernameExist = DB::table("users")->where("username",$username)->count()>0;
        return $emailExist || $usernameExist;
    }
}
?>