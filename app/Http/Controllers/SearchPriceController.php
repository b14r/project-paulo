<?php

namespace App\Http\Controllers;

use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class SearchPriceController extends Controller
{
    public function index(Request $request){
        $search_price = RegisterProduct::where('bar_code', 'LIKE', $request->search_price ?? '')->first();

        return view('search-price', ['search_price' => $search_price]);
    }





}
