<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('pages.admin.dashboard', compact('products'));
    }
}
