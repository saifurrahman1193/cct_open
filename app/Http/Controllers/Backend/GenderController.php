<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;


class GenderController extends Controller
{

    public function getGenders()
    {
        $genders = DB::table('gender')->get();

        $response = ["status" => "Success", "data"=> $genders];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }    


    public function getGender($genderId)
    {
        $gender = DB::table('gender')->where('genderId', $genderId)->first();
        $response = ["status" => "Success", "data"=> $gender];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

}
