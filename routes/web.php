<?php

use App\Http\Resources\CatChildrenResourse;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\ProductsResource;
use App\Models\Categories;
use App\Models\CategoriesChildren;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/gala', function () {
    return view('gala');
})->name('gala');

Route::middleware(['auth', 'isAdmin'])->group( function () {

    Route::get('/add_product', function () {

        $product_all = ProductsResource::collection(Products::paginate(50));
        $cat = CategoriesResource::collection(Categories::all());
        $cat_children = CatChildrenResourse::collection(CategoriesChildren::all());
        $users = User::all();

        $f = Storage::disk('images');
        $files = $f->allFiles();

        $d = Storage::disk('images_in_public');
        $public = $d->allFiles();

        return view('add_product', compact('users','files', 'public', 'product_all', 'cat', 'cat_children',));
    })->name('add_product');

    Route::get('/set_admin/{id}', function ($id)
    {
        // $update = User::where('id', $id)->update(['role_id' => 5]);
        if (User::where('id', $id)->update(['role_id' => 5])) {
            $output = true;
        } else {
            $output = false;
        }
        return $output;
    });
    Route::get('/delete_user/{id}', function ($id)
    {        
        if (User::find($id)->delete() ) {
            $output = true;
        } else {
            $output = false;
        }
        return $output;
    });

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
