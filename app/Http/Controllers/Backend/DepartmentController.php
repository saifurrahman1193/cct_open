<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use App\Department;


class DepartmentController extends Controller
{

    public function getDepartments()
    {
        $departments = DB::table('department')->get();

        $response = ["status" => "Success", "data"=> $departments];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getDepartment($departmentId)
    {
        $department = DB::table('department')->where('departmentId', $departmentId)->first();
        $response = ["status" => "Success", "data"=> $department];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function addDepartment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department' => 'required|string|unique:department',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        Department::create($inputs);


        $response = ["status" => "Success", "data" => "Department successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editDepartment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department' => 'required|string|unique:department,department,'.$request->departmentId.',departmentId',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Department::where('departmentId', $request->departmentId)->update($request->except(['token']));


        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteDepartment($departmentId)
    {
        DB::table('department')->where('departmentId', $departmentId)->delete();

        $response = ["status" => "Success", "data" => "Department Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
