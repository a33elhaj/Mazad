@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Customer Code : {{ $customers->customer_code }}</h5>
        <h5 class="card-title">Name : {{ $customers->name }}</h5>
        <h5 class="card-title">phone : {{ $customers->phone }}</h5>
        <h5 class="card-title">reg number : {{ $customers->reg_number }}</h5>
        <h5 class="card-title">vat number : {{ $customers->vat_number }}</h5>
        <h5 class="card-title">address : {{ $customers->address }}</h5>
        <h5 class="card-title">quantity : {{ $customers->quantity }}</h5>
        <h5 class="card-title">almuaref name : {{ $customers->almuaref_name }}</h5>
        <h5 class="card-title">almuaref phone : {{ $customers->almuaref_phone }}</h5>

  </div>
  </div>
</div>
@endsection
