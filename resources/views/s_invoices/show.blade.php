@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Supplier invoice Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">invoice number : {{ $s_invoice->invoice_number }}</h5>
        <h5 class="card-title">supplier_id : {{ $s_invoice->supplier_id }}</h5>
        <h5 class="card-title">invoice_date : {{ $s_invoice->invoice_date }}</h5>
        <h5 class="card-title">recive_receipt_no : {{ $s_invoice->recive_receipt_no }}</h5>
        <h5 class="card-title">customer_id : {{ $s_invoice->customer_id }}</h5>
        <h5 class="card-title">product_id : {{ $s_invoice->product_id }}</h5>
        <h5 class="card-title">quantity : {{ $s_invoice->quantity }}</h5>
        <h5 class="card-title">vat : {{ $s_invoice->vat }}</h5>
        <h5 class="card-title">service_percent : {{ $s_invoice->service_percent }}</h5>
        <h5 class="card-title">service_amount : {{ $s_invoice->service_amount }}</h5>
        <h5 class="card-title">expenses : {{ $s_invoice->expenses }}</h5>
        <h5 class="card-title">expenses_description : {{ $s_invoice->expenses_description }}</h5>
        <h5 class="card-title">discount : {{ $s_invoice->discount }}</h5>


  </div>
  </div>
</div>
@endsection
