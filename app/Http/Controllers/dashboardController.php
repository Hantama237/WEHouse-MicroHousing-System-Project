<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkFunction;

class dashboardController extends Controller{
    function index(Request $req){
        if(checkFunction::checkLogin($req)){
            return view("dashboard");
        }else{
            return redirect("/login");
        }
    }
}
?>