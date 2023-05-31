@extends('layouts.app-master')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Customer</div>
  <div class="card-body">

      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        {{ method_field('POST') }}
        {{ csrf_field() }}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Customer code</label></br>
        <input type="text" name="customer_code" id="customer_code" value="{{$customers->customer_code}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control"></br>
        <label>reg number</label></br>
        <input type="text" name="reg_number" id="reg_number" value="{{$customers->reg_number}}" class="form-control"></br>
        <label>vat number</label></br>
        <input type="text" name="vat_number" id="vat_number" value="{{$customers->vat_number}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
        <label>quantity</label></br>
        <input type="text" name="quantity" id="quantity" value="{{$customers->quantity}}" class="form-control"></br>
        <label>almuaref name</label></br>
        <input type="text" name="almuaref_name" id="almuaref_name" value="{{$customers->almuaref_name}}" class="form-control"></br>
        <label>almuaref phone</label></br>
        <input type="text" name="almuaref_phone" id="almuaref_phone" value="{{$customers->almuaref_phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
