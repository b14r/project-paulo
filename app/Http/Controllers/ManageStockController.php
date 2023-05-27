<?php

namespace App\Http\Controllers;


use App\Models\RegisterProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageStockController extends Controller
{
    public function index(){
        $stock = RegisterProduct::all();
        return view('manage-stock', ['stock' => $stock]);
    }

    public function down(Request $request){
        $down = $request->input('product_id');
        DB::table('register_products')->where('id', $down)->decrement('quantity');

        $stock = RegisterProduct::all();

        return redirect()->route('manage-stock');
    }

    public function up(Request $request){
        $up = $request->input('product_id');
        DB::table('register_products')->where('id', $up)->increment('quantity');

        $stock = RegisterProduct::all();
        return redirect()->route('manage-stock');
    }
}
