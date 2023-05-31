@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Customer</div>
  <div class="card-body">

      <form action="{{ url('sinvoice') }}" method="post">
        {!! csrf_field() !!}
		<label>invoice number</label></br>
        <input type="text" name="invoice_number" id="invoice_number" class="form-control"></br>
        <label>supplier_id</label></br>
        <input type="text" name="supplier_id" id="supplier_id" class="form-control"></br>
        <label>invoice date</label></br>
        <input type="text" name="invoice_date" id="invoice_date" class="form-control"></br>
        <label>recive receipt_no</label></br>
        <input type="text" name="recive_receipt_no" id="recive_receipt_no" class="form-control"></br>
        <label>customer id</label></br>
        <input type="text" name="customer_id" id="customer_id" class="form-control"></br>
        <label>product_id</label></br>
        <input type="text" name="product_id" id="product_id" class="form-control"></br>
        <label>quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <label>vat</label></br>
        <input type="text" name="vat" id="vat" class="form-control"></br>
        <label>service_percent</label></br>
        <input type="text" name="service_percent" id="service_percent" class="form-control"></br>
        <label>service_amount</label></br>
        <input type="text" name="service_amount" id="service_amount" class="form-control"></br>
        <label>expenses</label></br>
        <input type="text" name="expenses" id="expenses" class="form-control"></br>
        <label>expenses_description</label></br>
        <input type="text" name="expenses_description" id="expenses_description" class="form-control"></br>
        <label>discount</label></br>
        <input type="text" name="discount" id="discount" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
