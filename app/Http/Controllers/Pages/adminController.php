<?php
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Carbon\Carbon;
use App\Functions\checkerFunction;
use App\Functions\databaseFunction;

class adminController extends Controller{
    function index(Request $req){
        if($req->session()->get("admin")==true){
            return redirect("/admin");
        }
        return view("pages.admin.login");
    }
    function login(Request $req){
        if($req->session()->get("admin")==true){
            return redirect("/admin");
        }
        $data= $req->validate([
            "username"=>"required",
            "password"=>"required"
        ]);
        $admin=DB::table("admin")->where("username",$data["username"])->first();
        $password=$admin->password;
        $req->session()->flush();
        if(Hash::check($data["password"],$password)){
            $loginData = [
                "admin"=>true
            ];
            $req->session()->put(
                $loginData
            );
            return redirect("/admin");
        }
        return redirect()->back()->withInput();
        
    }
    function dashboard(Request $req){
        if(!$req->session()->get("admin")==true){
            return redirect("/admin/login");
        }
        return view("pages.admin.dashboard");
    }
    function registerHO(Request $req){
        if(!$req->session()->get("admin")==true){
            return redirect("/admin/login");
        }
        return view("pages.admin.registerho");
    }
    function registerHoSubmit(Request $req){
        if(!$req->session()->get("admin")==true){
            return redirect("/admin/login");
        }
        $data=$req->validate([
            "fullname"=>"required",
            "email"=>"required",
            "username"=>"required",
            "staff_id"=>"required",
            "password"=>"required"
        ]);
        $data["role"]=1;
        $isPasswordSame = $data["password"]==$req->input("password-confirmation");
        $data["password"]=bcrypt($data["password"]);
        $email=DB::table("users")->where("email",$data["email"])->first();
        $username=DB::table("users")->where("username",$data["username"])->first();
        
        if(!isset($email) && !isset($username)){
            DB::table("users")->insert($data);
            return redirect("/admin");
        }
        //dd($email);
        return redirect("/admin/register/housing-officer");
    }
}?>