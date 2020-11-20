<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Division;
class AjaxController extends Controller
{
    public function ajax(){
        $divisions = DB::table('divisions')
            ->select('id','name')
            ->get();
        return view('ajax',['divisions'=>$divisions]);
    }

    public function getDistricts($division_id) {
        $districts =  DB::table('district')     //api
                ->select('id','name')
                ->where('division_id', '=', $division_id)
                ->get();

        return response()->json([
            'district' => $districts,
            'error' =>false
        ]);
    }
    public function insertdivision(Request $req){
        $division = $req->division;
        $obj = new Division();
        $obj->name = $division;
        if ($obj->save()){
            return response()->json([
                'division' => $obj,
                'error' => false
            ]);
        }
    }
}