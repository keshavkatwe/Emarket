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
            'pid' => '',
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

        $input = Input::except('_token', 'image', 'pid');

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
        $data = array(
            'products' => tbl_product::all()
        );
        return view('pages/manageProduct', $data);
    }

    public function deleteProduct($pid) {
        $product = tbl_product::find($pid);
        $product->delete();
        return Redirect::back();
    }

    public function editProduct($pid) {
        $product = tbl_product::find($pid);
        $data = array(
            'pid' => $product->id,
            'image' => $product->image(),
            'name' => $product->name,
            'brand' => $product->brand,
            'category' => $product->category,
            'unit' => $product->unit,
            'price' => $product->price,
            'about' => $product->about,
            'categories' => tbl_categories::lists('name', 'id')
        );
        return view('pages/addProduct', $data);
    }

    public function updateProduct(Request $request) {

        $input = Input::except('_token', 'image', 'pid');
        foreach ($input as $key => $value) {
            $update = tbl_product::find($request->pid);
            $update->$key = $value;
            $update->save();
        }

        if (!empty($_FILES['image']['name'])) {
            $destinationPath = 'img'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = md5(time()) . '.' . $extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName);

            $update = tbl_product::find($request->pid);
            $update->image = $fileName;
            $update->save();
        }

        return Redirect::back();
    }

    public function manageCategory() {
        $data = array(
            'category' => tbl_categories::all()
        );
        return view('pages/manageCategory', $data);
    }

    public function saveCategory(Request $request) {

        $input = Input::except('_token');

        $category = new tbl_categories;
        foreach ($input as $key => $value) {
            $category->$key = $value;
        }
        $category->save();

        return Redirect::back();
    }

    public function deleteCategory($cid) {


        $product_list = tbl_product::where('category', '=', $cid)->get();
        if (count($product_list) > 0) {
            foreach ($product_list as $p) {
                $product = tbl_product::find($p->id);
                $product->delete();
            }
        }

        $category = tbl_categories::find($cid);
        $category->delete();

        return Redirect::back();
    }

}
