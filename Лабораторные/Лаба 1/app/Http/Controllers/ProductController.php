<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store( Request $request ) {
        Product::create( [
            'title'        => $request->get( 'title' ),
            'category'     => $request->get( 'category' ),
            'availability' => $request->get( 'availability' ),
            'description'  => $request->get( 'description' ),
            'price'        => $request->get( 'price' ),
            'image'        => $request->file( 'image' )->getClientOriginalName()
        ] );
        $request->image->move(public_path('images'), $request->file( 'image' )->getClientOriginalName());
        return view( 'admin/index' );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update( Request $request ) {
        $data = $request->all();
        if(!empty($request->file( 'image' ))){
            $data['image'] = $request->file( 'image' )->getClientOriginalName();
        }
        unset($data['_token']);
        DB::table('products')->where('id', '=', $request->id)->update($data);
        return view( 'admin/product_edit', [
            'products' => Product::all()
        ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request ) {
        DB::table('products')->where('id', '=', $request->id)->delete();
        return view( 'admin/product_delete', [
            'products' => Product::all()
        ] );
    }
}
