@extends('pages.layout.master')
@section('title', 'Manage Product')
@section('title-info', 'You can manage your product\'s here')
@section('content')
@parent
<div class="table-responsive">
    <table class="table table-hover"> 
        <thead>
            <tr>
                <th>Image</th>
                <th>Product name</th>
                <th>Category</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead> 
        <tbody>

            @if (count($products) == 0)
            <tr>
                <td colspan="6" class="text-center">No records</td>
            </tr>
            @endif
            @foreach ($products as $product)

            <tr>
                <td style="width: 120px;"><img style="max-height: 100px" class="img-responsive img-thumbnail" src="{{ $product->image() }}" /> </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->categoryname->name }}</td>
                <td>{{ $product->unit }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->about }}</td>
                <td>
                    <a href="{{ url('edit_product/'.$product->id) }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                    <button class="btn btn-danger btn-xs" onclick="deleteProduct({{ $product->id }})"><i class="fa fa-trash"></i> Delete</button>
                </td>
            </tr>  

            @endforeach
        </tbody>
    </table> 
</div>


@stop

@section('include_js')
<script type="text/javascript">
            function deleteProduct(pid){

            var r = confirm("Are you sure want to delete this product?");
                    if (r){
            window.location = "delete_product/" + pid;
            }
            }
</script>
@stop