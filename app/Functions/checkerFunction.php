<?php 
namespace App\Functions;
class checkerFunction{
    public static function checkLogin($req){
        if($req->session()->get("login"))
        return true;
        else
        return false;
    }
}
?>