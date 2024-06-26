<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.shop', compact('products'), ['title' => 'Shop Pages']);
    }

    public function productByCategory(Category $category)
    {
        // $products = Category::findOrFail($category)->products;
        $products = $category->products;
        if($category->name){

            dd($category->name);
        }else{
            dd('kosong');
        }
        return view('pages.shop', compact('products'), ['title' => 'Shop Pages','category' => $category->name]);
    }

    public function getCategories()
    {
        $categories  = Category::all();
        // dd($categories);
        return view('pages.dashboard', compact('categories'), ['title' => 'Dashboard']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
