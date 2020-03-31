<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class dashboardController extends Controller{
    function index(Request $req){
        
        if(checkerFunction::checkLogin($req)){
            if(checkerFunction::checkHousingOfficer($req)){
                return redirect("/applications");
            }else{
                return redirect("/residences");
            }
        }else{
            return redirect("/login");
        }
    }
}
?>