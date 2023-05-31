@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Customer</div>
  <div class="card-body">

      <form action="{{ url('customer') }}" method="post">
        {!! csrf_field() !!}
		<label>Customer code</label></br>
        <input type="text" name="customer_code" id="customer_code" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Reg Number</label></br>
        <input type="text" name="reg_number" id="reg_number" class="form-control"></br>
        <label>Vat Number</label></br>
        <input type="text" name="vat_number" id="vat_number" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <label>almuaref name</label></br>
        <input type="text" name="almuaref_name" id="almuaref_name" class="form-control"></br>
        <label>almuaref Phone</label></br>
        <input type="text" name="almuaref_phone" id="almuaref_phone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
