@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Quantity</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalQuantity }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Most Expensive Product</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $mostExpensiveProduct->product_name }}</h5>
                    <p class="card-text">Price: {{ $mostExpensiveProduct->retail_price }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Highest Quantity Product</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $highestQuantityProduct->product_name }}</h5>
                    <p class="card-text">Quantity: {{ $highestQuantityProduct->quantity }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
