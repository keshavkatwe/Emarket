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

    public function Index() {
        $products = tbl_product::all()->take(6);
        $data = array(
            'products' => $products
        );
        return view('home/index', $data);
    }

    public function Category($category_id) {
        $products = tbl_product::where('category', $category_id)->get();

        $data = array(
            'products' => $products
        );
        return view('home/category', $data);
    }

}
