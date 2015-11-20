<html>
    <head></head>
    <body style="font-family: sans-serif;">
        <div style="background: #05B0DF;
             padding: 5px;
             text-align: center;">
            <h2>EMarket</h2>
        </div>
        <div style="padding: 10px">
            <div>
                <h3 style="float: right;display: inline-block">Order: #{{$data['order_details']->id}}</h3>
                <h3 style="display: inline-block">Invoice</h3>
                <hr style="border-color: rgba(0, 0, 0, 0.3);"/>
            </div>

            <div>
                <div style="display: inline-block;">
                    <p style="font-size: 16px">
                        <strong>Billed To:</strong><br/>
                        {{$data['order_details']->fullname}}<br/>
                        <?php echo nl2br($data['order_details']->address) ?>
                    </p>
                </div>
                <div style="display: inline-block;float: right">
                    <p>
                        <strong>Order Date: <?php echo date('d M Y', strtotime($data['order_details']->created_at)) ?></strong>

                    </p>
                </div>
            </div>
            <hr style="border-color: rgba(0, 0, 0, 0.3);"/>


            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="text-align: left">Product</th>
                        <th>Quantity</th>
                        <th style="text-align: right">Price</th>
                        <th style="text-align: right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['order_details']->Items as $item) { ?>
                        <tr>
                            <td>{{$item->product->name}}</td>
                            <td style="text-align: center">{{$item->quantity}}</td>
                            <td style="text-align: right">{{$item->product->price}}</td>
                            <td style="text-align: right">{{number_format($item->quantity * $item->product->price,2)}}</td>
                        </tr>
                    <?php } ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align: right">Total:</td>
                        <td style="text-align: right">{{number_format($data['total'],2)}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div style="background: #05B0DF;
             padding: 7px;
             text-align: center;">
            <a>www.emarket.com</a>
        </div>
    </body>
</html>