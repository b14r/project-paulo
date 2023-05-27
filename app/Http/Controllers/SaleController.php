<?php

namespace App\Http\Controllers;

use App\Models\ItemsShoppingCart;
use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        return view('make-sale');
    }

    public function store(Request $request) {

        $item = new ItemsShoppingCart();



        return view('dashboard');
    }
}
