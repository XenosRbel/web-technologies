@extends('layouts.app')

@section('content')

    @include('admin.header')

<div class="container mt-4">
    <form method="POST" action="/product-delete" enctype="multipart/form-data">
        @csrf
        <div class="form-group admin">
            <label for="product_id">Select a product</label>
            <select class="form-control" id="product_id" name="id" data-size="5" style="width:100%;">
                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->title}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <hr>
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
</div>
@endsection
