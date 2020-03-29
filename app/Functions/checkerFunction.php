<?php 
namespace App\Functions;
class checkerFunction{
    public static function checkLogin($req){
        if($req->session()->get("login")==true)
        return true;
        else
        return false;
    }
}
?>