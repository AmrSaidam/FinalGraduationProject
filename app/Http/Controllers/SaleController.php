<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SaleController extends Controller
{
    function makeSale(Request $request)
    {

        $array = $request->input('productName');
        var_dump($array);
    }
}
