<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SevenPay\PayUnit\PayUnit;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('payment.index');
    }

}


  