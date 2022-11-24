<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use App\Cardtypes;


class CardtypeController extends Controller
{

    public function getCardtypes()
    {
        $cardtypes = DB::table('cardtypes')->get();

        $response = ["status" => "Success", "data"=> $cardtypes];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getCardtype($cardtypeId)
    {
        $cardtype = DB::table('cardtypes')->where('cardtypeId', $cardtypeId)->first();
        $response = ["status" => "Success", "data"=> $cardtype];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function addCardtype(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cardtype' => 'required|string|unique:cardtypes',
            'color' => 'required|string|unique:cardtypes',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        Cardtypes::create($inputs);


        $response = ["status" => "Success", "data" => "Card type successfully saved !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editCardtype(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cardtype' => 'required|string|unique:cardtypes,cardtype,'.$request->cardtypeId.',cardtypeId',
            'color' => 'required|string|unique:cardtypes,color,'.$request->cardtypeId.',cardtypeId',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Cardtypes::where('cardtypeId', $request->cardtypeId)->update($request->except(['token']));


        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteCardtype($cardtypeId)
    {
        DB::table('cardtypes')->where('cardtypeId', $cardtypeId)->delete();

        $response = ["status" => "Success", "data" => "Card Type Successfully Deleted !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
