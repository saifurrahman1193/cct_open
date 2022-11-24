<?php
namespace App\Http\Controllers\Backend;
use Image;

use App\User;
use Validator;

use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Traits\TestTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class TestController extends Controller
{
    use TestTrait;

    public function testFunction()
    {
        // $data = getToday();

        // $response = ["status" => "Success", "data"=> $data];
        // return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        

        dd(getUserDeviceValidity('2021-02-01', '2021-02-20'));

    }

    public function getTestTrait()
    {
        return  $this->getHello();

    }

    public function testOneToOneRelationsShips()
    {
        $product = Products::find(90);

        dd($product->country);
    }

    public function testOneToManyRelationsShips()
    {
        $user = User::find(7);
        dd($user->deliveryaddresses);
        dd($user->deliveryaddresses->toArray());
    }


    public function testManyToManyRelationsShips()
    {
        $user = User::find(7);
        dd($user->roles);
    }

    public function testAccessor()
    {
        $user = User::find(7);
        dd($user->email);
    }





}
