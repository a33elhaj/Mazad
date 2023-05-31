@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Product</div>
  <div class="card-body">

      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
		<label>Product code</label></br>
        <input type="text" name="product_code" id="product_code" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="text" name="sold_quantity" id="sold_quantity" class="form-control"></br>
        <label>Med Price</label></br>
        <input type="text" name="med_price" id="med_price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
