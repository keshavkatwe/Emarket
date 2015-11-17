<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_categories;
use App\tbl_product;

/**
 * Description of index
 *
 * @author Keshav K
 */
class Index extends Controller {

    public function Index($category_id = NULL) {

        $products = array();

        if ($category_id != null) {
            $products = tbl_product::all();
        }



        $data = array(
            'categories' => tbl_categories::all(),
            'products' => $products
        );

        return view('home/index', $data);
    }

}
