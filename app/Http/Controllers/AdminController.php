<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use function Laravel\Prompts\table;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('pages.admin.dashboard', compact('products'));
    }

    public function addProduct(Request $request)
    {

        // dd($request);
        // dd($request);
        // $image = $request->file('image')->getClientOriginalName();
        // try {
        $request->validate([
            "name" => "required|min:5",
            "stok" => "required",
            "price" => "required",
            "category_id" => "required",
            "description" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg|max:2048"
        ]);

        $image = $request->file('image');
        // dd($image->);
        $image->storeAs('public/images/products', $image->getClientOriginalName());


        // dd($validate);
        // echo($validate);
        Product::create([
            "name" => $request->name,
            "stok" => $request->stok,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "image" => $image->getClientOriginalName()
        ]);
        //redirect to index
        return redirect()->route('admin.dashboard')->with('success', 'Added successfull!');
        // } catch (ValidationException $e) {
        //     return redirect()->route('admin')->with('error', $e->getMessage());
        // }
    }

    public function update(Request $request)
    {
        $request->validate([
            "name" => "required|min:5",
            "stok" => "required",
            "price" => "required",
            "category_id" => "required",
            "description" => "required",
            "image" => "image|mimes:jpeg,png,jpg|max:2048"
        ]);
        $product = Product::findOrFail($request->product_id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/images/products', $image->getClientOriginalName());


            $product->update([
                "name" => $request->name,
                "stok" => $request->stok,
                "price" => $request->price,
                "category_id" => $request->category_id,
                "description" => $request->description,
                "image" => $image->getClientOriginalName()
            ]);
            # code...
        } else {
            $product->update([
                "name" => $request->name,
                "stok" => $request->stok,
                "price" => $request->price,
                "category_id" => $request->category_id,
                "description" => $request->description,
            ]);
        }
        // dd($request);
        return redirect()->route('admin.dashboard')->with('success', 'updated succesful!');


        // produ
    }

    public function delete($id, Product $product)
    {
        // dd($id);
        $product->find($id)->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Deleted successful!');

        // echo $id;
    }
}
