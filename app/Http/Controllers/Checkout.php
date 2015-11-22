<?php

namespace App\Http\Controllers;

use Anam\Phpcart\Cart;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use Mail;

/**
 * Description of Checkout
 *
 * @author Alivenow
 */
class Checkout extends Controller {

    public function getIndex() {

        $cart = new Cart();
        $data = array(
            'shopping_cart' => $cart->items(),
            'total' => $cart->getTotal()
        );

        return view('home/checkout', $data);
    }

    public function postIndex(Request $request) {

        $cart = new Cart();

        $prescription = NULL;
        if ($request->hasFile('prescription')) {
            $file = $request->file('prescription');
            $request->file('prescription')->move('uploads', $file->getClientOriginalName());
            $prescription = $file->getClientOriginalName();
        }

        $order = new Order;
        $order->fullname = $request->fullname;
        $order->email = $request->emailaddress;
        $order->address = $request->address;
        $order->prescription = $prescription;
        $order->save();

        for ($i = 0; $i < count($request->product_id); $i++) {
            $orderItem = new OrderItem;
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $request->product_id[$i];
            $orderItem->quantity = $request->quantity[$i];
            $orderItem->save();
        }

        $order_details = Order::find($order->id);

        $data = array(
            'order_details' => $order_details,
            'total' => $cart->getTotal(),
            'fullname' => $request->fullname,
            'emailaddress' => $request->emailaddress
        );

//        Mail::send('emails.order', ['data' => $data], function ($m) use ($data) {
//            $m->from('keshav.katwe@chromosis.com', 'EMarket');
//            $m->to($data['emailaddress'], $data['fullname'])->subject('Order Placed Successfully');
//        });

        $cart->clear();

        return redirect('checkout/placed/' . $order->id);
    }

    public function getPlaced() {
        $data = array();
        return view('home/placed', $data);
    }

    public function getMail() {

        $data = array();

        Mail::send('emails.mail', ['data' => $data], function ($m) use ($data) {
            $m->from('amsa@amsaembedded.com', 'Your Application');
            $m->to('keshav.katwe@gmail.com', 'Keshav Katwe')->subject('Your Reminder!');
        });
    }

    public function getOrder($order_id) {

        $order_details = Order::find($order_id);

        $data = array(
            'order_details' => $order_details,
            'total' => 2000
        );
        return view('emails/order', $data);
    }

}
