<?php 
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class logoutController extends Controller{
    function index(Request $req){
        if(checkerFunction::checkLogin($req)){
            $req->session()->flush();
        }
        return redirect("/login");
    }
    
}
?>