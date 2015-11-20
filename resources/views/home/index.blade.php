@extends('layouts.master')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img style="width: 100%" src="{{url('slider/1.png')}}" alt="">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="{{url('slider/2.jpg')}}" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img style="width: 100%" src="{{url('slider/3.jpg')}}" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br/>
<div class="row">
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
</div>
@endsection