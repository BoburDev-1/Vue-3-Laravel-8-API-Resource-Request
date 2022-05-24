<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Products;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    
    // public function search_product(Request $request)
    public function search_product($data)
    {
        $producs = Products::where('title', 'ilike', "%$data%")->get();
        return ProductsResource::collection($producs);
    }
}
