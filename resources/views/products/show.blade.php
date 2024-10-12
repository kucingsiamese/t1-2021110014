@extends('layouts.app')

@section('title', "Product: $product->name")

@section('content')

@if ($product->avatar)
    <img src="{{ $product->avatar_url }}" class="rounded img-thumbnail mx-auto d-block my-3"/>
@endif

<table class="table table-bordered">
    <tbody>
        <tr>
            <th scope="row">Product</th>
            <td>{{ $product->product }}</td>
        </tr>
        <tr>
            <th scope="row">Retail Price</th>
            <td>{{ $product->retail_price }}</td>
        </tr>
        <tr>
            <th scope="row">Wholesale Price</th>
            <td>{{ $product->wholesale_price }}</td>
        </tr>
        <tr>
            <th scope="row">Quantity</th>
            <td>{{ $product->quantity }}</td>
        </tr>
    </tbody>
</table>

<div>
    <small>Created at: {{ $product->created_at }}</small>
    @if ($product->updated_at)
    <br><small>Updated at: {{ $product->updated_at }}</small></br>
    @endif
</div>
@endsection
