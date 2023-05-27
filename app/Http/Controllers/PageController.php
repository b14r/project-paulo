<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CountryState;
use App\Models\Payment;
use App\Models\Platform;
use App\Models\Status;
use App\Models\Warranty;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return redirect()->route('welcome');
    }



}
