<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use App\Models\MakeSale;
use Illuminate\Http\Request;

class CancelSaleController extends Controller
{
    public function index(){
        $cancel_sale = MakeSale::all();

        return view('cancel-sale', ['cancel_sale' => $cancel_sale]);
    }

    public function delete(Request $request){
        $delete_sale = MakeSale::where('client_sale_id', 'LIKE', $request->client_sale_id);
        $delete_sale->delete();

        return redirect()->route('cancel-sale');
    }
}
