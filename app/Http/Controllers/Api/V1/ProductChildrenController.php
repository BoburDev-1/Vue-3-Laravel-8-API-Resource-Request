<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Products;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProductChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show(Request $request)
    {
        if ($request->sort == 'top' ) {
            $allCollection = Products::where('categories_id', $request->catid)
                ->where('categories_children_id', $request->catchildrenid)
                ->orderBy('price', 'desc')
                ->paginate(15);
        }
        elseif ($request->sort == 'low' ){
            $allCollection = Products::where('categories_id', $request->catid)
                ->where('categories_children_id', $request->catchildrenid)
                ->orderBy('price', 'asc')
                ->paginate(15);
        }
         else {
         $allCollection = Products::where('categories_id', $request->catid)
                ->where('categories_children_id', $request->catchildrenid)
                ->paginate(15);
        }
        
        // $allCollection = Products::where('categories_id', $request->catid)
        // ->where('categories_children_id', $request->catchildrenid)
        // ->paginate(15);
        return ProductsResource::collection($allCollection);
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
