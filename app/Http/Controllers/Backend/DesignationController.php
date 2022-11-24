<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use App\Designation;


class DesignationController extends Controller
{

    public function getDesignations()
    {
        $designations = DB::table('designation')->get();

        $response = ["status" => "Success", "data"=> $designations];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getDesignation($designationId)
    {
        $designation = DB::table('designation')->where('designationId', $designationId)->first();
        $response = ["status" => "Success", "data"=> $designation];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addDesignation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'designation' => 'required|string|unique:designation',
            'designationBN' => 'required|string|unique:designation',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        Designation::create($inputs);


        $response = ["status" => "Success", "data" => "Designation successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editDesignation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'designation' => 'required|string|unique:designation,designation,'.$request->designationId.',designationId',
            'designationBN' => 'required|string|unique:designation,designationBN,'.$request->designationId.',designationId',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Designation::where('designationId', $request->designationId)->update($request->except(['token']));


        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteDesignation($designationId)
    {
        DB::table('designation')->where('designationId', $designationId)->delete();

        $response = ["status" => "Success", "data" => "Designation Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
