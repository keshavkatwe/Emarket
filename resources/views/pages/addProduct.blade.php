@extends('pages.layout.master')
@section('title', ($name!='')?'Edit '.$name.'\'s profile':'Add Product')
@section('title-info', 'Please fill in valid information')
@section('content')
@parent
<div class="row">
    <div class="col-md-8">
        <!-- Horizontal Form -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Profile</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(array('url' => ($name=='')?'save_product':'update_product' ,'method' => 'POST','class'=>'form-horizontal','name'=>'FrmProduct','id'=>'FrmProduct','enctype'=>'multipart/form-data')) !!}
            <div class="box-body">
                <div class="form-group {{ $errors->first('image')? 'has-error':'' }}">
                    <label for="name" class="col-sm-3 control-label">Image &nbsp;</label>
                    <div class="col-sm-2">
                        @if ($image == "")
                        <i class="fa fa-picture-o fa-4x"></i>
                        @else
                        <img src="{{ url($image) }}" class="img-thumbnail" alt=" Image">
                        @endif
                    </div>
                    <div class="col-sm-7">
                        {!! Form::file('image', array("class"=>"form-control")) !!}
                        {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>
                <div class="form-group {{ $errors->first('brand')? 'has-error':'' }}">
                    <label for="brand" class="col-sm-3 control-label">Brand <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('brand',Input::old('brand',$brand), array("class"=>"form-control", "placeholder"=>"Brand name")) !!}
                        {!! $errors->first('brand', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>
                <div class="form-group {{ $errors->first('name')? 'has-error':'' }}">
                    <label for="name" class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('name',Input::old('name',$name), array("class"=>"form-control", "placeholder"=>"Product name")) !!}
                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>
                <div class="form-group {{ $errors->first('category')? 'has-error':'' }}">
                    <label for="categories" class="col-sm-3 control-label">Category <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::select('category', $categories, $category ,array("class"=>"form-control")); !!}
                        {!! $errors->first('category', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>
                <div class="form-group {{ $errors->first('unit')? 'has-error':'' }}">
                    <label for="unit" class="col-sm-3 control-label">Unit <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('unit',Input::old('unit',$unit), array("class"=>"form-control", "placeholder"=>"Unit")) !!}
                        {!! $errors->first('unit', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>    
                <div class="form-group {{ $errors->first('price')? 'has-error':'' }}">
                    <label for="unit" class="col-sm-3 control-label">Price <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('price',Input::old('price',$price), array("class"=>"form-control", "placeholder"=>"Price")) !!}
                        {!! $errors->first('price', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>    
                <div class="form-group {{ $errors->first('about')? 'has-error':'' }}">
                    <label for="name" class="col-sm-3 control-label">About &nbsp;</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('about',Input::old('about',$about), array("class"=>"form-control", "placeholder"=>"Brief information about product")) !!}
                        {!! $errors->first('about', '<span class="text-danger">:message</span>') !!}  
                    </div>
                </div>
            </div><!-- /.box-body -->
            <input type="hidden"  value="{{ $pid }}" name="pid" id="pid" />
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Save changes</button>
            </div><!-- /.box-footer -->
            {!! Form::close() !!}
        </div><!-- /.box -->

    </div>
</div>
@stop

@section('include_js')
<script type="text/javascript" src="{{ URL::asset('plugins/custom/productEdit.js') }}"></script>   
@stop