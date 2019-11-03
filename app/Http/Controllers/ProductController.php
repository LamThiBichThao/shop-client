<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UtilController;
use Session;

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
        $cate_id = $request->cate ? $request->cate : null;
        $page = $request->page ? $request->page : 1;
        $sort = $request->sort ? $request->sort : 'ASC';
        Session::put('sort', $sort);

        if ($cate_id != null) {
            Session::put('cate_id', $cate_id);
        }

        $arr = array(
            'cate_id' => $cate_id,
            'page' => $page,
            'sort_type' => $sort
        );

        $postData = $this->util->postData($this->get_all_product, $arr);
        $data = json_decode($postData);
        $cateParent = null;

        if ($data->status == 200) {
            $listCategory = $data->listCate;
            $dataProduct = $data->result;
            $listProduct = $this->util->convertProduct($dataProduct->data);
            $total = $dataProduct->total;
            $page = $dataProduct->current_page;
    	    return view('product.index', compact('listCategory', 'cateParent', 'listProduct', 'total', 'page'));
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
