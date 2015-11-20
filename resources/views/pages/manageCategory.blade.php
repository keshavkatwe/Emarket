@extends('pages.layout.master')
@section('title', 'Category')
@section('title-info', 'You can manage your product category\'s here')
@section('content')
@parent
<br>
{!! Form::open(array('url' => 'save_category' ,'method' => 'POST','class'=>'form-horizontal','name'=>'FrmCategory','id'=>'FrmCategory','enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-md-2">
        <label class="pull-right">Category <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-5">
        <input type="text" name="name" id="name" class="form-control" placeholder="Category name" />
    </div>
    <div class="col-md-5">
        <button class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
    </div>
</div>
{!! Form::close() !!}
<br>
<div class="table-responsive">
    <table class="table table-hover"> 
        <thead>
            <tr>
                <th>Category name</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>

            @if (count($category) == 0)
            <tr>
                <td colspan="6" class="text-center">No records</td>
            </tr>
            @endif
            @foreach ($category as $cat)

            <tr>
                <td>{{ $cat->name }}</td>
                <td>
                    <button class="btn btn-danger btn-xs" onclick="deleteCategory({{ $cat->id }})"><i class="fa fa-trash"></i> Delete</button>
                </td>
            </tr>  

            @endforeach
        </tbody>
    </table> 
</div>


@stop

@section('include_js')
<script type="text/javascript">
            function deleteCategory(cid){

            var r = confirm("Are you sure want to delete this category? Make sure deleting of category will erase all related category products.");
                    if (r){
            window.location = "delete_category/" + cid;
            }
            }
</script>
@stop