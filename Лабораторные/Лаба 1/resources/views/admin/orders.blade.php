@extends('layouts.app')

@section('content')

    @include('admin.header')

    <div class="container mt-4">
        <div class="list-group">
            @foreach($orders as $order)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <?php $price = 0;?>
                        @foreach($order->items as $item)
                            <div class="d-flex">
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 16px;" class="mb-1">{{$item->product->title}}</h5>
                                    <img style="width: 70px;" src="{{url('/images/' . $item->product->image)}}" alt="">
                                </div>
                                (<span>{{$item->count}}</span>)
                            </div>
                                <?php $price += ($item->count*$item->product->price);?>

                            @endforeach
                            <small class="text-muted">{{$item->created_at}}</small>
                    </div>
                    <hr>
                    <p class="mb-1">TOTAL:  ${{$price}}</p>
                    <p class="mb-1">User:  {{$order->user->name}}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
