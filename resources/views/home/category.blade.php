@extends('layouts.master')

@section('content')
<?php foreach ($products as $product) { ?>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="{{$product->image()}}" alt="...">
            <div class="caption">
                <h4>{{$product->name}}</h4>
                <p class="content">{{$product->about}}</p>
                <h5>Price: Rs.{{$product->price}}</h5>
                <p class="text-center">
                    <button id="addcartbtn_{{$product->id}}" class="btn btn-primary btn-sm" onclick="addtocart({{$product->id}})">Add to cart <i class="fa fa-cart-plus"></i></button>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<?php } ?>

@endsection