<?php

namespace NVSLOnline\Http\Controllers;

use Illuminate\Http\Request;
use NVSLOnline\Http\Requests;
use NVSLOnline\Season;
use Illuminate\Support\Facades\Redirect;
use DB;

class SeasonController extends Controller
{
     public function index(){
     	$seasons = DB::table('Seasons')
				->where('IsHidden','=','0')
				->get();
		
				return response()->json([
					"msg" => "Success",
					"season" => $seasons
					],200
				);
	}

	public function show($id){
		$season = \NVSLOnline\Season::find($id);
		return response()->json([
					"msg" => "Success",
					"season" => $season
					],200
				);
	}
	
	public function create(){

	}
	public function store(Request $request){
		/*$objDivision = \NVSLOnline\Division(); 
		$objDivision -> DivisionName = $request->DivisionName;
		$objDivision -> IsHidden = $request->IsHidden;
		$OvjDivision > save();
		return response()->json([
					"msg" => "Success",
					"id" => $objDivision->id
					],200
				);
*/
	}
	
	public function edit(){

	}
	public function update(){

	}
	public function destroy(){

	}
}
