@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Product</div>
  <div class="card-body">

      <form action="{{ url('product/' .$products->id) }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Product code</label></br>
        <input type="text" name="product_code" id="product_code" value="{{$products->product_code}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="text" name="sold_quantity" id="sold_quantity" value="{{$products->sold_quantity}}" class="form-control"></br>
        <label>Med Price</label></br>
        <input type="text" name="med_price" id="med_price" value="{{$products->med_price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
