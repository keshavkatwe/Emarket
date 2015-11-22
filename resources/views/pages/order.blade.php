@extends('pages.layout.master')
@section('title', 'Orders')
@section('title-info', 'List of orders received')
@section('content')
@parent
<br>

<div class="table-responsive">
    <table class="table table-hover"> 
        <thead>
            <tr>
                <th style="text-align: center">Order#</th>
                <th>Billing Address</th>
                <th>Order Date</th>
                <th></th>
            </tr>
        </thead> 
        <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td style="text-align: center">{{$order->id}}</td>
                    <td>
                        {{$order->fullname}},<br/>
                        <?php echo nl2br($order->address) ?>
                    </td>
                    <td><?php echo date('d M Y', strtotime($order->created_at)) ?></td>
                    <td><a class="btn btn-primary" href="{{url('orders/view/'.$order->id)}}">View</a></td>
                </tr>
            <?php } ?>

        </tbody>
    </table> 
</div>


@stop
