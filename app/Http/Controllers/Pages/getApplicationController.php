<?php 
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;
use App\Functions\databaseFunction;

class getApplicationController extends Controller{
    function index(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return redirect("/login");
        }
        if(!checkerFunction::checkHousingOfficer($req)){
            return redirect("/");
        }
        $residences=databaseFunction::getMyResidences($req);
        $residenceIds=databaseFunction::getResidenceIds($residences);
        $applications=databaseFunction::getApplicationToMyResidence($residenceIds);
        
        return view("pages.housingofficer.application",["residences"=>$residences,"applications"=>$applications]);
    }
}
?>