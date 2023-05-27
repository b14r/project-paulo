<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;

use App\Models\MakeSale;
use App\Models\Payment;
use App\Models\ProductSale;
use App\Models\Status;
use Illuminate\Http\Request;

class MakeSaleController extends Controller
{
    public function index(Request $request){
        $clisale = new ClientSale();

        $clisale->name = $request->input('client_name');
        $clisale->sale_code = $request->input('sale_code');

        $find_product_sale = ProductSale::where('sale_code', 'LIKE', $request->sale_code)->get();

        $total = 0;

        foreach ($find_product_sale as $price)
            $total += $price->total_price;

        $payment_type = Payment::all();
        $payment_status = Status::all();
        $sale_status = Status::all();

        return view('make-sale', ['find_product_sale' => $find_product_sale, 'clisale' => $clisale, 'total' => $total, 'payment_type' => $payment_type, 'payment_status' => $payment_status, 'sale_status' => $sale_status]);
    }

    public function store(Request $request){
//        dd($request->input());
        $client_sale_id = ClientSale::where('sale_code', 'LIKE', $request->sale_code)->pluck('id')->implode('');

        $product_sale_id = ProductSale::where('sale_code', 'LIKE', $request->sale_code)->pluck('id')->implode('');

        $make_sale = new MakeSale();
        $make_sale->client_sale_id = $client_sale_id;
        $make_sale->product_sale_id = $product_sale_id;
        $make_sale->payment_id = $request->input('payment_type');
        $make_sale->payment_status_id = $request->input('payment_status');
        $make_sale->sale_status_id = $request->input('sale_status');
        $make_sale->total = $request->input('total');
//        dd($make_sale);
        $make_sale->save();
    }
}
