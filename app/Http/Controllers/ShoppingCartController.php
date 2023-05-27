<?php

namespace App\Http\Controllers;

use App\Models\BookEquipment;
use App\Models\Client;
use App\Models\ClientSale;
use App\Models\ProductSale;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function listShoppingCart(Request $request){
        $clisale = new ClientSale();

        $clisale->name = $request->input('client_name');
        $clisale->sale_code = $request->input('sale_code');

        $find_product_sale = ProductSale::where('sale_code', 'LIKE', $request->sale_code)->get();

        return view('shopping-cart', ['find_product_sale' => $find_product_sale, 'clisale' => $clisale]);
    }

    public function delete(Request $request){
        $delete_product_sale = ProductSale::where('product_id', 'LIKE', $request->product_id)->where('sale_code', 'LIKE', $request->sale_code);
        $delete_product_sale->delete();

        return redirect()->route('shopping-cart');
    }
}
