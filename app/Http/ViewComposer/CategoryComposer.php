<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class CategoryComposer
{
    public $baseUrl = "http://shop.local.com/api/";
    public function __construct() {
        $this->url_get_cate = $this->baseUrl."category";
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
}