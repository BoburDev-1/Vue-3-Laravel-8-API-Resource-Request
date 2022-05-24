<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ProductsResource::collection(Products::all());
        return ProductsResource::collection(Products::inRandomOrder()->limit(30)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $sort)
    {
        // $allCollection = '';
        if ( $sort == 'top' ) {
            $allCollection = Products::where('categories_id', $id)->orderBy('price', 'desc')->paginate(15);
        } 
        elseif($sort == 'low' ){
            $allCollection = Products::where('categories_id', $id)->orderBy('price', 'asc')->paginate(15);
        }
        else {
            $allCollection = Products::where('categories_id', $id)->paginate(15);
            // $allCollection = Products::where('categories_id', $id)->orderBy('price', 'asc')->paginate(15);
        }
        
        // $allCollection = Products::where('categories_id', $id)->orderBy('price', 'desc')->paginate(15);
        return ProductsResource::collection($allCollection) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
// return Products::where('categories_id', $id)->get();
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
