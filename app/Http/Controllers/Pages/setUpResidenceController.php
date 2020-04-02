<?php 
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class setUpResidenceController extends Controller{
    function storeResidence($data){
        DB::table("residences")->insert($data);
    }
    function index(Request $req){
        if(checkerFunction::checkLogin($req)){
            if(checkerFunction::checkHousingOfficer($req))
                return view("pages.setUpResidence");
            else 
                return redirect("/");
        }else{
            return redirect("/login");
        }
    }
    function addResidence(Request $req){
        $data=$req->validate([

        ]);
        dd($data);
    }
}
?>