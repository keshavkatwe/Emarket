<?php if (count($contents)) { ?>
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: left">Product</th>
                <th>Quantity</th>
                <th style="text-align: right">Prize</th>
                <th style="text-align: right">Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contents as $cart) { ?>
                <tr id="tr_{{$cart->id}}">
                    <td>
                        <img style="height: 100px;width: 100px;float: left;" src="{{($cart->extra->image == "")?url("img/default.png"):url("img/".$cart->extra->image)}}"/>
                        <div style="margin-left: 115px;">
                            <span style="font-size: 15px;font-weight: 500;">{{$cart->name}}</span>
                            <p>By <strong>{{$cart->extra->brand}}</strong></p>
                        </div>
                    </td>
                    <td style="text-align: center;width: 10%;"><input min="1" id="quantity_{{$cart->id}}" onchange="updateCart({{$cart->id}})" type="number" class="form-control" value="{{$cart->quantity}}"/></td>
                    <td style="text-align: right;width: 10%;">{{$cart->price}}</td>
                    <td style="text-align: right;width: 10%;" id="subtotal_{{$cart->id}}">{{number_format($cart->price * $cart->quantity,2)}}</td>
                    <td style="width: 5%;"><a id="removebtn_{{$cart->id}}" onclick="removefromcart({{$cart->id}})"><i class="fa fa-trash-o"></i></a></td>
                </tr>
            <?php } ?>
            <tr style="font-size: 16px;font-weight: 600;">
                <td colspan="3" style="text-align: right">
                    Total:
                </td>
                <td style="text-align: right" id="total_cart">
                    {{number_format($total,2)}}
                </td>
                <td></td>
            </tr>

        </tbody>
    </table>

<?php } else {
    ?>
    <h4 class="text-center">No items in the cart</h4>
<?php } ?>