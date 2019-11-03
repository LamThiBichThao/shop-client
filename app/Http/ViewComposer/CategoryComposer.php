<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class CategoryComposer
{
    public $baseUrl = "http://shop.local.com/api/";
    public function __construct() {
        $this->url_get_cate = $this->baseUrl."category";
        $this->url_get_size_color = $this->baseUrl."/product/size_color"; 
    }

    /**
     * Bind data to the view.
    *
    * @param  View  $view
    * @return void
    */
    public function compose(View $view) {
        $getData = @file_get_contents($this->url_get_cate);
        $getData = json_decode($getData);
        $headCategory = $getData->result;
        $view->with('headCategory', $headCategory);
    }

    public function getSizeColor(View $view) {
        $getData = @file_get_contents($this->url_get_size_color);
        $data = json_decode($getData);
        $listSize = $getData->listSize;
        $listColor = $getData->listColor;

        $view->with('headCategory', $headCategory);
    }
}