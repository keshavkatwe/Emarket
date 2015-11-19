<?php

namespace App\Http\Controllers;
use Anam\Phpcart\Cart;
use Illuminate\Http\Request;

/**
 * Description of Checkout
 *
 * @author Alivenow
 */
class Checkout extends Controller {

    public function getIndex() {

        $cart = new Cart();
        $data = array(
            'cart' => $cart->items(),
        );

        return view('home/checkout', $data);
    }

}
