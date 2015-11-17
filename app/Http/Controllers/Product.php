<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use App\tbl_categories;
use App\User;
use App\tbl_product;
use DB;
use Input;
use Auth;
use Psy\Util\Json;
use Illuminate\Support\Facades\View;

class Product extends Controller {

    public function addProduct() {
        $data = array(
            'image' => '',
            'name' => '',
            'brand' => '',
            'category' => '',
            'unit' => '',
            'price' => '',
            'about' => '',
            'categories' => tbl_categories::lists('name', 'id')
        );
        return view('pages/addProduct', $data);
    }

    public function saveProduct(Request $request) {

        $input = Input::except('_token', 'image');

        $product = new tbl_product;
        foreach ($input as $key => $value) {
            $product->$key = $value;
        }
        $product->save();

        
        if (!empty($_FILES['image']['name'])) {
            $destinationPath = 'img'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = md5(time()) . '.' . $extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName);
            
            $update = tbl_product::find($product->id);
            $update->image = $fileName;
            $update->save();
        }

        return Redirect::back();
    }
    
    public function manageProduct() {
      
    }

}
