<?php
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;
use App\Functions\databaseFunction;

class getHistoryController extends Controller{
    function index(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return redirect("/login");
        }
        if(checkerFunction::checkHousingOfficer($req)){
            return redirect("/");
        }
        $application=databaseFunction::getMyApplication($req);
        $residenceIds=databaseFunction::getResidenceIdsFromApplication($application);
        $residences=databaseFunction::getResidenceToMyApplication($residenceIds);
        return view("pages.applicant.applicationHistory",["applications"=>$application,"residences"=>$residences]);
    }
    function cancel(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return redirect("/login");
        }
        if(checkerFunction::checkHousingOfficer($req)){
            return redirect("/");
        }
        $data = $req->validate([
            "id"=>"required"
        ]);
        DB::table("application")->where("id",$data["id"])->delete();
        return response()->json([
            "success"=>true
        ], 200);
    }
}
?>