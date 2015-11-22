<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

/**
 * Description of Orders
 *
 * @author Alivenow
 */
class Orders extends Controller {

    public function getIndex() {
        $data = array(
            'orders' => Order::all()
        );


        return view('pages.order', $data);
    }

    public function getView($order_id) {
        $data = array(
            'order' => Order::find($order_id)
        );


        return view('pages.viewOrder', $data);
    }

}
