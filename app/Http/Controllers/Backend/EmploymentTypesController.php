<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use App\EmploymentTypes;


class EmploymentTypesController extends Controller
{

    public function getEmploymentTypes()
    {
        $employmenttypes = DB::table('employmenttypes')->get();

        $response = ["status" => "Success", "data"=> $employmenttypes];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getEmploymentType($employmentTypeId)
    {
        $employmenttype = DB::table('employmenttypes')->where('employmentTypeId', $employmentTypeId)->first();
        $response = ["status" => "Success", "data"=> $employmenttype];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addEmploymentType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employmentType' => 'required|string|unique:employmenttypes',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        EmploymentTypes::create($inputs);


        $response = ["status" => "Success", "data" => "EmploymentType successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editEmploymentType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employmentType' => 'required|string|unique:employmenttypes,employmentType,'.$request->employmentTypeId.',employmentTypeId',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        EmploymentTypes::where('employmentTypeId', $request->employmentTypeId)->update($request->except(['token']));


        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteEmploymentType($employmentTypeId)
    {
        DB::table('employmenttypes')->where('employmentTypeId', $employmentTypeId)->delete();

        $response = ["status" => "Success", "data" => "EmploymentType Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
