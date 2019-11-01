<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function about(){
    	return view('other.about');
    }

    public function contact(){
    	return view('other.contact');
    }

    public function privacyPolicy(){
    	return view('other.privacy-policy');
    }

    public function paymentPolicy(){
    	return view('other.payment-policy');
    }

    public function transportPolicy(){
    	return view('other.transport-policy');
    }
}
