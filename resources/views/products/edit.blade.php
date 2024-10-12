@extends('layouts.app')

@section('title', 'Update Product')

@section('content')

<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>Update Existing Product</h1>
</div>

<div class="row my-5">
    <div class="col-12 px-5">
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('product.update', $guest) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name"
                    placeholder="Product Name" name="product" required value="{{ old('name', $product->name) }}">
            </div>

            <div class="form-group">
                <label for="retail_price">Message</label>
                <input type="numeric" class="form-control" id="retail_price"
                    placeholder="Retail Price" name="retail_price" required value="{{ old('retail_price', $product->retail_price) }}">
            </div>

            <div class="form-group">
                <label for="wholesale_price">Wholesale Pice</label>
                <input type="numeric" class="form-control" id="wholesale_price"
                    placeholder="Wholesale Price" name="wholesale_price" value="{{ old('wholesale_price', $product->wholesale_price) }}">
            </div>

            <div class="form-group">
                <label for="quantity">Phone Number</label>
                <input type="numeric" class="form-control" id="quantity"
                    placeholder="Quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
                @if ($product->avatar)
                    <img src={{ $product->avatar_url }} class="mt-3" style="max-width: 400px;"/>
                @endif
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>

@endsection
