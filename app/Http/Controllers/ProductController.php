<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UtilController;

class ProductController extends Controller
{
    public $baseUrl = "http://shop.local.com/api/";
    public function __construct(){
        $this->get_detail_product 	= $this->baseUrl."product/";
        $this->get_all_product 	= $this->baseUrl."product/all";
        $this->get_product_category = $this->baseUrl."category/";
        $this->util     = new UtilController();
    }

    public function index(Request $request){
        $category = $request->cate;
        if ($category) {
            $getData = @file_get_contents($this->get_product_category.$category);
            $data = json_decode($getData);
            $cateParent = $category;
            
        } else {
            $getData = @file_get_contents($this->get_all_product);
            $data = json_decode($getData);
            $cateParent = null;

        }

        if ($data->status == 200) {
            $listCategory = $data->listCate;
    	    return view('product.index', compact('listCategory', 'cateParent'));
        } else {

        }
    }

    public function detail($slug){
        $url = $this->get_detail_product. $slug;
        $getData = @file_get_contents($url);
        $data = json_decode($getData);

        if ($data->status == 200) {
            $detail = $data->result;
            $sizes = array();
            $colors = array();
            $category = $data->category;

            if ( count($detail->sales) > 0) {
                $detail->new_price = $detail->sales[0]->pivot->discount;
            } else {
                $detail->new_price = 0;
            }

            return view('product.detail', compact('detail', 'sizes', 'colors', 'category'));
        } else {

        }
    }
}
