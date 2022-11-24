<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use Carbon\Carbon;

use PDF;
use Dompdf\Dompdf;

use src\NTWIndia;
use src\Exception\NTWIndiaInvalidNumber;
use src\Exception\NTWIndiaNumberOverflow;


class PDFController extends Controller
{


    public function printInvoice($cartId)
    {
        $cartData = DB::table('cart_view')->where('cartId', $cartId)->first();
        $cartdetailsData = DB::table('cartdetails_view')->where('cartId', $cartId)->get();
        $companyData = DB::table('company')->first();
        $customerData = DB::table('users')->where('id', $cartData->userId )->first();

        // number to word
        $ntw = new \NTWIndia\NTWIndia();
        $ntw = ($ntw->numToWord( $cartData->cartProductsTotalSum )).' Taka Only.';


        $pdf = PDF::loadView('pdf.invoice', compact('cartData', 'cartdetailsData','companyData','customerData', 'ntw'));
        // $pdf = PDF::loadView('billing.billReport', ['cartId' => $cartId]);
        // return $pdf->stream('billReport.pdf');
        return $pdf->stream('cart-#'.$cartData->cartId.' ('.now().').pdf');
        // return $pdf->download('billReport.pdf');
        // return view('billing/billReport');
    }


    public function RFIDCardDownload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $userId = $request->userId;
        $user = DB::table('users_view')->where('id', $userId)->first();
        $cardsettings = DB::table('cardsettings')->first();

        $pdf = PDF::loadView('pdf.rfidcard', compact('user', 'cardsettings'));

        // $pdf = new Dompdf();
        // $pdf->loadHtml('hello world sad sa dasdasdasdas dads as');
        // dd(1);
        // $pdf->setPaper('A4');
        return $pdf->stream($user->name.'_userid_'.$userId.'_'.getTodayDatetime().'.pdf');

    }





}
