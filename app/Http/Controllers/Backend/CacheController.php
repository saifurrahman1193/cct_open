<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use Image;



class CacheController extends Controller
{




    public function getImage(Request $request){
        if (isset($request->url)) {
            // dd(substr($request->url, 1));
            // http://localhost:8000/
            $url = $request->url;
            $url = str_replace(url('/'),'',$url);

            if (substr($url, 0,1)=='/') {
                $url = substr($url, 1);
            }
            $img = Image::cache(function($image) use($url) {
                $image->make($url);
                // $image->make('uploads/company/logo/company_logo.png')->resize(300, 200)->greyscale();
                // $image->make('uploads/company/logo/company_logo.png')->resize(300, 200)->greyscale();
            }, 30);
            // return (string) $img->encode('data-url');
             return Image::make($img)->response();
            //  return (string) Image::make($img)->encode('data-url');

            // $response = [ "data" => $img];
            // return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
        }
    }

    // :src="'/imageResize?url='+product.productPicturePath+'&sizeX=150&sizeY=150' || '/uploads/no_image.png'"

    public function imageResize(Request $request){
        if (isset($request->url ) and isset($request->sizeX) and isset($request->sizeY)) {
            $url = $request->url;
            $url = str_replace(url('/'),'',$url);

            if (substr($url, 0,1)=='/') {
                $url = substr($url, 1);
            }

            $img = Image::make($url);
            $img->resize($request->sizeX, $request->sizeY);
            return Image::make($img)->response();

        }
    }

    public function cacheRemove(){
        try {
            cacheRemove();
        } catch (\Throwable $th) {
        }
    }




}
