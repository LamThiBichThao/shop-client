<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function saleOff(){
    	return view('sale.sale-off');
    }
}
