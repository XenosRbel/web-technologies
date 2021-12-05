<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function index() {
        return view( 'admin/index' );
    }

    public function product_edit() {
        return view( 'admin/product_edit', [
            'products' => Product::all()
        ] );
    }

    public function product_delete() {
        return view( 'admin/product_delete', [
            'products' => Product::all()
        ] );
    }


    public function get_product( Request $request): \Illuminate\Http\JsonResponse {
        $product = Product::find( $request->id );

        return response()->json( [ 'product' => $product ] );
    }

    public function orders( Request $request) {
        return view('admin/orders', [
           'orders' => Order::all()
        ]);
    }
}
