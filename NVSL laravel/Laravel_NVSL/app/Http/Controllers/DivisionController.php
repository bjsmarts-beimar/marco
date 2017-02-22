<?php

namespace NVSLOnline\Http\Controllers;

use Illuminate\Http\Request;
use NVSLOnline\Http\Requests;
use NVSLOnline\Division;
use Illuminate\Support\Facades\Redirect;


//use NVSLOnline\Http\Requests\DivisionFormRequest;
use DB;

class DivisionController extends Controller{

	
	public function index(){
		/*$divisions = DB::table('Divisions')
				->where('DivisionName','LIKE', '%'.query.'%')
				->where('IsHidden','=','1');*/

				$divisions = \NVSLOnline\Division::get();
				/*$divisions = DB::table('Divisions')
				->where('IsHidden','=','0')
				->get();*/

				return response()->json([
					"msg" => "Success",
					"videos" => $divisions ->toArray()
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
	public function create(){

	}
	public function store(Request $request){
		$objDivision = \NVSLOnline\Division(); 
		$objDivision -> DivisionName = $request->DivisionName;
		$objDivision -> IsHidden = $request->IsHidden;
		$OvjDivision > save();
		return response()->json([
					"msg" => "Success",
					"id" => $objDivision->id
					],200
				);

	}
	public function show($id){
		return "hola";
		/*$division = \NVSLOnline\Division::find($id);
		return response()->json([
					"msg" => "Success",
					"division" => "tes"
					],200
				);*/
	}
	public function edit(){

	}
	public function update(){

	}
	public function destroy(){

	}

    //
}
