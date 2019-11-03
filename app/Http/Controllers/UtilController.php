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

    public function postData($url, $arr){
        $ch = curl_init();
        $payload = json_encode($arr);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type: application/json',
            'Accept: */*'
            ));
        $response =curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
