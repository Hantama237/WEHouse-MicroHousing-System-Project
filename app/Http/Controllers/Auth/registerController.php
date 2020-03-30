<?php 
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class registerController extends Controller{
    function index(Request $req){
        if(checkerFunction::checkLogin($req)){
            return redirect("/");
        }
        return view("auth.register");
    }
    
    function register(Request $req){
        if(checkerFunction::checkLogin($req)){
            return redirect("/");
        }
        if($req->has("register")){
            $req->validate([
                "fullname"=>"required|string",
                "email"=>"required|email",
                "monthlyincome"=>"required|numeric",
                "username"=>"required",
                "password"=>"required|confirmed"
            ]);

            $userData=[
                "fullname" => $req->input("fullname"),
                "email" => $req->input("email"),
                "monthly_income" => $req->input("monthlyincome"),
                "username" => $req->input("username"),
                "password" => bcrypt($req->input("password")),
                "role"=>0
            ];
            //dd(checkerFunction::isUsernameExists($email,$username));
            if(!checkerFunction::isUsernameExists($userData["email"],$userData["username"])){
                DB::table("users")->insert($userData);
            }else{
                return redirect()->back()->withInput();
            }
        }
        return redirect("/login");
    }
}
?>