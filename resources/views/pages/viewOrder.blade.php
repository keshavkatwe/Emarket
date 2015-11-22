@extends('pages.layout.master')
@section('title', 'Order')
@section('title-info', 'Order Detail')
@section('content')
@parent
<br>

<div class="panel panel-default">
    <div class="panel-body">
        <h3>Order#: {{$order->id}}</h3>
        <hr/>

        <div class="row">
            <div class="col-md-6">
                <p>
                    <strong>Billing Address:</strong><br/>
                    {{$order->fullname}}
                    <?php echo nl2br($order->address) ?>
                </p>
            </div>
            <div class="col-md-6 text-right">
                <strong>Order Date:</strong> <?php echo date('d M Y', strtotime($order->created_at)) ?>
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th style="text-align: center">Quantity</th>
                    <th style="text-align: right">Price</th>
                    <th style="text-align: right">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grandtotal = 0;
                foreach ($order->Items as $item) {
                    $grandtotal = $grandtotal + ($item->Product->price * $item->quantity)
                    ?>
                    <tr>
                        <td><?php echo $item->Product->name ?></td>
                        <td style="text-align: center"><?php echo $item->quantity ?></td>
                        <td style="text-align: right"><?php echo $item->Product->price ?></td>
                        <td style="text-align: right"><?php echo number_format($item->Product->price * $item->quantity,2) ?></td>

                    </tr>
<?php } ?>
                <tr>
                    <td colspan="3" style="text-align: right">Total:</td>
                    <td style="text-align: right"><?php echo number_format($grandtotal,2)?></td>
                </tr>
            </tbody>
        </table>

        <h4>Prescription</h4>
        <img style="width: 300px" src="{{url('uploads/'.$order->prescription)}}"/>
    </div>
</div>


@stop
