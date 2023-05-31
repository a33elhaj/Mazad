@extends('layouts.app-master')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Products Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Product Code : {{ $products->product_code }}</h5>
                <h5 class="card-title">Name : {{ $products->name }}</h5>
                <p class="card-text">Address : {{ $products->sold_quantity }}</p>
                <p class="card-text">Mobile : {{ $products->med_price }}</p>
            </div>

        </div>
    </div>
@endsection
