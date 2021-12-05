<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view( 'welcome' );
    }


    public function shop(Request $request) {
        if(isset($request->search)){
            $products = Product::whereRaw('lower(title) like (?)',["%{$request->search}%"])->get();
        }else{
            $products = Product::all();
        }
        return view( 'shop', [
            'products' => $products
        ] );
    }

    public function product( Request $request ) {
        return view( 'product', [
            'product' => Product::findOrFail( $request->id )
        ] );
    }

    public function checkout() {
        return view( 'checkout' );
    }

    public function contact() {
        return view( 'contact' );
    }

    public function store_checkout( Request $request ) {
        $order          = new Order;
        $order->user_id = Auth::id();
        $order->save();
        $checkout = json_decode( $request->checkout, true );
        foreach ( $checkout as &$pItem ) {
            $pItem     = json_decode( $pItem, true );
            $orderItem = new OrderItem( [
                'product_id' => $pItem['id'],
                'order_id'   => $order->id,
                'count'      => $pItem['count']
            ] );
            $orderItem->save();
        }

        return view( 'shop', [
            'products' => Product::all(),
            'success' => true
        ] );
    }
}
