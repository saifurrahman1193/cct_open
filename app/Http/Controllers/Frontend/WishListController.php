<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Wishlist;
use Validator;
use Carbon\Carbon;

class WishListController extends Controller
{

    public function getCurrentUserWishLists()
    {
        $wishlist = DB::table('wishlist')->where('userId', auth()->user()->id)->pluck('productId');
        $response = ["status" => "Success", "data"=> $wishlist];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function addCurrentUserProductToWishlist(Request $request, $productId)
    {
        $request['userId'] = auth()->user()->id;
        $request['productId'] = $productId;
        $validator = Validator::make($request->all(), [
            'userId' => 'required|unique_with:wishlist, productId',
            'productId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        cacheRemove();

        $inputs = $request->except([ 'token', '_method']);
        Wishlist::create($inputs);


        $response = ["status" => "Success", "data" => "Wishlist successfully added!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function removeCurrentUserProductFromWishlist(Request $request, $productId)
    {
        $request['userId'] = auth()->user()->id;
        $request['productId'] = $productId;
        $validator = Validator::make($request->all(), [
            'userId' => 'required',
            'productId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $inputs = $request->except([ 'token', '_method']);
        DB::table('wishlist')->where('productId', $productId)->where('userId', $request['userId'])->delete();
        cacheRemove();

        $response = ["status" => "Success", "data" => "Wishlist successfully deleted!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


}
