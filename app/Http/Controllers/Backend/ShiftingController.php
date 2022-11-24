<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use App\Shiftings;


class ShiftingController extends Controller
{

    public function getShiftings()
    {
        $shiftings = DB::table('shiftings')->get();

        $response = ["status" => "Success", "data"=> $shiftings];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getShifting($shiftingId)
    {
        $shifting = DB::table('shiftings')->where('shiftingId', $shiftingId)->first();
        $response = ["status" => "Success", "data"=> $shifting];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addShifting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shifting' => 'required|string|unique:shiftings',
            'inTimeHour' => 'required|numeric',
            'inTimeMin' => 'required|numeric',
            'outTimeHour' => 'required|numeric',
            'outTimeMin' => 'required|numeric',
            'lateMin' => 'required|numeric',
            'earlyMin' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        Shiftings::create($inputs);


        $response = ["status" => "Success", "data" => "Shifting successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editShifting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shifting' => 'required|string|unique:shiftings,shifting,'.$request->shiftingId.',shiftingId',
            'inTimeHour' => 'required|numeric',
            'inTimeMin' => 'required|numeric',
            'outTimeHour' => 'required|numeric',
            'outTimeMin' => 'required|numeric',
            'lateMin' => 'required|numeric',
            'earlyMin' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        Shiftings::where('shiftingId', $request->shiftingId)->update($request->except(['token']));


        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteShifting($shiftingId)
    {
        DB::table('shiftings')->where('shiftingId', $shiftingId)->delete();

        $response = ["status" => "Success", "data" => "Shifting Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


}
