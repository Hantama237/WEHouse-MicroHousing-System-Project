<?php
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Carbon\Carbon;

use App\Functions\checkerFunction;
use App\Functions\databaseFunction;

class getResidenceController extends Controller{
    function index(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return redirect("/login");
        }
        if(checkerFunction::checkHousingOfficer($req)){
            return redirect("/");
        }
        $residences=databaseFunction::getResidences($req);
        return view("pages.applicant.residences",["residences"=>$residences]);
    }
    function addApplication(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return redirect("/login");
        }
        if(checkerFunction::checkHousingOfficer($req)){
            return redirect("/");
        }
        $data=$req->validate([
            "required_month"=>"required|numeric",
            "required_year"=>"required|numeric",
            "residence_id"=>"required"
        ]);
        $data["applicant_id"]=$req->session()->get("id");
        $data["application_date"]=Carbon::now();
        // dd($data);
        databaseFunction::storeApplication($data);
        return redirect("/applications/history");
    }
}
?>