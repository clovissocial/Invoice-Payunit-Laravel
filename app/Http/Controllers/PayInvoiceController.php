<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

// use SevenPay\PayUnit\PayUnit;

class PayInvoicecontroller extends Controller
{
    public function donatePayment(request $request) 
    {
        $myPayment = new Invoice(
            "81020e2af276af77f478186abe028adc0f2134b8",
            "91a3865f-1c7c-49a0-909b-51a1332d62de",
            "payunit_sand_mOfUdQaFI",
            "http://127.0.0.1:8000/",
            "notifyUrl",
            "mode",
            "description",
            "purchaseRef",
            "FCFA",
            "name"
          );

          $myPayment->makePayment($request ->input("total_amount"));
    }
   
}
