<?php

namespace App\Http\Controllers;

use Anam\Phpcart\Cart;
use Illuminate\Http\Request;
/**
 * Description of Cart
 *
 * @author Alivenow
 */
class ShoppingCart extends Controller {

    public function getAdd(Request $request) {
        $product = tbl_product::find($request->product_id);

        $cart = new Cart();
        $cart->add([
            'id' => $request->product_id,
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'extra' => $product
        ]);
    }

    public function getRemove(Request $request) {
        $cart = new Cart();
        $cart->remove($request->product_id);
    }

    public function getUpdate(Request $request) {
        $cart = new Cart();
        $cart->updateQty($request->product_id, $request->quantity);
    }

    public function getShow() {
        $cart = new Cart();

        $data = array(
            'contents' => $cart->items(),
            'total' => $cart->getTotal()
        );

        return view('subview/cart', $data);
    }

}
