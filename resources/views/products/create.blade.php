@extends('layouts.app')

@section('title', 'Register New Product')

@section('content')

<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>Create New Product</h1>
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

        <form action="{{ route('guests.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name"
                    placeholder="Product Name" name="product" required value="{{ old('product_name') }}">
            </div>

            <div class="form-group">
                <label for="retail_price">Price</label>
                <input type="numeric" class="form-control" id="retail_price"
                    placeholder="Price" name="price" required value="{{ old('retail_price') }}">
            </div>

            <div class="form-group">
                <label for="wholesale_price">Email</label>
                <input type="numeric" class="form-control" id="email"
                    placeholder="Wholesale Price" name="wholesale_price" value="{{ old('wholesale_price') }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="integer" class="form-control" id="quantity"
                    placeholder="Quantity" name="quantity" value="{{ old('quantity') }}">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" id="avatar"
                    name="avatar">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </form>
    </div>
</div>

@endsection
