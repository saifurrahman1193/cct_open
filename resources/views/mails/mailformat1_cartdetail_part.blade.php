<table style="border: 1px solid gray; text-align: center; border-collapse: collapse;" >
    <caption style="font-weight: bold;  font-size: 20px; color: green;">Order Details</caption>
    <thead >
        <tr >
            <th style="border: 1px solid grey;">Products</th>
            <th style="border: 1px solid grey;">Qty</th>
            <th style="border: 1px solid grey;">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cartdetailsData as $cartdetail)
            <tr>
            <td style="border: 1px solid grey; text-align: left; padding-left: 5px;">
                {{$cartdetail->productName.' '.$cartdetail->productQty.' '.$cartdetail->uom}}
            </td>
            <td style="border: 1px solid grey;">{{ $cartdetail->qty }}</td>
            <td style="border: 1px solid grey; text-align: left; ">৳ {{ $cartdetail->subTotalWithoutDiscount }}</td>
            </tr>
        @endforeach
    </tbody>

    <tfoot >
        <tr>
            <th style="border: 1px solid grey; text-align: left; padding-left: 5px;">Sub-Total</th>
            <th style="border: 1px solid grey;">{{ $cartData->totalQty }}</th>
            <th style="border: 1px solid grey; text-align: left; ">৳ {{$cartData->cartProductsSubTotalSum}}</th>
        </tr>
        <tr>
            <th style="border: 1px solid grey; text-align: left; padding-left: 5px;" colspan="2">Discount</th>
            <td style="border: 1px solid grey; text-align: left; ">৳ {{ $cartData->totalDiscountAmount }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid grey; text-align: left; padding-left: 5px;" colspan="2">Delivery Charge</th>
            <td style="border: 1px solid grey; text-align: left; ">৳ {{ $cartData->deliveryCharge}}</td>
        </tr>

        <tr>
            <th style="border: 1px solid grey; text-align: left; padding-left: 5px;" colspan="2">Net Payable</th>
            <th style="border: 1px solid grey;  text-align: left; ">৳ {{ $cartData->cartProductsTotalSum }}</th>
        </tr>
    </tfoot>
    
</table>


<br>
<br>


<table style="border: 1px solid gray;  border-collapse: collapse;" >
    <caption style="font-weight: bold;  font-size: 20px; color: green;">Delivery Details</caption>
    <tbody>

        <tr>
          <th style="border: 1px solid grey;  text-align: left; padding-left: 5px;">Area</th>
          <td style="border: 1px solid grey; text-align: left; padding-left: 5px;">{{ $cartData->area }}</td>
        </tr>

        <tr>
          <th style="border: 1px solid grey;  text-align: left; padding-left: 5px;">Phone</th>
          <td style="border: 1px solid grey; text-align: left; padding-left: 5px;">{{ $userdata->phone }}</td>
        </tr>

        <tr>
          <th style="border: 1px solid grey;  text-align: left; padding-left: 5px;">Address</th>
          <td style="border: 1px solid grey; text-align: left; padding-left: 5px;">{{ $cartData->shippingAddress }}</td>
        </tr>
        



    </tbody>
</table>