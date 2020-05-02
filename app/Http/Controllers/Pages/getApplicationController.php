<?php 
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Carbon\Carbon;
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
        $units=databaseFunction::getUnits($residenceIds);
        return view("pages.housingofficer.application",["residences"=>$residences,"applications"=>$applications,"units"=>$units]);
    }
    function reject(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return response()->json([
                "success"=>false
            ], 403);
        }
        if(!checkerFunction::checkHousingOfficer($req)){
            return response()->json([
                "success"=>false
            ], 403);
        }
        $data = $req->validate([
            "id"=>"required"
        ]);
        
        DB::table("application")->where("id",$data["id"])->update(["status"=>-1]);

        return response()->json([
            "success"=>true
        ], 200);
    }
    function allocate(Request $req){
        if(!checkerFunction::checkLogin($req)){
            return response()->json([
                "success"=>false
            ], 403);
        }
        if(!checkerFunction::checkHousingOfficer($req)){
            return response()->json([
                "success"=>false
            ], 403);
        }
        $dateFrom = $req->input("date_from");
        $dateEnd = $req->input("date_end");
        $applicationId = $req->input("id");
        $data=[
            "date_from" => Carbon::createFromFormat('d/m/Y', $dateFrom),
            "date_end"  => Carbon::createFromFormat('d/m/Y', $dateEnd),
            "duration"  => $req->input("duration"),
            "unit_id"   => $req->input("unit_id")
        ];
        $idAllocation = DB::table("allocation")->insertGetId($data);
        $unit=DB::table("unit")->where("id",$req->input("unit_id"))->update([
            "avaibility"=>false
        ]);
        $unit=DB::table("unit")->where("id",$req->input("unit_id"))->first();
        DB::table("residences")->where("id",$unit->residence_id)->decrement("unit_available");
        DB::table("application")->where("id",$applicationId)->update([
            "allocation_id"=>$idAllocation,
            "status"=>1
        ]);

        return response()->json([
            "success"=>true
        ], 200);
    }
}
?>