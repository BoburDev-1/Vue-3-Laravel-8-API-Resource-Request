<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\CategoriesChildren;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class AddProductController extends Controller
{
    function add_product(Products $products, Request $request)
    {
        $success ='';

        $products->title = $request->title;
        $products->img = $request->img;
        $products->price = $request->price;
        $products->categories_id = $request->cat;
        $products->categories_children_id = $request->catChildren;

        if ($products->save()) {
            $success = true;
        } else {
            $success = false;
        }
        
        return $success;
    }

    public function getFiles()
    {
        $f = Storage::disk('images');
        $files = $f->allFiles();

        return view('files', ['files' => $files]);
    }

    public function delete(Request $request)
    {
        $f = Storage::disk('images');
        $f->delete($request->filename);

        return redirect('upload/all');
    }

    public function delete_product($id){
        // Products::where('id', $request->id)->delete();
        // Products::find($id)->delete();
        if (Products::find($id)->delete()) {
            $success = true;
        } else {
            $success = false;
        }
        
        return $success = true;;
    }

    function getCategories($id)
    {
        $category_id = Categories::find($id);
        return $category_id->title;
    }
    function getCategories_children($id)
    {
        $category_id = CategoriesChildren::find($id);

        try {
            $category_id = $category_id->title;
        } catch (\Throwable $th) {
            $category_id = 'empty';
        }
        
        return $category_id;
    }
}
