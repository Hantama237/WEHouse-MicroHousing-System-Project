<?php 
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;
use App\Functions\databaseFunction;

class setUpResidenceController extends Controller{
    
    function index(Request $req){
        if(checkerFunction::checkLogin($req)){
            if(checkerFunction::checkHousingOfficer($req)){
                $residences=databaseFunction::getMyResidences($req);
                $residenceIds=databaseFunction::getResidenceIds($residences);
                $applications=databaseFunction::getApplicationToMyResidence($residenceIds);
                return view("pages.setUpResidence",["residences"=>$residences,"applications"=>$applications]);
            }else 
                return redirect("/");
        }else{
            return redirect("/login");
        }
    }
    function addResidence(Request $req){
        $data=$req->validate([
            "name"=>"required|string",
            "address"=>"required|string",
            "num_of_unit"=>"required|numeric",
            "unit_available"=>"required|numeric",
            "size_per_unit"=>"required|numeric",
            "monthly_rental"=>"required|numeric"
        ]);
        $data["officer_id"]=$req->session()->get("id");
        //dd($data);
        databaseFunction::storeResidence($data);
        return redirect("/residences/setup");
    }
}
?>