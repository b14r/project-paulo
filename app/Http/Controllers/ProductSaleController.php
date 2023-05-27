<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use App\Models\ProductSale;
use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    public function store(Request $request) {
        $prodsale = new ProductSale();

        $total_price = $request->input('unitary_price') * $request->input('qtd');

        $prodsale->sale_code = $request->input('sale_code');
        $prodsale->product_id = $request->input('product_id');
        $prodsale->quantity = $request->input('qtd');
        $prodsale->total_price = $total_price;

        $prodsale->save();

        $clisale = new ClientSale();
        $clisale->name = $request->input('client_name');
        $clisale->sale_code = $request->input('sale_code');

        $find_product = RegisterProduct::where('bar_code', 'LIKE', $request->find_product ?? '')->get();

        return view('product-sale', ['clisale' => $clisale, 'find_product' => $find_product]);
    }

    public function findProduct(Request $request){

        $find_product = RegisterProduct::where('bar_code', 'LIKE', $request->find_product ?? '')->get();

        $clisale = new ClientSale();
        $clisale->name = $request->input('client_name');
        $clisale->sale_code = $request->input('sale_code');

        return view('product-sale', ['find_product' => $find_product, 'clisale' => $clisale]);

    }








}
