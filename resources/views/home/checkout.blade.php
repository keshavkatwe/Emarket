@extends('layouts.master')

@section('content')
<?php if (count($shopping_cart)) { ?>
    <form method="post" id="checkoutform" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Products</h3>
            </div>
            <div class="panel-body">
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
                        <?php foreach ($shopping_cart as $cart) { ?>

                        <input name="product_id[]" type="hidden" value="{{$cart->id}}"/>
                        <input name="quantity[]" type="hidden" value="{{$cart->quantity}}"/>

                        <tr>
                            <td>
                                <img style="height: 100px;width: 100px;float: left;" src="{{($cart->extra->image == "")?url("img/default.png"):url("img/".$cart->extra->image)}}"/>
                                <div style="margin-left: 115px;">
                                    <span style="font-size: 15px;font-weight: 500;">{{$cart->name}}</span>
                                    <p>By <strong>{{$cart->extra->brand}}</strong></p>
                                </div>
                            </td>
                            <td style="text-align: center;width: 10%;">{{$cart->quantity}}</td>
                            <td style="text-align: right;width: 10%;">{{$cart->price}}</td>
                            <td style="text-align: right;width: 10%;">{{number_format($cart->price * $cart->quantity,2)}}</td>
                        </tr>
                    <?php } ?>
                    <tr style="font-size: 16px;font-weight: 600;">
                        <td colspan="3" style="text-align: right">
                            Total:
                        </td>
                        <td style="text-align: right">
                            {{number_format($total,2)}}
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" class="form-control" name="fullname"/>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="emailaddress"/>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" name="mobile"/>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" placeholder="Address for items to be delivered"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Prescription</label>
                            <input type="file" name="prescription" class="form-control"/>
                            <span class="help-block"></span>
                        </div>
                        <p><strong>Note:</strong> Prescription is verified and order is confirmed</p>
                        <div class="form-group">
                            <label>Payment Type</label>
                            <p>Cash on delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <!--            <div class="panel-heading">
                                    <h3 class="panel-title">Details</h3>
                                </div>-->
                    <div class="panel-body text-center">
                        <p>Amount to be paid <strong>Rs.{{number_format($total,2)}}</strong></p>
                        <button class="btn btn-primary">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } else { ?>
    <h3 class="text-center">No items to checkout</h3>
<?php } ?>
@endsection


@section('script')

<script>
    $('#checkoutform').validate({
        rules: {
            fullname: {
                required: true
            },
            emailaddress: {
                required: true,
                email: true
            },
            address: {
                required: true
            },
            prescription: {
                required: true
            },
            mobile: {
                required: true
            }
        },
        messages: {
            fullname: {
                required: "Please enter fullname"
            },
            emailaddress: {
                required: "Please enter email address"
            },
            address: {
                required: "Please enter address",
            },
            prescription: {
                required: "Please choose prescription"
            },
            mobile: {
                required: "Please enter mobile number"
            }
        }, submitHandler: function (form) {
            form.submit();
        }
    });
</script>
@endsection