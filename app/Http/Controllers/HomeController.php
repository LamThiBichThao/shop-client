<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UtilController;

class HomeController extends Controller
{
    public $baseUrl = "http://shop.local.com/api/";
    public function __construct(){
        $this->get_data_home 	= $this->baseUrl."product";
        $this->get_product_category = $this->baseUrl."category";
        $this->util     = new UtilController();
    }
    
    public function index(){
        // try {
            $getData = @file_get_contents($this->get_data_home);
            $data = json_decode($getData);

            if ($data->status == 200) {
                $firstList  = $data->firstList;
                $category = $data->result;

                $firstData = $this->util->convertProduct($firstList);
    	        return view('home.index', compact('firstData', 'category'));
            } else {

            }
        // } catch (\Exception $e) {
        //     return null;
        // }
    }

  
}
