<?php

namespace NVSLOnline\Http\Controllers;

use Illuminate\Http\Request;
use NVSLOnline\Http\Requests;
use NVSLOnline\Team;


class TeamController extends Controller
{
    public function index(){
		/*$divisions = DB::table('Divisions')
				->where('DivisionName','LIKE', '%'.query.'%')
				->where('IsHidden','=','1');*/

				//$divisions = \NVSLOnline\Division::get();
				$teams = \NVSLOnline\Team::get();

				return response()->json([
					"msg" => "Success",
					"teams" => $teams ->toArray()
					],200
				);
	}
	/*public function index(Request $request)	{
			if($request){
				$query=trim($request>get('searchText'));
				$Divisions = DB::table('Divisions')
				->where('DivisionName','LIKE', '%'.query.'%')
				->where('IsHidden','=','1');
				return view('nvslOnline.Division.index',["Divisions"=>$Divisions, "searchText"=>$query]);
			}
	}*/
	public function show($id){
		$team = \NVSLOnline\Team::find($id);
		return response()->json([
					"msg" => "Success",
					"division" => $team
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

    //
}

