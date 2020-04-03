<?php 
namespace App\Functions;
use DB;
class databaseFunction{
    public static function storeResidence($data){
        DB::table("residences")->insert($data);
    }
    public static function getMyResidences($req){
        return DB::table('residences')->where("officer_id",$req->session()->get("id"))->paginate(10);
    }
    public static function getResidenceIds($residences){
        $residenceIds=[];
        foreach($residences as $res){
            array_push($residenceIds,$res->id);
        }
        return $residenceIds;
    }
    public static function getApplicationToMyResidence($resIds){
        $applications =[];
        foreach($resIds as $id){
            $result = DB::table('application')->where("residence_id",$id)->get();
            $applications[$id]=$result;
        }
        return $applications;
    }

    public static function getResidences($req){
        return DB::table('residences')
            ->where("monthly_rental","<=",$req->session()->get("monthly_income"))
            ->where("unit_available",">",0)
            ->paginate(10);
    }

    public static function storeApplication($data){
        DB::table("application")->insert($data);
    }

    public static function getMyApplication($req){
        return DB::table('application')->where("applicant_id",$req->session()->get("id"))->paginate(10);
    }
    public static function getResidenceIdsFromApplication($applications){
        $residenceIds=[];
        foreach($applications as $i){
            array_push($residenceIds,$i->residence_id);
        }
        return $residenceIds;
    }
    public static function getResidenceToMyApplication($residenceIds){
        $residences =[];
        foreach($residenceIds as $id){
            $result = DB::table('residences')->where("id",$id)->first();
            $residences[$id]=$result;
        }
        return $residences;
    }
}
?>