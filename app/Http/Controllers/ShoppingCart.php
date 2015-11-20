<?php

namespace App\Http\Controllers;

use Anam\Phpcart\Cart;
use Illuminate\Http\Request;
use App\tbl_product;

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

        return response()->json(['cart_count' => $cart->count()]);
    }

    public function getRemove(Request $request) {
        $cart = new Cart();
        $cart->remove($request->product_id);

        return response()->json(['cart_count' => $cart->count(), 'cart_total' => $cart->getTotal()]);
    }

    public function getUpdate(Request $request) {
        $cart = new Cart();
        $cart->updateQty($request->product_id, $request->quantity);

        $cart_item = $cart->get($request->product_id);
        return response()->json(['subtotal' => $cart_item->price * $cart_item->quantity, 'cart_total' => $cart->getTotal()]);
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
