<?php
namespace App\Http\Controllers\Backend;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class DashboardController extends Controller
{
    public function getDashboardData()
    {

        $getDashboardData =  DB::table('dashboard_view')->first();

        try {
            \Artisan::call('schedule:run');
        } catch (\Throwable $th) {
            //throw $th;
        }

        $response = ["status" => "Success", "data"=> $getDashboardData];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }


}
