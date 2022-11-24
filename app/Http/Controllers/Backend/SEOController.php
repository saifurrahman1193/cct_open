<?php
namespace App\Http\Controllers\Backend;
use App\SEODefault;

use Validator;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class SEOController extends Controller
{

    public function getSeoDefault()
    {
        $seodefault = Cache::remember('seodefault', 60, function () {
            return DB::table('seodefault')->first();
        });

        $response = ["status" => "Success", "data"=> $seodefault];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


    public function editSeoDefault(Request $request)
    {
        SEODefault::find(1)->update($request->all());
        cacheRemove();

        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




}
