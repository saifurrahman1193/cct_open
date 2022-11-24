<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\DeliveryAddress;
use Validator;
use Carbon\Carbon;

class DeliveryController extends Controller
{
    public function getDeliveryAddresses()
    {
        $deliveryaddress = DB::table('deliveryaddress_view')->get();
        $response = ["status" => "Success", "data"=> $deliveryaddress];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getCurrentUserDeliveryAddresses()
    {
        $deliveryaddress = DB::table('deliveryaddress_view')->where('userId', auth()->user()->id)->get();
        $response = ["status" => "Success", "data"=> $deliveryaddress];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function getDeliveryAddress($deliveryAddressId)
    {
        $deliveryaddresses = DB::table('deliveryaddress')->where('deliveryAddressId', $deliveryAddressId)->first();
        $response = ["status" => "Success", "data"=> $deliveryaddresses];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addCurrentUserDeliveryAddress(Request $request)
    {
        $request['userId'] = auth()->user()->id;
        $validator = Validator::make($request->all(), [
            'deliveryAddressTitle' => 'required|string',
            'deliveryAddress' => 'required|string',
            'userId' => 'required|numeric',
            'areaId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except(['token', '_method']);


        $inputs['userId'] = auth()->user()->id;

        DeliveryAddress::create($inputs);


        $deliveryAddressId = DB::getPdo()->lastInsertId();

        // sleep(10);

        cacheRemove();
        $response = ["status" => "Success", "data" => "Delivery address successfully saved!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function editDeliveryAddress(Request $request)
    {
        $request['userId'] = auth()->user()->id;
        $validator = Validator::make($request->all(), [
            'deliveryAddressTitle' => 'required|string',
            'deliveryAddress' => 'required|string',
            'userId' => 'required|numeric',
            'areaId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        DeliveryAddress::find($request->deliveryAddressId)->update($request->all());

        cacheRemove();
        $response = ["status" => "Success", "data" => "Successfully Updated!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function deleteDeliveryAddress($deliveryAddressId)
    {
        DeliveryAddress::find($deliveryAddressId)->delete();

        cacheRemove();
        $response = ["status" => "Success", "data" => "Successfully Deleted!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
