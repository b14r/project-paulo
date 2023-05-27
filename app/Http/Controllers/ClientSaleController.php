<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientSale;
use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class ClientSaleController extends Controller
{
    public function index(Request $request){
        $find_cpf = Client::where('cpf', 'LIKE', $request->find_cpf ?? '')->first();

        return view('client-sale', ['find_cpf' => $find_cpf]);
    }

    public function store(Request $request) {


        $clisale = new ClientSale();

        $clisale->client_id = $request->input('client_id');
        $clisale->sale_code = $request->input('sale_code');

        $clisale->save();

        $clisale->name = $request->input('client_name');

        $find_product = RegisterProduct::where('bar_code', 'LIKE', $request->find_product ?? '')->get();

        return view('product-sale', ['clisale' => $clisale, 'find_product' => $find_product]);
    }
}
