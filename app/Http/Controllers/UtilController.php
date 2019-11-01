<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function convertProduct($product_arr) {
        foreach($product_arr as $key => $item) {
            if ( count($item->sales) > 0 ) {
                $product_arr[$key]->new_price = $item->sales[0]->pivot->discount;
            } else {
                $product_arr[$key]->new_price = 0;
            }
        }
        return $product_arr;
    }
}
