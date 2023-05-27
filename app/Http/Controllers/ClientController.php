<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\CountryState;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $countryState = CountryState::all();
        return view('/register-client', ['countryState' => $countryState]);
    }

    public function store(Request $request) {
        $client = new Client();

        $client->name = $request->input('name');
        $client->rg = $request->input('rg');
        $client->cpf = $request->input('cpf');
        $client->address = $request->input('address');
        $client->neighborhood = $request->input('neighborhood');
        $client->zip = $request->input('zip');
        $client->city = $request->input('city');
        $client->country_state_id = $request->input('countryState');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');

        $client->save();

        return view('dashboard');
    }


}
