<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Cart;
use App\Jobs\SendMail;
use Illuminate\Support\Facades\Cache;


class OrderController extends Controller
{

    public function confirmOrder(Request $request)
    {
        // dd($request->all());
        // dd($request->deliverySettingPrice);

        DB::table('cart')->insert([
            'cartProductsTotalSum' => $request->cartProductsTotalSum,
            'cartProductsSubTotalSum' => $request->cartProductsSubTotalSum,
            'deliveryCharge' => $request->deliveryCharge,
            'areaId' => $request->deliveryaddress['areaId'],
            'area' => $request->deliveryaddress['area'],
            'shippingAddress' => $request->deliveryaddress['deliveryAddress'],
            'totalQty' => $request->totalQty,
            'userId' => auth()->user()->id,
            'totalDiscountAmount'=>$request->totalDiscountAmount
        ]);

        $cartId = DB::getPdo()->lastInsertId();

        foreach ($request->cartProducts as $product) {
             DB::table('cartdetails')->insert([

                'cartId' => $cartId,
                'batchProductId' => $product['batchProductId'],
                'productId' => $product['productId'],
                'productName' => $product['productName'],
                'shortDescription' => $product['shortDescription'],
                'purchasePrice' => $product['purchasePrice'],
                'sellingPrice' => $product['sellingPrice'],
                'qty' => $product['sellingQty'],
                'subTotalWithoutDiscount' => $product['sellingPrice'] * $product['sellingQty'],
                'subTotalDiscountAmount' => $product['subTotalDiscountAmount'],
                'subTotalTotalDiscountAmount' => $product['subTotalTotalDiscountAmount'],
                'subTotalWithDiscount' => $product['subTotalWithDiscount'],
                'userId' => auth()->user()->id,

                'productQty' => $product['qty'],
                'uom' => $product['uom'],
                'uomId' => $product['uomId'],
            ]);

        }




        // ===============mail========================
        $cartData = DB::table('cart_view')->where('cartId', $cartId)->first();
        $cartdetailsData = DB::table('cartdetails_view')->where('cartId', $cartId)->get();
        $companyData = DB::table('company')->first();
        $userdata = auth()->user();


        $mailReceiverEmail = auth()->user()->email;
        $mailReceiverName = auth()->user()->name;
        $mailSenderEmail = $companyData->mailSenderEmail;
        $mailSenderName  = $companyData->mailSenderName;
        $subject = 'Your order '.'#'.$cartId.' has been created!';
        $bodyMessage =  'Your order '.'#'.$cartId.' has been created! We will update you soon.';
        $website = $companyData->website;
        $contactMails = $companyData->contactMails;
        $numberTitle = $companyData->numberTitle;
        $number = $companyData->number;

        SendMail::dispatch($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number,  $cartData, $cartdetailsData, $userdata);

        // mailformat1($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number,  $cartData, $cartdetailsData, $userdata);
        // ===============mail========================


        // notifications_admin=============
        DB::table('notifications_admin')->insert([
            [
                'customerId' => $userdata->id,
                'cartId' => $cartId,
                'message' => $userdata->email.' has been placed a cart '.$cartId,
            ],
        ]);
        // notifications_admin=============

        cacheRemove();

        $response = ["status" => "Success", "msg"=> "Order successfully placed!", "cartId" =>$cartId ];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




    public function confirmOrderForManualCart(Request $request)
    {
        DB::table('cart')->insert([
            'cartProductsTotalSum' => $request->cartProductsTotalSum,
            'cartProductsSubTotalSum' => $request->cartProductsSubTotalSum,
            'deliveryCharge' => $request->deliveryCharge,
            'areaId' => $request->deliveryaddress['areaId'],
            'area' => $request->deliveryaddress['area'],
            'shippingAddress' => $request->deliveryaddress['deliveryAddress'],
            'totalQty' => $request->totalQty,
            'userId' => $request->userId,
            'totalDiscountAmount'=>$request->totalDiscountAmount
        ]);

        $cartId = DB::getPdo()->lastInsertId();


        foreach ($request->cartProducts as $product) {
             DB::table('cartdetails')->insert([

                'cartId' => $cartId,
                'batchProductId' => $product['batchProductId'],
                'productId' => $product['productId'],
                'productName' => $product['productName'],
                'shortDescription' => $product['shortDescription'],
                'purchasePrice' => $product['purchasePrice'],
                'sellingPrice' => $product['sellingPrice'],
                'qty' => $product['sellingQty'],
                'subTotalWithoutDiscount' => $product['sellingPrice'] * $product['sellingQty'],
                'subTotalDiscountAmount' => $product['subTotalDiscountAmount'],
                'subTotalTotalDiscountAmount' => $product['subTotalTotalDiscountAmount'],
                'subTotalWithDiscount' => $product['subTotalWithDiscount'],
                'userId' => $request->userId,

                'productQty' => $product['qty'],
                'uom' => $product['uom'],
                'uomId' => $product['uomId'],
            ]);

        }




        // ===============mail========================
        $cartData = DB::table('cart_view')->where('cartId', $cartId)->first();
        $cartdetailsData = DB::table('cartdetails_view')->where('cartId', $cartId)->get();
        $companyData = DB::table('company')->first();
        $userdata = DB::table('users_view')->where('id', $request->userId)->first();


        $mailReceiverEmail = $userdata->email;
        $mailReceiverName = $userdata->name;
        $mailSenderEmail = $companyData->mailSenderEmail;
        $mailSenderName  = $companyData->mailSenderName;
        $subject = 'Your order '.'#'.$cartId.' has been created!';
        $bodyMessage =  'Your order '.'#'.$cartId.' has been created! We will update you soon.';
        $website = $companyData->website;
        $contactMails = $companyData->contactMails;
        $numberTitle = $companyData->numberTitle;
        $number = $companyData->number;

        SendMail::dispatch($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number,  $cartData, $cartdetailsData, $userdata);

        // mailformat1($mailReceiverEmail, $mailReceiverName, $mailSenderEmail, $mailSenderName , $subject, $bodyMessage, $website, $contactMails, $numberTitle, $number,  $cartData, $cartdetailsData, $userdata);
        // ===============mail========================


        // notifications_admin=============
        DB::table('notifications_admin')->insert([
            [
                'customerId' => $userdata->id,
                'cartId' => $cartId,
                'message' => $userdata->email.' has been placed a cart '.$cartId,
            ],
        ]);
        // notifications_admin=============

        cacheRemove();

        $response = ["status" => "Success", "msg"=> "Order successfully placed!", "cartId" =>$cartId ];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function getCarts()
    {
        $carts = Cache::rememberForever('getCarts',  function () {
            return DB::table('cart_view')->get();
        });

        $response = ["status" => "Success", "data"=> $carts];
        return response(json_encode($response, JSON_NUMERIC_CHECK), 200, ["Content-Type" => "application/json"]);
    }


    public function getCurrentUserCart($cartId)
    {
        $cart = DB::table('cart_view')->where('cartId', $cartId)->where('userId', auth()->user()->id)->first();

        $response = ["status" => "Success", "data"=> $cart];
        return response(json_encode($response, JSON_NUMERIC_CHECK), 200, ["Content-Type" => "application/json"]);
    }



    public function getCurrentUserCarts()
    {
        $carts = DB::table('cart_view')->where('userId', auth()->user()->id)->get();

        $response = ["status" => "Success", "data"=> $carts];
        return response(json_encode($response, JSON_NUMERIC_CHECK), 200, ["Content-Type" => "application/json"]);
    }



    public function getCartDetails()
    {
        $cartdetails = DB::table('cartdetails_view')->get();

        $response = ["status" => "Success", "data"=> $cartdetails];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function getCurrentUserCartDetails()
    {
        $cartdetails = DB::table('cartdetails_view')->where('userId', auth()->user()->id)->get();

        $response = ["status" => "Success", "data"=> $cartdetails];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function cusotomerGivingCartRating(Request $request)
    {
        DB::table('cart')->where('cartId', $request->cartId)->update([
            'customerRating' => $request->rating
        ]);

        $response = ["status" => "Success", "msg"=> "Rating successfully given!"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }



    public function cartUpdate(Request $request)
    {
        Cart::where('cartId', $request->cartId)->update($request->except(['token']));
        cacheRemove();

        $response = ["status" => "Success", "data" => "Successfully Updated !"];
        return response(json_encode($response), 200, ["Content-Type" => "application/json"]);
    }




}
