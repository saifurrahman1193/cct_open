<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Services;
use App\Company;
use App\Cardsettings;

use \Gumlet\ImageResize;
use Intervention\Image\Facades\Image as Image;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{



    public function getCompanyInfo()
    {
        $companyInfo = Cache::remember('companyInfo', 5, function () {
            return DB::table('company')->first();
        });

        $response = ["status" => "Success", "data"=> $companyInfo];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function updateCompanyInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Company::where('companyId', $request->companyId)->update($request->except(['token', 'logoPath']));


        if ( $request->has('logoPath') && $request->logoPath !=null &&  strlen($request->logoPath)>100)
        {
            $png_url = "company_logo".".png";
            $path = public_path().'/uploads/company/logo/' . $png_url;
            $data = substr($request->logoPath, strpos($request->logoPath, ',') + 1);
            $data = base64_decode($data);
            Storage::disk('companylogouploads')->put($png_url, $data);

            Company::where('companyId', $request->companyId)->update(['logoPath' => '/uploads/company/logo/'.$png_url]);
        }


        cacheRemove();

        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function getAreas()
    {
        $areas = DB::table('area')->orderBy('area')->get();
        $response = ["status" => "Success", "data"=> $areas];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function profileUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'deviceUserName' => 'required|min:4|max:20|unique:users,deviceUserName,'.$request->id.',id',
            'email' => 'email|unique:users,email,'.$request->id.',id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        User::find(auth()->user()->id)->update($request->except(['photoPath', 'id', 'email', 'password', '_method']));
        if ( $request->has('photoPath') && $request->photoPath !=null &&  strlen($request->photoPath)>100)
        {
            //decode base64 string
            $png_url = "user-".auth()->user()->id.'_'.rand(999,9999999).".png";

            // local path
            $path = public_path().'/uploads/users/' . $png_url;
            // dd($path);
            // cpanel path please change before upload to cpanel and comment out local path
            // $path = public_path().'/..'.'/img/users/' . $png_url;


            //    Image::make(file_get_contents($request->photoPath))->save($path);
            $data = substr($request->photoPath, strpos($request->photoPath, ',') + 1);
            // dd($data);
            $data = base64_decode($data);
            // dd($data);
            Storage::disk('useruploads')->put($png_url, $data);
            // dd('success');

            User::find(auth()->user()->id)->update(['photoPath' => '/uploads/users/'.$png_url]);
        }

        cacheRemove();

        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function getCardsettings()
    {
        $cardsettings = Cache::remember('cardsettings', 5, function () {
            return DB::table('cardsettings')->first();
        });

        $response = ["status" => "Success", "data"=> $cardsettings];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }

    public function updateCardsettings(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'authority1type' => 'required|string',
            'authority1typeBN' => 'required|string',
            'authority1signature' => 'required|string',
            'authority1title' => 'required|string',
            'authority1titleBN' => 'required|string',
            'authority2type' => 'required|string',
            'authority2typeBN' => 'required|string',
            'authority2signature' => 'required|string',
            'authority2title' => 'required|string',
            'authority2titleBN' => 'required|string',
            'logo' => 'required|string',
            'topTitle' => 'required|string',
            'topTitleBN' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Cardsettings::where('cardsettingId', $request->cardsettingId)->update($request->except(['token', 'authority1signature', 'authority2signature', 'logo']));


        if ( $request->has('authority1signature') && $request->authority1signature !=null)
        {
            $png_url = "authority1signature".".png";
            $path = '/uploads/card/settings/' . $png_url;
            $data = substr($request->authority1signature, strpos($request->authority1signature, ',') + 1);
            $data = base64_decode($data);
            Storage::disk('carduploadssettings')->put($png_url, $data);

            Cardsettings::where('cardsettingId', $request->cardsettingId)->update(['authority1signature' => $path]);
        }

        if ( $request->has('authority2signature') && $request->authority2signature !=null)
        {
            $png_url = "authority2signature".".png";
            $path = '/uploads/card/settings/' . $png_url;
            $data = substr($request->authority2signature, strpos($request->authority2signature, ',') + 1);
            $data = base64_decode($data);
            Storage::disk('carduploadssettings')->put($png_url, $data);

            Cardsettings::where('cardsettingId', $request->cardsettingId)->update(['authority2signature' => $path]);
        }
        if ( $request->has('logo') && $request->logo !=null)
        {
            $png_url = "logo".".png";
            $path = '/uploads/card/settings/' . $png_url;
            $data = substr($request->logo, strpos($request->logo, ',') + 1);
            $data = base64_decode($data);
            Storage::disk('carduploadssettings')->put($png_url, $data);

            Cardsettings::where('cardsettingId', $request->cardsettingId)->update(['logo' => $path]);
        }

        cacheRemove();

        $response = ["status" => "Success"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




}
