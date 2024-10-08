@extends('frontend.layout.app')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

<style>
    .product-image {
        max-height: 500px;
        object-fit: cover;
    }
    .product-details {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
    }
</style>

<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ $product->GetImagePath() }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        
        <!-- Product Details -->
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            <p class="lead">{{ $product->description }}</p>
            <h4 class="text-success mb-3">${{ number_format($product->price, 2) }}</h4>


            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
        </div>
    </div>
</div>
@endsection