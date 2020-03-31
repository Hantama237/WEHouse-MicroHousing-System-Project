<?php 
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class setUpResidenceController extends Controller{
    function index(Request $req){
        if(checkerFunction::checkLogin($req)){
            return view("dashboard");
        }else{
            return redirect("/login");
        }
    }
}
?>