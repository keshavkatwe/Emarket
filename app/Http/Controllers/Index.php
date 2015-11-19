<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_categories;
use App\tbl_product;
use Anam\Phpcart\Cart;

/**
 * Description of index
 *
 * @author Keshav K
 */
class Index extends Controller {

    public function Index($category_id = NULL) {
        $products = array();
        if ($category_id != null) {
            $products = tbl_product::where('category', $category_id)->get();
        }
        $data = array(
            'products' => $products
        );
        return view('home/index', $data);
    }

}
