<html>
<head>
  <title>Invoice</title>
<style type="text/css" media="screen">
table {
  border-collapse: collapse;
}
    p.header-title{
        font-size: 12pt;
        line-height: 5px;
        text-align:center;
    }

  p.invoice-mst-info{
        font-size: 12pt;
        line-height: 5px;
    }
/*   #item-table {
  border-collapse: collapse;
  } */
   tbody tr, thead tr{
    border: 1px solid #666;
  }
/*   #item-table tbody td, thead td  {
    border: 0px;
  }  */
  td span {
  background: #f2f0e4;
  padding: 0 20px;
  color: black;
}
</style>
</head>

<body>
        <p class="header-title" ><strong style="font-size: 16pt">{{ $companyData->name }}</strong></p>
        <p class="header-title"   >{{ $companyData->address }}</p>
        <p class="header-title "  >{{ $companyData->email.', '.$companyData->phone }}</p>
        <p class="header-title "  >{{ $companyData->website}}</p>
        <p class="header-title"  ><strong>BILL</strong></p>
        @if (!preg_match('/localhost:8001/i', url('/')) )
          <img  src={{ asset($companyData->logoPath) }} alt="logo"  width="75px" style="margin-top: -125px; margin-left: 40px;">
        @else
          <img  src={{ public_path().$companyData->logoPath }} alt="logo"  width="75px" style="margin-top: -75px; margin-left: 40px;">
        @endif

<table width="90%" border="0" align="center">

    <tbody>
        <tr>

              <td style="width: 300px;">
                <p class="invoice-mst-info"  align="left">
                  <table style="width: 300px;">
                      <tbody>
                          <tr><td>Invoice No: <strong>#{{$cartData->cartId}}</strong></td></tr>
                          <tr><td>Customer ID: <strong>{{$customerData->phone}}</strong></td></tr>
                          <tr><td>Customer Name: <strong>{{$customerData->name}}</strong></td></tr>
                          <tr><td>Address: {{$cartData->shippingAddress  }}</td></tr>
                      </tbody>
                  </table>
                </p>



              </td>
              <td align="right">
                    <p class="invoice-mst-info"  >Invoice Date: <strong>{{YmdTodmYPm($cartData->created_at)}}</strong></p>
                      {{-- <p class="invoice-mst-info"  >Deliveryman: <strong>{{$cartData->deliveryMan}}</strong></p>
                      <p class="invoice-mst-info"  >District: <strong>{{$cartData->customerDistrict}}</strong></p> --}}
              </td>


        </tr>
    </tbody>

  </table>

 <br>
  <table border="1" id="item-table" width="90%" align="center">
    <thead >
      <tr align="center">
        <th>SL#</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cartdetailsData as $cartdetail)
        <tr >
          <td align="center">{{$loop->index+1}}</td>

          <td align="center">{{ $cartdetail->productName.' '.$cartdetail->productQty.' '.$cartdetail->uom }}</td>
          <td align="center">{{ $cartdetail->qty }}</td>
          <td align="center">{{ $cartdetail->subTotalWithoutDiscount }}</td>
        </tr>
      @endforeach




    </tbody>


  </table>

   <br>

  <table border="0" id="item-table" width="90%" align="center">

    <tbody>

        <tr >
        <td> <strong>Taka in Word :  {{ $ntw }}</strong></td>
        </tr>



    </tbody>


  </table>



  <br>

  <table width="90%" border="0" align="center">

    <tbody>
        <tr>

              <td>
                      {{-- <p class="invoice-mst-info"  align="left">QC : <strong>{{title_case($cartData->qcStatus)}}</strong></p>
                      <p class="invoice-mst-info"  align="left">Call: <strong>{{title_case($cartData->billCall)}}</strong></p>
                      <p class="invoice-mst-info"  align="left">Delivery Status: <strong>{{title_case($cartData->deliveryStatus)}}</strong></p> --}}
                      {{-- <p class="invoice-mst-info"  align="left">Payment Status: <strong>{{title_case($cartData->paymentStatus)}}</strong></p> --}}
              </td>
              <td align="right">
                    {{-- <p class="invoice-mst-info"  >Invoice Amount: <strong>{{$cartData->amountTotal}}</strong></p>
                      <p class="invoice-mst-info"  >Discount Amount: <strong>{{$cartData->discountAmount}}</strong></p>
                      <p class="invoice-mst-info"  >Delivery Charge: <strong>{{$cartData->deliveryCharge}}</strong></p>
                      <p class="invoice-mst-info"  >Total Receivable Amount: <strong>{{$cartData->totalReceivableAmount}}</strong></p> --}}

                    <table align="right">
                      <tbody>
                        <tr>
                          <td>Invoice Amount</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->cartProductsSubTotalSum}}</strong></td>
                        </tr>
                        <tr>
                          <td>Discount Amount</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->totalDiscountAmount}}</td>
                        </tr>
                        <tr>
                          <td>Delivery Charge</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->deliveryCharge}}</strong></td>
                        </tr>
                        <tr>
                          <td>Total Receivable Amount</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->cartProductsTotalSum}}</strong></td>
                        </tr>
                        {{-- <tr>
                          <td>Paid</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->transactionAmount}}</strong></td>
                        </tr>
                        <tr>
                          <td>Due</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->due}}</strong></td>
                        </tr>
                        <tr>
                          <td>Total Paid</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->totalTransaction}}</strong></td>
                        </tr>
                        <tr>
                          <td>Due</td>
                          <td>:</td>
                          <td align="right"><strong>{{$cartData->totalDue}}</strong></td>
                        </tr> --}}

                      </tbody>
                    </table>


          </td>


        </tr>
    </tbody>

  </table>

  <br>
  <br>
  <br>


{{-- <table width="90%" border="0" align="center">

    <tbody>
        <tr>
            <td><i><strong>Notes:</strong> {{$cartData->specialInstruction}}</i></td>
        </tr>
    </tbody>

  </table> --}}


<br>
<br>
<br>
    <table width="90%" border="0" align="center">

    <tbody>
        <tr>
              <td><hr ><p align="center">Signature-Store</p></td>
              <td style="width: 200px;"><p></p></td>
              {{-- <td><hr ><p align="center">Signature-Accounts</p></td>     --}}
              <td><hr ><p align="center">Customer's Signature</p></td>
        </tr>
    </tbody>

  </table>



</body>
</html>
