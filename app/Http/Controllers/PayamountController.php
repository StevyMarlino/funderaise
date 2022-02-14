<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class PayamountController extends Controller
{
    public function index(Request $request){

        $request->session()->put('projet_id', $request->projet_id);
    
        return view('html.payamount');
    }
}
