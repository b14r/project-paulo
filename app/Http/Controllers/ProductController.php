<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Platform;
use App\Models\RegisterProduct;
use App\Models\Warranty;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $category = Category::all();
        $platform = Platform::all();
        $warranty = Warranty::all();
        return view('register-product', [
            'category' => $category,
            'platform' => $platform,
            'warranty' => $warranty
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'bar_code' => ['required','numeric','unique:'.RegisterProduct::class],
            'name' => ['required','string'],
            'category_id' => ['required'],
            'manufacturer' => ['required','string'],
            'quantity' => ['required','string'],
            'price' => ['required','numeric'],
        ]);

        $product = new RegisterProduct();

        $product->bar_code = $request->input('bar_code');
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->manufacturer = $request->input('manufacturer');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->platform_id = $request->input('platform_id');
        $product->warranty_id = $request->input('warranty_id');

        $product->save();

        return view('dashboard');
    }








}
