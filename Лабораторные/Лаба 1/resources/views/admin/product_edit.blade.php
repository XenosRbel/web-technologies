@extends('layouts.app')

@section('content')

    @include('admin.header')

<div class="container mt-4">
    <form method="POST" action="/product-update" enctype="multipart/form-data">
        @csrf
        <div class="form-group admin">
            <label for="product_id">Select a product</label>
            <select class="form-control" id="product_id" name="id" data-size="5" style="width:100%;">
                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Some product">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Some Category">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="availability" id="in_stock" value="{{\App\Models\Product::AVAILABILITY_IN_STOCK}}" checked>
            <label class="form-check-label" for="in_stock">
                In Stock
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="availability" id="out_of_stock" value="{{\App\Models\Product::AVAILABILITY_OUT_OF_STOCK}}">
            <label class="form-check-label" for="out_of_stock">
                Out Of Stock
            </label>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Set the price">
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image" aria-describedby="inputGroupFileAddon02">Choose image</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
