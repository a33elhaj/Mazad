@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Customer Invoice</div>
  <div class="card-body">

      <form action="{{ url('cinvoice/' .$c_invoice->id) }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$c_invoice->id}}" id="id" />
        <label>invoice number</label></br>
        <input type="text" name="invoice_number" id="invoice_number" value="{{$c_invoice->invoice_number}}" class="form-control"></br>
        <label>invoice_date</label></br>
        <input type="text" name="invoice_date" id="invoice_date" value="{{$c_invoice->invoice_date}}" class="form-control"></br>
        <label>recive_receipt_no</label></br>
        <input type="text" name="recive_receipt_no" id="recive_receipt_no" value="{{$c_invoice->recive_receipt_no}}" class="form-control"></br>
        <label>customer_id</label></br>
        <input type="text" name="customer_id" id="customer_id" value="{{$c_invoice->customer_id}}" class="form-control"></br>
        <label>product_id</label></br>
        <input type="text" name="product_id" id="product_id" value="{{$c_invoice->product_id}}" class="form-control"></br>
        <label>quantity</label></br>
        <input type="text" name="quantity" id="quantity" value="{{$c_invoice->quantity}}" class="form-control"></br>
        <label>vat</label></br>
        <input type="text" name="vat" id="vat" value="{{$c_invoice->vat}}" class="form-control"></br>
        <label>discount</label></br>
        <input type="text" name="discount" id="discount" value="{{$c_invoice->discount}}" class="form-control"></br>
        <label>supplier_id</label></br>
        <input type="text" name="supplier_id" id="supplier_id" value="{{$c_invoice->supplier_id}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
